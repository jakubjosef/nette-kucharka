<?php


namespace Sazkari;

use Nette;

class UvodRepository extends Repository{
  
  public function upravitUvod(Nette\Application\UI\Form $formUvod){
      $this->insertEdit($formUvod->getValues(), "Admin:uvod");
  }
}
