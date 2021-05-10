<?php

    /**
     * Alle Dateien im Projektordner oberhalb von "/vendor/" werden geladen.
     */
    $start = __DIR__.'/..';

    require_once 'Helper.php';

    require_once $start .'/vendor/autoload.php';

    $ingnoreArray = [
        '.',
        '..',
        'tpg_autoload.php',
        '.vscode',
        '.env',
        '.git',
        '.gitignore',
        'depfile.yaml',
        'phpbench.json',
        'phpcs.xml.dist',
        'phpstan.neon.dist',
        'phpunit.xml.dist',
        '.gitlab-ci.yml',
        '.php_cs.dist',
        'CHANGELOG.md',
        'README.md',
        'vendor',
        'composer.json',
        'composer_original.json',
        'composer.lock',
        'index.php',
        'tests',
    ];

    $firstArray = [ 'conf', 'config', 'config.php' ];

    load( $start, $ingnoreArray, $firstArray );

    function load( $url, $ingnoreArray = [] , $firstArray = [], $i = 0 )
    {    

        $folder = scandir( $url. '/' );

        $newfolder = [];

        foreach($folder as $row){

            if ((array_search($row, $ingnoreArray)) === false) {

                $newfolder[] = $row;
            }
        }

        $folder = $newfolder;

        // Helper::e($folder,0);

        if( $i == 0 ){

            foreach( $firstArray AS $first ){

                $folderid = array_search($first , $folder);

                if( $folderid == false ){ continue; }

                unset($folder[$folderid]);
                array_unshift( $folder,  $first );
            }
        }
       
        $datas  = [];

        foreach( $folder as $row ){

            if( is_dir( $url . '/' . $row ) ){
                $datas = array_merge( $datas, load( $url.'/'.$row, $ingnoreArray, $firstArray, 1 ) );

            }else{

                $datas[] = $url.'/'.$row;
            }
        }

        if( $i == 1 ){ return $datas; }

        foreach( $datas as $site ){ 
            require_once $site; 
        }
    }

    // spl_autoload_register('load');
