<?php
use \Nette\Application\UI\Form;
class SazkariPresenter extends BasePresenter{
   /** @var Sazkari\ZapasyRepository */
    public $zapasyRepository;
   /** @var Sazkari\UzivateleRepository */
    public $uzivateleRepository;
   /** @var Sazkari\TymyRepository */
    public $tymyRepository;
   /** @var Sazkari\LigyRepository */
    public $ligyRepository;
   /** @var Sazkari\KolaRepository */
    public $kolaRepository;
   /** @var Sazkari\TipyRepository */
    public $tipyRepository;
   /** @var Sazkari\SkupinyRepository */
    public $skupinyRepository;
    public function __construct(Sazkari\TipyRepository $tipyRepository,Sazkari\KolaRepository $kolaRepository,Sazkari\LigyRepository $ligyRepository,Sazkari\TymyRepository $tymyRepository,Sazkari\ZapasyRepository $zapasyRepository,  Sazkari\UzivateleRepository $uzivateleRepository,Sazkari\SkupinyRepository $skupinyRepository) {
        $this->zapasyRepository=$zapasyRepository;
        $this->uzivateleRepository=$uzivateleRepository;
        $this->tymyRepository=$tymyRepository;
        $this->kolaRepository=$kolaRepository;
        $this->ligyRepository=$ligyRepository;
        $this->tipyRepository=$tipyRepository;
        $this->skupinyRepository=$skupinyRepository;
        
        $this->tipyRepository->setPresenter($this);
    }
    public function startup() {
        parent::startup();
        $this->checkUserAccess("Homepage:");
    }
    
    public function createComponentTipToMatch(){
        $form=new Form();
        $form->addRadioList("tip", "Tip: ", array("1"=>"Výhra domácích","2" => "Výhra hostů","0" => "Remíza"))->setRequired("Nezvolily jste typ sázky");
        $form->addSubmit('send','Tipnout');
        $form->addHidden('zapasy_id');
        $form->onSuccess[]=  callback($this->tipyRepository,"tipniZapas");
        return $form;
    }

