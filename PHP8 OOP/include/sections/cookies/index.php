<?php
    if(!isset($_COOKIE["visitorNumber"])){
        setcookie('visitorNumber',1);
    }else{
        $total = $_COOKIE["visitorNumber"] + 1;
        setcookie('visitorNumber',$total);
    }