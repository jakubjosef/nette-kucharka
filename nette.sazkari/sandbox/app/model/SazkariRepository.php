<?php
namespace Sazkari;

class SazkariRepository extends Repository{
  
    public function getSporty(){
        return $this->findAll("sporty")->fetchPairs("id","nazev");
    }
    
}
?>
