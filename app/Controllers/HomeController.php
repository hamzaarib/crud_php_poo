<?php
    namespace app\Controllers;

    class HomeController{
        protected static $model;
        public static function getModel(){
            return static::$model;
        }
        public static function setModel($model){
            static::$model = $model;
        }
        public static function view($view,$cars=NULL){
            require "resources/views/".$view.".php";
        }
        public static function redirect($route){
            header("Location: index.php?action=$route");
        }
    }
?>