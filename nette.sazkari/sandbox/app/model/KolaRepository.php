<?php
namespace Sazkari;
use Nette;
class KolaRepository extends Repository{
    public function pridatKolo(Nette\Application\UI\Form $formKolo){
      $this->insertEdit($formKolo->getValues(), "Admin:kola");
  }
}