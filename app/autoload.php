<?php

sql_autoload_register(chargement());
function chargement($class){
    $tabFolders = ["./models/$class.php", "./models/admin/$class.php", "./contrrollers/admin/$class.php"];

    foreach($tabFolders as $folder){
        if(file_exists($folder)){
            require $folder;
        }
    }
}
