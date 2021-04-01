<?php

function chargement($class){
    $tabFiles = ["./models/$class.php", "./models/admin/$class.php", "./controllers/admin/$class.php"];
    
    foreach($tabFiles as $file){
        if(file_exists($file)){
            require_once $file;
        }
    }
}
spl_autoload_register('chargement');