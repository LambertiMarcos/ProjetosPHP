<?php
spl_autoload_register(function ($class) {
    $baseDir = __DIR__.'\classes\\';
    $dirSep = DIRECTORY_SEPARATOR; // DIRECTORY_SEPARATOR pega o padrão do sistema usado
    $file = $baseDir.$dirSep.str_replace('\\', $dirSep, $class).'.php';
    if (file_exists($file)) {
        require $file;
    }
});
/*
<?php
spl_autoload_register(function($class){
    $baseDir = __DIR__.'\classes\\';
    echo $baseDir."</br>";
    echo "CLASSE: ".$class."</br>";
    $file = $baseDir.'\\'.$class.'.php';
    //$file = $baseDir.str_replace('\\','/', $class).'.php';
    echo $file."</br>"; 
    if(file_exists($file)){
        require $file;
    }

});

<?php
spl_autoload_register(function($class){
    $baseDir = __DIR__.'\classes\\';
    echo $baseDir."</br>";
    $file = $baseDir.str_replace('\\','/', $class).'.php'; 
    echo $file."</br>";  
    if(file_exists($file)){
        require $file;
    }

});



spl_autoload_register(function($class){
    $baseDir = __DIR__ .'/classes/';
    $dirSep = DIRECTORY_SEPARATOR; // DIRECTORY_SEPARATOR pega o padrão do sistema usado
    echo $baseDir."</br>";
    $file = $baseDir . $dirSep . str_replace('\\', $dirSep, $class) . '.php';
    echo $file;
    if(file_exists($file)){
        require $file;
    }
});


    if(file_exists('classes/matematica/'.$class.'.php')){
        require 'classes/matematica/'.$class.'.php';

        echo "CLASSE: ".$class;
        echo $baseDir;
    }
spl_autoload_register(function($class){
    $baseDir = __DIR__.'/classes/';
    echo $baseDir."</br>";
    $file = $baseDir.str_replace('\\','/', $class).'.php';
    echo $file;
    if(file_exists($file)){
        require $file;
    }
});

*/

