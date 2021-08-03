<?php
    return[
        'driver' => 'mysql'         //  mysql | sqllite | mssql | oci
        ,'host' => ''.DB_HOST.''
        ,'user' => ''.DB_USER.''
        ,'password' => ''.DB_PWD.''
        ,'database' => ''.DB_NAME.''
        //  ,'dsn' => 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8'                  //  commentare per usare pattern FACTORY
        ,'pdooptions' => [
            [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ],
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        ]
    ];
