<?php
use Nette\Application\UI\Form;
/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
  /** @var Sazkari\UzivateleRepository */
  private $uzivateleRepository;
  /** @var Sazkari\UvodRepository */
  private $uvodRepository;
  /** @var Sazkari\SkupinyRepository */
  private $skupinyRepository;
  
  public function __construct(Sazkari\SkupinyRepository $skupinyRepository,Sazkari\UvodRepository $uvodRepository,Sazkari\UzivateleRepository $uzivateleRepository) {
     $this->uzivateleRepository = $uzivateleRepository;
     $this->uvodRepository = $uvodRepository;
     $this->skupinyRepository = $skupinyRepository;
     
     $this->uvodRepository->setPresenter($this);
     $this->uzivateleRepository->setPresenter($this);
     $this->skupinyRepository->setPresenter($this);
  }
  public function renderDefault(){
    $this->template->uvod = $this->uvodRepository->findAll();
    }
  public function renderUpravUzivatele($id){
      //musi byt nekdo prihlasen a to presne ten koho chceme editovat
      $this->checkUserExclusiveAccess($id,"Homepage:");
      $uzivatele=$this->uzivateleRepository->find($id);
      $this["registraceForm"]->addSubmit('send','Upravit');
      $this["registraceForm"]->setDefaults(array(
                                    "id"=>$uzivatele->id,
                                    "jmeno"=>$uzivatele->jmeno,
                                    "prijmeni"=>$uzivatele->prijmeni,
                                    "nick"=>$uzivatele->nick,
                                    "id_skupiny"=>$uzivatele->id_skupiny,
                                    "email"=>$uzivatele->email,
                                    "heslo"=>$uzivatele->heslo,
                                    "vek"=>$uzivatele->vek,
    ));
  }
  public function renderPridatUzivatele(){
      $this["registraceForm"]->addSubmit('send','Přidat');
  }
  public function createComponentRegistraceForm(){
    $skupiny = $this->skupinyRepository->findAll()->where('id')->fetchPairs('id', 'nazev');
    $form = new Form;
    $form->setMethod('POST');
    $form->addText('jmeno','Jméno:')
          ->setType('text')
          ->setRequired('Zadejte prosím jméno');
    $form->addText('prijmeni','Přijmení:')
          ->setType('text')
          ->setRequired('Zadejte prosím příjmení');
    $form->addText('nick','Přezdívka:')
          ->setType('text')
          ->setRequired('Zadejte prosím přezdívku');
    $form->addSelect('id_skupiny', 'Skupina:')->setItems($skupiny)->setPrompt('Vyber skupinu:')
            ->setRequired('Vyberte skupinu!');
    $form->addText('email','Email:')
          ->setType('email')
          ->addRule(Form::EMAIL,'Toto není platná emailová adresa');
    $form->addPassword('heslo','Heslo:')
          ->setRequired('Zadejte prosím heslo')
          ->addRule(Form::MIN_LENGTH, 'Heslo musí obsahovat alespoň %d znaků',5);
    $form->addPassword('heslo1','Heslo pro kontrolu:')
            ->addConditionOn($form['heslo'], Form::VALID)
            ->addRule(Form::FILLED, 'Heslo znovu')
            ->addRule(Form::EQUAL, 'Hesla se neshodují', $form['heslo']);
    $form->addText('vek','Věk:')
         ->setType('number')
         ->addRule(Form::INTEGER,'Věk musí být číslo')
         ->addRule(Form::RANGE,'Věk musí být od %d do %d let', array(18,100));
    $form->addUpload('fotka',"Fotka: ");
    $form->addProtection('Vypršel časový limit, odešlete formulář znovu');
    $form->addHidden("id");
    $form->onSuccess[]=  callback($this->uzivateleRepository,'pridatUzivatele');
    return $form;
  }
}
