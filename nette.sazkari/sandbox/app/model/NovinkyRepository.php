<?php


namespace Sazkari;

use Nette;

class NovinkyRepository extends Repository{
  public function findText(){
    return $this->findAll()->order('datetime DESC');
    }
  public function countItem(){
    return $this->findAll()->count("*");  
  }
  public function pridatNovinku(Nette\Application\UI\Form $formNovinka){
      $this->insertEdit($formNovinka->getValues(), "Admin:novinky");
  }

}
