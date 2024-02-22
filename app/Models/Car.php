<?php
    namespace app\Models;
    use PDO;
    class Car extends Model{
        private $modele;
        private $prix;
        public function getModele(){
            return $this->modele;
        }
        public function getPrix(){
            return $this->prix;
        }
        public function setModele($modele){
            $this->modele = $modele;
            return $this;
        }
        public function setPrix($prix){
            $this->prix = $prix;
            return $this;
        }
        public function latest(){
            return static::database()->query("SELECT * FROM car 
                                        ORDER BY id DESC")
                                        ->fetchAll(PDO::FETCH_CLASS,Car::class);
        }
        public function createCar(){
            $sqlState = static::database()->prepare("INSERT INTO car VALUES(NULL,?,?)");
            return $sqlState->execute([$this->modele,$this->prix]);
        }
        public static function viewCar($id){
            $sqlState = static::database()->prepare("SELECT * FROM car WHERE id=?");
            $sqlState->execute([$id]);
            return current($sqlState->fetchAll(PDO::FETCH_CLASS,__CLASS__));
        }
        public function updateCar($id){
            $sqlState = static::database()->prepare("UPDATE car SET modele=?,prix=? WHERE id=?");
            return $sqlState->execute([$this->modele,$this->prix,$id]);
        }
        public function destroyCar($id){
            $sqlState = static::database()->prepare("DELETE FROM car WHERE id=?");
            return $sqlState->execute([$id]);
        }
        /**
         * Latest (derniers elements)
         * create
         * Edit
         * Destroy
         * View (3) => id 3
         */

    }
?>