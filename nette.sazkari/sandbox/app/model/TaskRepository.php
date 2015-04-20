<?php

namespace Sazkari;

use Nette;



class TaskRepository extends Repository
{
  private $text = 'Zde je text taskrepository';
  public function findText(){
    return $this->text;
  }
}
