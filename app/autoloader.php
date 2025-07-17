<?php 

spl_autoload_register(function($class) {
    $folders = ["core", "controllers", "models"];
    
    foreach ($folders as $folder) {
        $path = __DIR__ . "/$folder/$class.php";
        if(file_exists($path)) {
            require_once $path;
            return;
        }
    }
});