<?php
    require_once "vendor/autoload.php";
    use app\Controllers\CarController;
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        if($action == 'list'){
            CarController::index();
        }else if($action == 'create'){
            CarController::create();
        }elseif($action == "store"){
            CarController::store();
        }elseif("edit" == $action){
            CarController::edit();
        }elseif("update" == $action){
            CarController::update();
        }elseif("destroy" == $action){
            CarController::destroy();
        }
        else{
            CarController::index();
        }
    }else {
        CarController::index();
    }
?>