<?php

namespace Sazkari;

use Nette;
/**
 * Provádí operace nad databázovou tabulkou.
 */
abstract class Repository extends Nette\Object
{
        protected $presenter=null;
	/** @var Nette\Database\Connection */
	protected $connection;

	public function __construct(Nette\Database\Connection $db)
	{
		$this->connection = $db;
	}
        public function setPresenter($presenter){
            if($this->presenter==null){
                $this->presenter=$presenter;
            }
        }
        public function redirect($url){
            if($this->presenter!=null && $this->presenter instanceof Nette\Application\UI\Presenter){
                $this->presenter->redirect($url);
            }else{
                throw new \Exception("Nelze presmerovat, neni nastaven presenter");
            }
        }
        public function flashMessage($message){
            if($this->presenter!=null && $this->presenter instanceof Nette\Application\UI\Presenter){
                $this->presenter->flashMessage($message);
            }else{
                throw new \Exception("Nelze zobrazit hlasku, neni nastaven presenter");
            }
        }
        public function getUser(){
           if($this->presenter!=null && $this->presenter instanceof Nette\Application\UI\Presenter){
                return $this->presenter->getUser();
            }else{
                throw new \Exception("Nelze zobrazit hlasku, neni nastaven presenter");
            } 
        }
        /**
	 * Vrací objekt reprezentující databázovou tabulku.
	 * @return Nette\Database\Table\Selection
	 */
	protected function getTable($table=false)
	{
		// název tabulky odvodíme z názvu třídy
		return $this->connection->table($this->getTableName($table));
	}
        public function add($data,$table=false){
            $this->connection->query("INSERT INTO ".$this->getTableName($table),$data);
        }
        public function update($data,array $restrictions,$table=false){
            $statement = "UPDATE ".((!$table)?$this->getTableName():$table)." SET ";
            $iterator=0;
            $numOfData=count($data);
            foreach ($data as $key => $value) {
                $statement.="$key='$value'";
                if($iterator<$numOfData-1){
                    $statement.=", ";
                }else{
                    $statement.=" ";
                }
                $iterator++;
            }
            $statement.="WHERE ";
            $numOfRestrictions=count($restrictions);
            $iterator=0;
            foreach ($restrictions as $key => $value) {
                $statement.="$key='$value' ";
                if($iterator<$numOfRestrictions-1){
                    $statement.="AND ";
                }
                $iterator++;
            }
            $this->connection->exec($statement.";");
        }
        public function delete($id,$table=false){
            $statement="DELETE FROM ".((!$table)?$this->getTableName():$table)." WHERE id='$id'";
            $this->connection->exec($statement);
        }
        /**
         * Obecna metoda pridani nebo upravy nejake entity
         * @param Nette\Application\UI\Form/array $values
         * @param string $redirect kam presmerovat po zpracovani
         */
        public function insertEdit($values,$redirect){
            if($values instanceof \Nette\Application\UI\Form){
                $values=$values->getValues(true);
            }elseif(!is_array($values) && !$values instanceof \ArrayAccess){
                throw new \Nette\InvalidArgumentException("Vstupni data museji byt pole hodnot nebo cely formular");
            }
            //preklopime datum do mysql formy pokud nejake prijde
            $this->convertMysqlDates($values);
            if(isset($values["id"]) && $values["id"]!=""){
                $this->update($values, array("id"=>$values["id"]));
            }else{
                $this->add($values);
            }
        $this->redirect($redirect);
        }
	/**
	 * Vrací všechny řádky z tabulky.
	 * @return Nette\Database\Table\Selection
	 */
	public function findAll($table=false)
	{
		return $this->getTable($table);
	}
	/**
	 * Vrací řádky podle filtru, např. array('name' => 'John').
	 * @return Nette\Database\Table\Selection
	 */
	public function findBy(array $by,$table=false)
	{
		return $this->getTable($table)->select("*")->where($by);
	}
        /**
         * Vraci radek podle jeho ID
         * @param type $id
         * @return type
         */
        public function find($id,$table=false){
            return $this->getTable($table)->get($id);
        }
	private function getTableName($table=false){
            if(!$table){
                preg_match('#(\w+)Repository$#', get_class($this), $m);
                return lcfirst($m[1]);
            }else{
                return $table;
            }
        }
        private function getColumnType($columnName,$table=false){
            $columns=$this->connection->getSupplementalDriver()->getColumns($this->getTableName($table));
            $resultColumn=self::array_multi_search($columns, "name", $columnName);
            return $resultColumn[0]["nativetype"];
        }
        /**
         * Metoda ulozi obrazek
         * @param Nette\Http\FileUpload $uploadedFile
         * @param string $directory adresář souboru s obrázky (teams,users,...)
         * @param string $nazev nazev souboru, volitelne pokud neni pouzije se nazev vstupniho souboru
         * @return string
         */
        public function saveImage(Nette\Http\FileUpload $uploadedFile,$directory,$nazev=false,array $size=array()){
            $nameArray=explode(".",$uploadedFile->name);
            $extension=$nameArray[count($nameArray)-1];
            if(!$nazev){
                $filename=$uploadedFile->name;
            }else{
                $filename=Nette\Utils\Strings::webalize($nazev).".".$extension;
            }
            $imagePath=__DIR__."/../../www/images/$directory/$filename";
            $uploadedFile->move($imagePath);
            if(count($size)==2){
                $image=  Nette\Image::fromFile($imagePath);
                $image->resize($size[0], $size[1], Nette\Image::EXACT);
                $image->save($imagePath);
            }
            return $filename;
        }
        /** helpers **/
        private function convertMysqlDates(&$values){
            foreach($values as $key=>$value){
                if(strpos($value, ".")){
                    $dateArray=  explode(".", str_replace(" ", ".", $value));
                    if(count($dateArray)>=3 && checkdate($dateArray[1], $dateArray[0], $dateArray[2])){
                        $type=$this->getColumnType($key);
                        if($type=="DATETIME"){
                            $values[$key]=date("Y-m-d H:i:s",  strtotime($value));
                        }elseif($type=="DATE"){
                            $values[$key]=date("Y-m-d",  strtotime($value));
                        }
                    }
                }
            }
        }
        public static function array_multi_search($array, $key, $value){
            $results = array();
            if (is_array($array))
            {
                if (isset($array[$key]) && $array[$key] == $value){
                    $results[] = $array;
                }
                foreach ($array as $subarray){
                    $results = array_merge($results, self::array_multi_search($subarray, $key, $value));
                }
            }
            return $results;
        } 
}
