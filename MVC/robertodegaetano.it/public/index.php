<?php

    chdir(dirname(__DIR__));

    require "config/freelance/const.php";

    use app\DB\DbPdo;
    use app\DB\DbFactory;
    require_once __DIR__.'/../db/DbPdo.php';
    require_once __DIR__.'/../db/DbFactory.php';
    require_once __DIR__.'/../app/Controllers/CvController.php';
    $data = require __DIR__.'/../config/freelance/database.php';

    try{
        $conn = \app\db\DbFactory::create($data)->getConn();
        $controller = new app\Controllers\CvController($conn);
        
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
