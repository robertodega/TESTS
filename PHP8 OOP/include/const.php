<?php
    $title = "PHP8 OOP";
    $notesPath = "https://github.com/robertodega/TESTS/tree/main/PHP8%20OOP";
    $rootPath = "./";
    $sectionsPath = "include/sections/";
    $notFoundPage = "notFound.php";

    $couserLink = "https://www.udemy.com/course/php-corso-oop-programmazione-orientata-oggetti/learn/lecture/5566398?components=buy_button%2Cdiscount_expiration%2Cgift_this_course%2Cpurchase%2Cdeal_badge%2Credeem_coupon#overview";
    $testObject = "PHP 8 ";
    $testObject_2 = "OOP";
    $testObject_6 = "Tests relativi al corso di PHP8 OOP su <a href='".$couserLink."' target='_blank'>udemy.com</a>";
    $arguments = [
        "spread operator" => [
            "mathOp" => [
                "<a href='https://www.php.net/manual/en/migration56.new-features.php' target='_blank'>operatore di argomenti variabili: <b>spread operator (...\$args)</b>"
                ,"<a href='https://www.php.net/manual/en/function.func-get-args.php' target='_blank'><b>func_get_args()</a></b>"
                ,"<a href='https://www.php.net/manual/en/function.array-sum.php' target='_blank'><b>array_sum</a></b>"
                ,"<a href='https://www.php.net/manual/en/function.array-slice.php' target='_blank'><b>array_slice</a></b>"
            ]
        ]
        ,"funzioni anonime e callable" => [
            "callable" => [
                "<b>Funzioni anonime (<a href='https://www.php.net/manual/en/class.closure.php' target='_blank'>Closure</a>) variabili per valorizzare variabili</b>"
                ,"funzioni passate come <b>argomento di funzioni</b>"
                ,"funzioni <b><a href='https://www.php.net/manual/en/language.types.callable.php' target='_blank'>Callable</a></b>"
                ,"<b><a href='https://www.php.net/manual/en/function.array-walk.php' target='_blank'>array_walk</a></b>"
            ]
        ]
        ,"arrow functions" => [
            "arrowFunction" => [
                "funzione <b>array_map</b>"
                ,"utilizzo funzione <b>anonima</b>"
                ,"utilizzo funzione <b>arrow</b>"
            ]
        ]
        ,"funzioni variabili e globali" => [
            "global" => [
                "costrutto '<a href='https://www.it-swarm.it/it/php/come-dichiarare-una-variabile-globale-php/1070282125/' target='_blank'>global</a>'"
                ,"array <b><a href='https://www.php.net/manual/en/reserved.variables.globals.php' target='_blank'>\$GLOBALS</a></b>"
            ]
        ]
        ,"funzioni tipizzate" => [
            "tipizzazione" => [
                "tipizzazione funzioni"
                ,"passaggio parametri tipizzati e funzioni <b>callable</b> a funzioni chiamate"
                ,"ordine misto dei parametri nelle chiamate a funzioni"
                ,"named arguments"
            ]
        ]
        ,"funzioni array" => [
            "arrayFunctions" => [
                "funzione <b><a href='https://www.php.net/manual/en/function.list.php' target='_blank'>list</a></b>"
                ,"source sintax"
            ]
        ]
        ,"API consumer" => [
            "API" => [
                "funzione <i><a href='https://www.php.net/manual/en/function.file-get-contents.php' target='_blank'>file_get_contents</a></i>"
                ,"funzione <i><a href='https://www.php.net/manual/en/function.json-decode.php' target='_blank'>json_decode</a></i>"
            ]
        ]
        ,"Classi" => [
            "classes" =>[
                "costruzione Classe"
                ,"utilizzo costruttore di default <b>__construct</b>"
                ,"costruzione oggetto con parametri a partire da classe costruttore"
            ]
        ]
        ,"Classi 2" => [
            "classes_2" =>[
                "lettura e modifica valore variabili <br /><br /> - <i><b>pubbliche</b></i> (gestibili da qualunque parte)<br /> - <i><b>private</b></i> (<b>private</b>: gestibili solo all'interno della classe | <b>protected</b>: gestibili dalla classe e da quelle che la erediteranno)<br /><br />"
                ,"metodi <i>getter</i>"
                ,"metodi <i>setter</i>"
            ]
        ]
        ,"Classi 3" => [
            "classes_3" =>[
                "ereditarietà di classi"
                ,"override dei metodi"
            ]
        ]
        ,"Interfacce" => [
            "interfacce" =>[
                "Implementazione di interfacce"
                ,"utilizzo interfaccia in classe"
            ]
        ]
        ,"Classi Astratte" => [
            "abstracts" =>[
                "Implementazione di classi astratte"
            ]
        ]
        ,"Metodi Statici e Final" => [
            "staticFinale" =>[
                "Significato di parola chiave <i>static</i>"
                ,"Significato di parola chiave <i>final</i>"
            ]
        ]
        ,"Proprietà tipificate" => [
            "typed" => [
                "Tipizzazione proprietà oggetto"
                ,"inizializzazione oggetto tramite costruttore di default"
                ,"inizializzazione oggetto in maniera <b>automatica</b>"
            ]
        ]
        ,"Costruttore automatico" => [
            "automaticConstructor" => [
                "utilizzo costruttore automatico di classe"
            ]
        ]

    ];