<?php
namespace Tutoriel;
class Autoloader{

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class){
        if(strpos($class, __NAMESPACE__ . '\\') === 0){
        
            $class = str_replace('Tutoriel'. '\\', '', $class);
        require 'class/' . $class . '.php';
     }
    }
}