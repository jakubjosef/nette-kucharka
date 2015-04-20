<?php
/**
 * News presenter.
 */
use Nette\Application\UI\Form;
use Nette\Mail\Message;

class AdminPresenter extends BasePresenter
{
  /** @var Sazkari\SazkariRepository */
  private $sazkariRepository;
  /** @var Sazkari\AdminRepository */
  private $adminRepository;
  /** @var Sazkari\NovinkyRepository */
  private $novinkyRepository;
  /** @var Sazkari\UzivateleRepository */
  private $uzivateleRepository;
  /** @var Sazkari\KolaRepository */
  private $kolaRepository;
  /** @var Sazkari\ZapasyRepository */
  private $zapasyRepository;
  /** @var Sazkari\LigyRepository */
  private $ligyRepository;
  /** @var Sazkari\RozpisRepository */
  private $rozpisRepository;
  /** @var Sazkari\TymyRepository */
  private $tymyRepository;
  /** @var Sazkari\TipyRepository */
  private $tipyRepository;
  /** @var Sazkari\UvodRepository */
  private $uvodRepository;
  /**
 * @var Nette\Mail\IMailer
 */
private $mailer;
public function injectMailer(Nette\Mail\IMailer $mailer)
{
    $this->mailer = $mailer;
}


  public function __construct(Sazkari\SazkariRepository $sazkariRepository,Sazkari\UvodRepository $uvodRepository,Sazkari\TymyRepository $tymyRepository,  Sazkari\TipyRepository $tipyRepository,Sazkari\RozpisRepository $rozpisRepository, Sazkari\LigyRepository $ligyRepository,Sazkari\ZapasyRepository $zapasyRepository, Sazkari\AdminRepository $adminRepository,  Sazkari\KolaRepository $kolaRepository,  Sazkari\UzivateleRepository $uzivateleRepository, Sazkari\NovinkyRepository $novinkyRepository) {
     $this->sazkariRepository=$sazkariRepository;
     $this->adminRepository = $adminRepository;
     $this->novinkyRepository = $novinkyRepository;
     $this->uzivateleRepository = $uzivateleRepository;
     $this->kolaRepository = $kolaRepository;
     $this->zapasyRepository = $zapasyRepository;
     $this->ligyRepository = $ligyRepository;
     $this->rozpisRepository = $rozpisRepository;
     $this->tymyRepository = $tymyRepository;
     $this->tipyRepository = $tipyRepository;
     $this->uvodRepository = $uvodRepository;
     
     $this->sazkariRepository->setPresenter($this);
     $this->novinkyRepository->setPresenter($this);
     $this->uzivateleRepository->setPresenter($this);
     $this->zapasyRepository->setPresenter($this);
     $this->kolaRepository->setPresenter($this);
     $this->rozpisRepository->setPresenter($this);
     $this->ligyRepository->setPresenter($this);
     $this->tymyRepository->setPresenter($this);
     $this->tipyRepository->setPresenter($this);
     $this->uvodRepository->setPresenter($this);
  }
    public function startup() {
      if($this->getAction()!="default"){
          $this->checkAdminAccess("Admin:");

      }
      parent::startup();
  }
  public function poslatHeslo($formEmail){
//      $mail = new Message;
//      $mail->setFrom('Admin <scholz.pitrs@gmail.com>')
//            ->addTo('scholz.pitrs@gmail.com')
//            ->setSubject('PolickaTipLiga - Heslo')
//            ->setBody("Dobrý den,\nvaše zapomenuté heslo je: .". "HESLO")
//            ->send($mail);
//      if(!$mail->send()){
//          echo "SEND";
//      }
        $values = $formEmail->getValues();
        $mail = new \Nette\Mail\Message();
        $mail->setFrom('scholz.pitrs@gmail.com');
        $mail->addTo($values->email);
//        echo $values->email;
//        $uzivatel=$this->uzivateleRepository->findByEmail($mail);
//        $heslo = array("heslo"=>$uzivatel->heslo);
        $mail->setSubject('PolickaTipLiga - Heslo');
        $mail->setBody("Dobrý den,\nvaše zapomenuté heslo je: .". "heslo");
        $mailer = new \Nette\Mail\SmtpMailer((array) \Nette\Environment::getConfig('mailer'));
        $mail->setMailer($mailer);
//        $mail->send();
        
  }
  public function createComponentZapomenuteHeslo(){
      $form=new Form;
      $form->setMethod("POST");
      $form->addText("email","E-mail:")->setRequired("Zadejte e-mail");
      $form->addSubmit('doLogin',"Odeslat");
      $form->onSuccess[]=  callback($this,"poslatHeslo");
      return $form;  
  }
  public function logIn($form){
      $user=$this->getUser();
      
            $user->setExpiration('+ 30 minutes', TRUE);
          $values=$form->getValues();
          try {
            $user->login($values->login, $values->pass);
                if($this->user->isInRole('1')){    
                     $this->redirect("Admin:novinky");
                }else {
                    $this->user->logout();
                    $this->flashMessage('Nemáš oprávnění přistupovat do administrativní části');
                    $this->redirect("Admin:flashes");
                }
            } catch (Nette\Security\AuthenticationException $e) {
                $this->flashMessage($e->getMessage());
            }  
  }
  public function renderDefault(){
      if($this->checkAdminAccess()){
          $this->redirect("Admin:uvod");
      }
  }
  public function renderNovinky($page = 1){
      $paginator = new Nette\Utils\Paginator;
      $paginator->setItemCount($this->novinkyRepository->countItem());
      $paginator->setItemsPerPage(10);
      $paginator->setPage($page);
      $this->template->pageNavigator = $paginator;
      $this->template->news = $this->novinkyRepository->findAll()
              ->order('datetime DESC')
              ->limit($paginator->getLength(), $paginator->getOffset());
  }
  public function renderKola(){
      $this->template->kola=$this->kolaRepository->findAll()->order('id DESC');
      $this->template->ligy=$this->ligyRepository->findAll();
      $this->template->today=new DateTime();
  }
  public function actionZavriKolo($id){
      $kolo=$this->kolaRepository->find($id);
      if($kolo->vyplaceno==0){
        $this->kolaRepository->update(array("vyplaceno"=>1), array("id"=>$id));
        $zapasy=$this->zapasyRepository->findBy(array("kola_id" => $id))->fetchPairs("id");

        foreach($zapasy as $zapas){
            $tipy=$this->tipyRepository->findBy(array("zapasy_id"=>$zapas->id));
            foreach($tipy as $tip){
                if($zapas->vysledek == $tip->tip){
                    $this->tipyRepository->update(array("vysledek" => 1), array("id"=>$tip->id));
                }else{
                    $this->tipyRepository->update(array("vysledek" => 2), array("id"=>$tip->id));
                }
            }
        }
        $this->flashMessage("Kolo bylo uzavřeno");
      }else{
        $this->flashMessage("Kolo již bylo uzavřeno!");
      }
      $this->redirect("Admin:kola");
  }
  public function renderUvod(){
      $this->template->uvod=$this->uvodRepository->findAll();
  }
  public function renderPenezenka(){
      $this->template->uzivatele=$this->uzivateleRepository->findAll()->order('zustatek DESC');
  }
  public function renderLiga(){
      $this->template->ligy=$this->ligyRepository->findAll()->order('id DESC');
  }
  public function renderZapasy($page = 1){
      $paginator = new Nette\Utils\Paginator;
      $paginator->setItemCount($this->zapasyRepository->findAll()->count("*"));
      $paginator->setItemsPerPage(8);
      $paginator->setPage($page);
      $this->template->pageNavigator = $paginator;
      $this->template->tymy=$this->tymyRepository->findAll();
      $this->template->zapasy = $this->zapasyRepository->findAll()
              ->order('kola_id ASC')
              ->limit($paginator->getLength(), $paginator->getOffset());
  }
  public function renderRozpis(){
      $this->template->rozpisy=$this->rozpisRepository->findAll()->order('kolo ASC');
  }
  public function renderTymy($page = 1){
      $paginator = new Nette\Utils\Paginator;
      $paginator->setItemCount($this->tymyRepository->countItem());
      $paginator->setItemsPerPage(15);
      $paginator->setPage($page);
      $this->template->pageNavigator = $paginator;
      $this->template->tymy=$this->tymyRepository->findAll()
              ->order('nazev ASC')
              ->limit($paginator->getLength(), $paginator->getOffset());
  }
  public function renderPridatRozpis(){
      $this["addRozpisForm"]->addSubmit('send',"Přidat")->setAttribute("class","btn");
  }
  public function renderUpravRozpis($id){
      $rozpis=$this->rozpisRepository->find($id);
      $this["addRozpisForm"]->addSubmit('send',"Upravit")->setAttribute("class","btn");
      $this["addRozpisForm"]->setDefaults(array("id"=>$rozpis->id,"kolo"=>$rozpis->kolo,"liga"=>$rozpis->liga,"pohar"=>$rozpis->pohar));
  }
  public function renderPridatNovinku(){
      $this["addNewsForm"]->addSubmit('send','Přidat')->setAttribute("class","btn");
  }
  public function renderUpravNovinku($id){
      $novinka=$this->novinkyRepository->find($id);
      $this["addNewsForm"]->addSubmit('send','Upravit')->setAttribute("class","btn");
      $this["addNewsForm"]->setDefaults(array("id"=>$novinka->id,"text"=>$novinka->text));
  }
  public function renderPridatUvod(){
      $this->template->mode="přidat";
      $this["addUvodForm"]->addSubmit('send','Přidat')->setAttribute("class","btn");
  }
  public function renderUpravUvod($id){
      $this->template->mode="upravit";
      $uvod=$this->uvodRepository->find($id);
      $this["addUvodForm"]->addSubmit('send','Upravit')->setAttribute("class","btn");
      $this["addUvodForm"]->setDefaults(array("id"=>$uvod->id,"text"=>$uvod->text));
  }
  public function renderPridatTym(){
      $this["addTymForm"]->addSubmit('send','Přidat')->setAttribute("class","btn");
  }
  public function renderUpravTym($id){
      $tym=$this->tymyRepository->find($id);
      $this["addTymForm"]->addSubmit('send','Upravit')->setAttribute("class","btn");
      $this["addTymForm"]->setDefaults(array("id"=>$tym->id,"id_sportu"=>$tym->id_sportu,"nazev"=>$tym->nazev));
  }
  public function renderPridatLigu(){
      $this["addLigaForm"]->addSubmit('send','Přidat')->setAttribute("class","btn");
  }
  public function renderUpravLigu($id){
      $liga=$this->ligyRepository->find($id);
      $this["addLigaForm"]->addSubmit('send','Upravit')->setAttribute("class","btn");
      $this["addLigaForm"]->setDefaults(array("id"=>$liga->id,"nazev"=>$liga->nazev));
  }
  public function renderPridatKolo(){
      $this["addKolaForm"]->addSubmit("send","Přidat")->setAttribute("class","btn");
  }
  public function renderUpravKolo($id){
      $kolo=$this->kolaRepository->find($id);
      $this["addKolaForm"]->addSubmit("send","Upravit")->setAttribute("class","btn");
      $this["addKolaForm"]->setDefaults(array("id"=>$kolo->id,"nazev" => $kolo->nazev,"ligy_id"=>$kolo->ligy_id,"zacatek_kola"=>$kolo->zacatek_kola->format("d.m.Y"),"konec_kola"=>$kolo->konec_kola->format("d.m.Y")));
  }
  public function renderUpravPenezenku($id){
      $uzivatele=$this->uzivateleRepository->find($id);
      $this["updateWalletForm"]->setDefaults(array(
                                    "id"=>$uzivatele->id,
                                    "jmeno"=>$uzivatele->jmeno,
                                    "prijmeni"=>$uzivatele->prijmeni,
                                    "zustatek"=>$uzivatele->zustatek
                                    ));
  }
  public function renderPridatZapas(){
      $this["addZapasForm"]->addSubmit('send','Přidat')->setAttribute("class","btn");
  }
  public function renderUpravZapas($id){
      $zapas=$this->zapasyRepository->find($id);
      $this["addZapasForm"]->addSubmit('send','Upravit')->setAttribute("class","btn");
      $this["addZapasForm"]->setDefaults(array(
                                        "id"=>$zapas->id,
                                        "kola_id"=>$zapas->kola_id,
                                        "sporty_id"=>$zapas->sporty_id,
                                        "domaci_id"=>$zapas->domaci_id,
                                        "hoste_id"=>$zapas->hoste_id,
                                        "datum"=>$zapas->datum,
                                        "handicap_domacich"=>$zapas->handicap_domacich,
                                        "handicap_hostu"=>$zapas->handicap_hostu,
                                        "vysledek_domacich"=>$zapas->vysledek_domacich,
                                        "vysledek_hostu"=>$zapas->vysledek_hostu,
                                        "vysledek"=>$zapas->vysledek
                                        ));
  }
  public function actionSmazNovinku($id){
      $this->novinkyRepository->delete($id);
      $this->flashMessage('Novinka byla smazána');
      $this->redirect("Admin:novinky");
  }
  
