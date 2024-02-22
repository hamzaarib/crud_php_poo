<?php
    namespace app\Controllers;
    use app\models\Car;
    class CarController extends HomeController{
        public static function getModel(){
            if(is_null(static::$model)){
                static::$model = new Car();
            }
            return static::$model;
        }
        public static function index(){
            // model(les donnees) les voiture
            $cars = static::getModel()->latest();
            // View (afficher les donnees)
            static::view("list",$cars);
        }
        public static function create(){
            static::view('create');
        }
        public static function store(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $created = static::getModel()
                    ->setModele($_POST["modele"])
                    ->setPrix($_POST['prix'])
                    ->createCar();
                if(true == $created){
                    static::redirect('list');
                }
            }
            // var_dump($_POST);
        }
        public static function edit(){
            // var_dump($_GET);
            $id = $_GET['id'];
            $car = static::getModel()->viewCar($id);
            static::view('edit',$car);
        }
        public static function update(){
            // print_r($_POST);
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $updated = static::getModel()
                ->setModele($_POST["modele"])
                ->setPrix($_POST["prix"])
                ->updateCar($_POST['id']);
                if(true == $updated){
                    static::redirect('list');
                }
            }
        }
        public static function destroy(){
            // var_dump($_GET);
            if($_SERVER['REQUEST_METHOD'] == "GET"){
                $deleted = static::getModel()->destroyCar($_GET['id']);
                if(true == $deleted){
                    static::redirect('list');
                }
            }  
        }

    }
?>