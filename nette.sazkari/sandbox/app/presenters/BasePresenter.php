<?php

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
   public function startup() {
       $this->template->loggedIn=$this->getUser()->loggedIn;
      parent::startup();
  }
/**
  * Metoda zkontroluje jestli je prihlasen uzivatel do uzivatelske sekce
  * @param string $redirect_url
  * @return boolean vysledek nebo presmeruje
  */
    protected function checkUserAccess($redirect_url=false){
      $user=$this->getUser();
      if($user->loggedIn){
          return true;
      }else{
          if($redirect_url){
             $reason=$user->getLogoutReason();
             if($reason==\Nette\Security\IUserStorage::INACTIVITY){
                    $this->flashMessage("Vypršela doba přihlášení");
             }else{
                 $this->flashMessage("Nemáte oprávnění prohlížet tuto stránku");
             }
            $this->redirect($redirect_url);
          }else{
              return false;
          }
      }
    }
    /**
     * Metoda zkontroluje jestli ma aktualne prihlaseny uzivatel exkluzivni pristup k dane sekci (musi byt explicitne uvedeno jeho user_id)
     * @param int $user_id id overovateneho uzivatele
     * @param string $redirect_url kam presmerovat
     * @return boolean
     */
    protected function checkUserExclusiveAccess($user_id,$redirect_url=false){
        $user=$this->getUser();
        if($user->loggedIn && $user->id==$user_id){
            return true;
        }else{
            if($redirect_url){
                $reason=$user->getLogoutReason();
                if($reason==\Nette\Security\IUserStorage::INACTIVITY){
                    $this->flashMessage("Vypršela doba přihlášení");
                }else{
                    $this->flashMessage("Nemáte oprávnění prohlížet tuto stránku");
                }
                $this->redirect($redirect_url);
            }else{
                return false;
            }
        }
    }
    /**
     * Metoda zkontroluje jestli je prihlasen uzivatel do administratorske sekce
     * @param string $redirect_url
     * @return boolean vysledek nebo presmeruje
     */
    protected function checkAdminAccess($redirect_url=false){
        $user=$this->getUser();
        if($user->loggedIn && $user->isInRole("1")){
            return true;
        }else{
            if($redirect_url){
                $reason=$user->getLogoutReason();
                if($reason==\Nette\Security\IUserStorage::INACTIVITY){
                    $this->flashMessage("Vypršela doba přihlášení");
                }else{
                    $this->flashMessage("Nemáte oprávnění prohlížet tuto stránku");
                }
                $this->redirect($redirect_url);
            }else{
                return false;
            }
        }
    }
    protected function createComponentTexyla()
	{
		$baseUri = $this->context->httpRequest->url->baseUrl;
		$filter = new WebLoader\Filter\VariablesFilter(array(
				"baseUri" => $baseUri,
				"previewPath" => $this->link("Texyla:preview"),
				"filesPath" => $this->link("Texyla:listFiles"),
				"filesUploadPath" => $this->link("Texyla:upload"),
				"filesMkDirPath" => $this->link("Texyla:mkDir"),
				"filesRenamePath" => $this->link("Texyla:rename"),
				"filesDeletePath" => $this->link("Texyla:delete"),
			));

		$texyla = new TexylaLoader($filter, $baseUri . "webtemp");
		return $texyla;
	}
    
    
}
