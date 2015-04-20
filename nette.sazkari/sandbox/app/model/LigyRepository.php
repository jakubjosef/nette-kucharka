<?php
namespace Sazkari;

use Nette;
class LigyRepository extends Repository{
   public function pridatLigu(Nette\Application\UI\Form $formLiga){
      $this->insertEdit($formLiga->getValues(), "Admin:liga");
  } 
}

