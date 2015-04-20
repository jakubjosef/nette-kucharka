<?php
namespace Sazkari;
use Nette\Application\UI\Form;
class TipyRepository extends Repository{

    const cenaTipu=5;
    
    /** @var UzivateleRepository */
    private $uzivateleRepository;
    public function __construct(\Nette\Database\Connection $db,  UzivateleRepository $uzivateleRepository) {
        $this->uzivateleRepository=$uzivateleRepository;
        parent::__construct($db);
    }
     public function tipniZapas(Form $form){
        $values=$form->getValues();
        $user_id=$this->getUser()->id;
        $values['timestamp']=Date("Y-m-d H:i:s");
        $values["uzivatele_id"]=$user_id;
        $user=  $this->uzivateleRepository->find($user_id);
        //odecteme sazku
        $this->update(array("zustatek" => $user->zustatek-self::cenaTipu), array("id" => $user_id),"uzivatele");
           
        $this->flashMessage("Váš tip byl vložen do systému");
        $this->insertEdit($values, "Sazkari:tipy");
    }
}