    public function renderZapas($id){
       $zapas=$this->zapasyRepository->find($id);
       $aktualniTipy=$this->tipyRepository->findBy(array("zapasy_id" => $id,"uzivatele_id" => $this->getUser()->id));
       if($aktualniTipy->count()==0){
           $this->template->tipped=false;
       }elseif($aktualniTipy->count()==1){
           $this->template->tipped=true;
           $this->template->tip=$aktualniTipy->fetch();
       }
       $this->template->zapas=$zapas;
       $this->template->today=new DateTime();
       $this->template->kolo=$this->kolaRepository->find($zapas->kola_id);
    }
    public function renderRozpisLiga(){
        $this->template->kola=$this->kolaRepository->findAll();
    }
    public function renderRozpisKola($id){
        $this->template->kola=$this->kolaRepository->findAll();
        $this->template->kolo=$this->kolaRepository->find($id);
        $this->template->uzivatele=$this->uzivateleRepository->findAll();
        $this->template->tipy=$this->tipyRepository->findAll();
    }
    public function renderTabulkaLigy(){
        $this->template->tipy=$this->tipyRepository->findAll();
        $uzivatele=$this->uzivateleRepository->findAll();
        $skupiny=array("A" => array("nazev" => "Skupina A","radky"=>array()),
                       "B" => array("nazev" => "Skupina B","radky"=>array()),
                       "C" => array("nazev" => "Skupina C","radky"=>array()),
                       "D" => array("nazev" => "Skupina D","radky"=>array()),
                        );
            
        foreach ($uzivatele as $uzivatel) {
                $uzivatelska_skupina=$this->skupinyRepository->find($uzivatel->id_skupiny)->nazev;
                $skupina=substr($uzivatelska_skupina,0,1);
                $radekTabulky=new stdClass;
                $radekTabulky->body=0;
                $radekTabulky->vyhry=0;
                $radekTabulky->remizy=0;
                $radekTabulky->uzivatel=$uzivatel->nick;
                $tipy=$this->tipyRepository->findBy(array("uzivatele_id"=>$uzivatel->id,"vysledek" => "1"));
                $celkove_tipy_pocet=$this->tipyRepository->findBy(array("uzivatele_id"=>$uzivatel->id,"vysledek!=?" => "0"))->count();
                $radekTabulky->prohry=$celkove_tipy_pocet-$tipy->count();
                $radekTabulky->zapasy=$celkove_tipy_pocet;
                foreach($tipy as $tip){
                    if($tip){
                        $tipovany_zapas=$this->zapasyRepository->find($tip->zapasy_id);
                        if($tipovany_zapas->vysledek == 0 && $tip->tip == $tipovany_zapas->vysledek){
                            //vyjde remiza
                            $radekTabulky->body+=1;
                            $radekTabulky->remizy++;
                        }elseif($tip->tip == $tipovany_zapas->vysledek){
                            //vyjde vyhra
                            $radekTabulky->body+=3;
                            $radekTabulky->vyhry++;

                        }

                    }
                }

                array_push($skupiny[$skupina]["radky"],$radekTabulky);
            }
            
            $this->template->skupiny=$this->seradSkupiny($skupiny);
    }
    private function seradSkupiny(array $skupiny){
        $returnSkupiny=$skupiny;
        foreach ($skupiny as $key=>$skupina){
            $radky=$skupina["radky"];
            usort($radky, array($this,"cmp"));
            $returnSkupiny[$key]["radky"]=$radky;
        } 
        return $returnSkupiny;
    }
    private function cmp($jeden, $druhej)
    {
        $a=$jeden->body;
        $b=$druhej->body;
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
    }
    public function renderTipyVyberkolo(){
        $this->template->kola=$this->kolaRepository->findAll();
        
    }
    public function renderTipyVyberhrace($id_kola){
        $this->template->uzivatele=$this->uzivateleRepository->findAll();
        $this->template->id_kola=$id_kola;
        
        
    }
    public function renderTipyZobraz($id_kola,$uzivatele_id){
        $this->template->nazevkola = $this->kolaRepository->find($id_kola);
        $this->template->uzivatel = $this->uzivateleRepository->find($uzivatele_id);
        $this->template->id_kola = $id_kola;
        $this->template->tipy=$this->tipyRepository->findBy(array("uzivatele_id"=>$uzivatele_id))->order("timestamp DESC");
        
    }
    public function renderPenezenka(){
        $this->template->uzivatele=$this->uzivateleRepository->findAll()->order('zustatek ASC');
    }
    public function renderStatistika(){
        $this->template->uzivatele=$this->uzivateleRepository->findAll();
        $this->template->tipy=$this->tipyRepository->findAll();
    }
    public function renderMojeTipy($page=1){
        $paginator = new Nette\Utils\Paginator;
        $paginator->setItemCount($this->tipyRepository->findAll()->count("*"));
        $paginator->setItemsPerPage(8);
        $paginator->setPage($page);
        $this->template->pageNavigator = $paginator;
        $this->template->tipy=$this->tipyRepository->findBy(array("uzivatele_id"=>$this->getUser()->id))->order("timestamp DESC")
              ->limit($paginator->getLength(), $paginator->getOffset());;
    }
    public function renderTipy($id = 8){
      $this->template->tymy=$this->tymyRepository->findAll();
      $this->template->kola=$this->kolaRepository->findAll()->order('id DESC');
      $this->template->kolo=$this->kolaRepository->find($id);
      $this->template->zapasy=$this->zapasyRepository->findBy(array("kola_id"=>$id));
    }
    public function renderTipniZapas($id){
        if($this->tipyRepository->findBy(array("zapasy_id" => $id,"uzivatele_id" => $this->getUser()->id))->count()==0){
            $zapas=$this->zapasyRepository->find($id);
            if($this->kolaRepository->find($zapas->kola_id)->konec_kola>new Nette\DateTime()){
                $this->template->zapas=$zapas;
                $this["tipToMatch"]->setDefaults(array("zapasy_id" => $id));
            }else{
                $this->flashMessage("Toto kolo už skončilo");
                $this->redirect("Sazkari:tipy");
            }
            
        }else{
            $this->flashMessage("Na tento zápas bylo již tipnuto");
            $this->redirect("Sazkari:tipy");
            
        }
        
    }
    
    
}
