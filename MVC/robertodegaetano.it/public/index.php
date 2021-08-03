<?php

    chdir(dirname(__DIR__));

    require "config/freelance/const.php";

    use app\DB\DbPdo;                                                                           //  classe che implementa il pattern SINGLETON
    use app\DB\DbFactory;                                                                       //  classe che implementa il pattern FACTORY
    require_once __DIR__.'/../db/DbPdo.php';
    require_once __DIR__.'/../db/DbFactory.php';
    require_once __DIR__.'/../app/Controllers/CvController.php';
    $data = require __DIR__.'/../config/freelance/database.php';                                //  parametri letti da file database.php

    try{
        
        //  $conn = DbPdo::getInstance($data)->getConn();                                       //  connessione dati tramite pattern SINGLETON
        $conn = \app\db\DbFactory::create($data)->getConn();                                    //  connessione dati tramite pattern FACTORY (che chiamerà dbPdo)

        /* query db PDO manuale *

        $stm = $conn->query('SELECT * FROM curriculum ORDER BY id DESC',PDO::FETCH_ASSOC);
        if($stm){
            foreach($stm as $row){
                $curr[] = $row;
            }
        }

        $controller = new app\Controllers\CvController($curr);

        /* query db PDO in construttore */

        $controller = new app\Controllers\CvController($conn);

        /* */
        
        //  caricamento pagine da controller
        $controller->loadPage('mainNav','mainNav');                                             //  $contentPar,$page
        $controller->loadPage('header','header');
        $controller->loadPage('about','about');
        $controller->loadPage('cv','cv');
        $controller->loadPage('experiences','experiences');
        $controller->loadPage('activities','activities');
        $controller->loadPage('contact','contact');
        $controller->loadPage('copyright','copyright');
        
        //  visualizzazione pagine 
        $controller->display();
    }
    catch(PDOException $e){die("ERROR: ".$e->getMessage());}
