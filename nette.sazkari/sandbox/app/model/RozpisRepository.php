<?php

namespace Sazkari;

use Nette;

class RozpisRepository extends Repository{
  public function pridatRozpis(Nette\Application\UI\Form $formRozpis){
      $this->insertEdit($formRozpis->getValues(),"Admin:rozpis");
  }

}
