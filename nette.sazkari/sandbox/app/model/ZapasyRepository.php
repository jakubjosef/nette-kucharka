<?php
namespace Sazkari;

use Nette;
class ZapasyRepository extends Repository{
    
    public function pridatZapas(Nette\Application\UI\Form $formZapas){
     $values=$formZapas->getValues();
     
     if(isset($values["vysledek_domacich"]) && isset($values["vysledek_hostu"])){
        //obslouzime varianty vysledku
         $values["vysledek"]=$this->vyhodnotitZapas($values);
     }
     $this->insertEdit($values,"Admin:zapasy");
  }
  public function vyhodnotitZapas($idOrArray){
      if($idOrArray instanceof \ArrayAccess){
          $zapas=$idOrArray;
      }else{
        $zapas=$this->find($idOrArray);
      }
      $vysledekDomacich=$zapas->vysledek_domacich+$zapas->handicap_domacich+1;
      $vysledekHostu=$zapas->vysledek_hostu+$zapas->handicap_hostu;
      if($vysledekDomacich>$vysledekHostu){
        return 1;
      }elseif($vysledekHostu>$vysledekDomacich){
        return 2;
      }else{
        return 0;
      }
  }
}
