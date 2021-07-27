<?php
    if(isset($_COOKIE["visitorNumber"])){
        setcookie('visitorNumber','',time()-3600);
    }
    if(isset($_COOKIE["cookiepageCookie"])){
        setcookie('cookiepageCookie','',time()-3600);
    }
    
    foreach($_COOKIE as $name => $value){
        echo"$name = $value<br />";
    }