<?php
    if(!isset($_COOKIE["cookiepageCookie"])){
        setcookie('cookiepageCookie',1);
    }
    
    foreach($_COOKIE as $name => $value){
        echo"$name = $value<br />";
    }