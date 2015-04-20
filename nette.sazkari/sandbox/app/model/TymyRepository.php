<?php
namespace Sazkari;
use Nette;
class TymyRepository extends Repository{
    public function pridatTym(Nette\Application\UI\Form $formTym){
     $values=$formTym->getValues();
        if($values['team_logo']->isOk() && $values['team_logo']->isImage()){
            $filename=$this->saveImage($values['team_logo'],"teams",$values["nazev"],array(150,150));
            $values["logo"]=$filename;
        }
        unset($values['team_logo']);
        $this->insertEdit($values,"Admin:tymy");
  }
  public function countItem(){
    return $this->findAll()->count("*");  
  }
}