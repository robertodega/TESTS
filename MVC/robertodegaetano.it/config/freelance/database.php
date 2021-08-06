<?php

    $env = ($_SERVER["HTTP_HOST"] !== "localhost") ? "remote" : $_SERVER["HTTP_HOST"];

    return[
        'driver' => 'mysql'         //  mysql | sqllite | mssql | oci
        ,'host' => ''.$dbConst["".$env.""]["host"].''
        ,'user' => ''.$dbConst["".$env.""]["user"].''
        ,'password' => ''.$dbConst["".$env.""]["pwd"].''
        ,'database' => ''.$dbConst["".$env.""]["dbname"].''
        //  commentare per usare pattern FACTORY
        //  ,'dsn' => 'mysql:host='.$dbConst["".$env.""]["host"].';dbname='.$dbConst["".$env.""]["dbname"].';charset=utf8'
        ,'pdooptions' => [
            [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ],
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        ]
    ];