  public function actionOdhlasitUzivatele(){
      if ($this->getUser()->isLoggedIn()) {
          $this->user->logout();
          $this->flashMessage('Uživatel byl odhlášen');
          $this->redirect("Admin:default");
      }
  }
  
  public function actionSmazRozpis($id){
      try{
          $this->rozpisRepository->delete($id);
          $this->flashMessage('Rozpis byl smazán');
      } catch (Exception $e) {
          $this->flashMessage('Tato položka nelze smazat');
      }
      $this->redirect("Admin:rozpis");
  }
  public function actionSmazTym($id){
      $this->tymyRepository->delete($id);
      $this->flashMessage('Tým byl smazán');
      $this->redirect("Admin:tymy");
  }
  public function actionSmazLigu($id){
      $this->ligyRepository->delete($id);
      $this->flashMessage('Liga byla smazána');
      $this->redirect("Admin:liga");
  }
  public function actionSmazKolo($id){
      $this->kolaRepository->delete($id);
      $this->flashMessage('Kolo bylo smazáno');
      $this->redirect("Admin:kola");
  }
  public function actionSmazZapas($id){
      $this->zapasyRepository->delete($id);
      $this->flashMessage('Zápas byl smazán');
      $this->redirect("Admin:zapasy");
  }
  protected function createComponentLoginForm(){
      $form=new Form;
      $form->setMethod("POST");
      $form->addText("login","Login:")->setRequired("Zadejte e-mail");
      $form->addPassword("pass","Heslo")->setRequired("Zadejte heslo");
      $form->addSubmit('doLogin',"Přihlásit");
      $form->onSuccess[]=  callback($this,"logIn");
      return $form;
  }
  protected function createComponentAddTymForm(){
    $sports=$this->sazkariRepository->getSporty();
    $form = new Form;
    $form->setMethod('POST');
    $form->addHidden('id');
    $form->addSelect('id_sportu','Sport:',$sports);
    $form->addText('nazev','Název týmu:')
            ->setRequired('Zadejte název týmu!');
    $form->addUpload('team_logo',"Logo týmu: ");
    $form->onSuccess[]=  callback($this->tymyRepository,'pridatTym');
    return $form;  
  }
  protected function createComponentAddZapasForm(){
      $tymy = $this->tymyRepository->findAll()->where('id')->fetchPairs('id', 'nazev');
      $kola = $this->kolaRepository->findAll()->where('id')->fetchPairs('id','nazev');
      $sports=$this->sazkariRepository->getSporty();
    $form = new Form;
    $form->addGroup("Zápas");
    $form->setMethod('POST');
    $form->addHidden('id');
    $form->addSelect('kola_id','Kolo:')->setItems($kola)->setPrompt('Vyber kolo:')
            ->setRequired('Zadejte ID!');
    $form->addSelect('sporty_id','Sport:',$sports);
    $form->addSelect('domaci_id','Domácí:')->setItems($tymy)->setPrompt('Vyber tým:')
            ->setRequired('Zadejte ID!');
    $form->addSelect('hoste_id','Hosté:')->setItems($tymy)->setPrompt('Vyber tým:')
            ->setRequired('Zadejte ID!');
    $form->addText('datum','Datum:')
            ->setRequired('Vyplňte datum! ');
    $form->addText('handicap_domacich','Handicap domácích:')
            ->setValue("0")
            ->setRequired('Zadejte Handicap!')
            ->addRule(Form::INTEGER,'Handicap musí být číslo');
    $form->addText('handicap_hostu','Handicap hostů:')
            ->setValue("0")
            ->setRequired('Zadejte Handicap!')
            ->addRule(Form::INTEGER,'Handicap musí být číslo');
    $form->addGroup("Výsledek");
    $form->addText('vysledek_domacich','Domácí:')
            ->setAttribute("class","small");
    $form->addText('vysledek_hostu','Hosté:')
            ->setAttribute("class","small");
    $form->onSuccess[]=  callback($this->zapasyRepository,'pridatZapas');
    return $form;  
  }
  protected function createComponentAddRozpisForm(){
    $form = new Form;
    $form->setMethod('POST');
    $form->addHidden('id');
    $form->addText('kolo','Kolo:')
          ->setRequired('Zadejte název kola! ');
    $form->addText('liga','Liga:')
          ->setRequired('Zadejte název ligy! ');
    $form->addText('pohar','Pohár:')
          ->setRequired('Zadejte název poháru! ');
    $form->onSuccess[]=  callback($this->rozpisRepository,'pridatRozpis');
    return $form;
  }
  protected function createComponentAddLigaForm(){
    $form = new Form;
    $form->setMethod('POST');
    $form->addHidden('id');
    $form->addText('nazev','Název:')
          ->setRequired('Zadejte název ligy! ');
    $form->onSuccess[]=  callback($this->ligyRepository,'pridatLigu');
    return $form;
  }
  protected function createComponentAddKolaForm(){
    $ligy = $this->ligyRepository->findAll()->where('id')->fetchPairs('id',"nazev");
    $form = new Form;
    $form->setMethod('POST');
    $form->addHidden('id');
    $form->addSelect("ligy_id", "Liga: ", $ligy)->setPrompt("Vyber ligu:")
          ->setRequired('Vyberte ligu! ');
    $form->addText('nazev',"Název: ")->setRequired("Název musí být vyplněn");
    $form->addText('zacatek_kola','Začátek kola: ')
          ->setRequired('Vyplňte všechna pole! ');
    $form->addText('konec_kola','Konec kola: ')
          ->setRequired('Vyplňte všechna pole! ');
    $form->onSuccess[]=  callback($this->kolaRepository,'pridatKolo');
    return $form;
  }
  protected function createComponentAddNewsForm(){
    $form = new Form;
    $form->setMethod('POST');
    $form->addHidden('id');
    $form->addTextArea('text','Text:')
          ->setAttribute('class','tinymce');
    $form->addHidden("datetime",date("Y-m-d H:i:s"));
    $form->onSuccess[]=  callback($this->novinkyRepository,'pridatNovinku');
    return $form;
  }
  protected function createComponentAddUvodForm(){
    $form = new Form;
    $form->setMethod('POST');
    $form->addHidden('id');
    $form->addTextarea("text", NULL, 80, 20)->getControlPrototype()->class("tinymce");
    $form->addHidden("datum",date("Y-m-d"));
    $form->onSuccess[]=  callback($this->uvodRepository,'upravitUvod');
    return $form;
  }
  protected function createComponentUpdateWalletForm(){
      $form = new Form;
      $form->setMethod('POST');
      $form->addHidden('id');
      $form->addText('jmeno','Jméno:')
              ->setDisabled(TRUE)
              ->setRequired('Není zadáno jméno!');
      $form->addText('prijmeni','Prijmeni')
              ->setDisabled(TRUE)
              ->setRequired('Není zadáno příjmení');
      $form->addText('zustatek','Zůstatek')
              ->addRule(Form::INTEGER,'Zůstatek musí být číslo')
              ->setRequired('Musíš vypl�?it pole');
      $form->addSubmit('send','Upravit');
      $form->onSuccess[]= callback($this->uzivateleRepository,'upravitPenezenku');
      return $form;
  }
}

