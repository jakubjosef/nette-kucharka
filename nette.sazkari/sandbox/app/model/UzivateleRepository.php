<?php

namespace Sazkari;

use Nette;

class UzivateleRepository extends Repository
{
    public function pridatUzivatele(Nette\Application\UI\Form $formRegistrace){
      $user=$formRegistrace->getValues();
      unset($user["heslo1"]);
      $user["heslo"]=  \Authenticator::calculateHash($user["heslo"]);
      
      if($user['fotka']->isOk() && $user['fotka']->isImage()){
        $filename=$this->saveImage($user['fotka'],"users",$user["nick"]);
        $user["fotka"]=$filename;
      }else{
          unset($user['fotka']);
      }
      if(!isset($user['id']) || $user["id"]==""){
        $this->flashMessage("Uživatel byl přidán");
      }else{
        $this->flashMessage("Uživatel byl upraven");
      }
      $this->insertEdit($user, "Homepage:");
  }
  public function upravitPenezenku(Nette\Application\UI\Form $formUzivatele){
      $uzivatele=$formUzivatele->getValues(true);
      $this->update($uzivatele, array("id"=>$uzivatele["id"]));
      $this->redirect("Admin:penezenka");
  }
}
