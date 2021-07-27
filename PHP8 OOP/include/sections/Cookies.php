<?php
    include "../const.php";
    $filePath = __FILE__;
    $fileSubPath = stristr($filePath,"PHP8 OOP");
    $fileName = substr($filePath,(strrpos($filePath,'/')+1));
    $functionName = str_replace("_"," ",str_replace(".php","",$fileName));
    if(strpos($functionName,"\\")){$functionName = substr($functionName,(strrpos($functionName,"\\")+1));}

    $argList = "";
    if(isset($arguments["".$functionName.""])){
        foreach($arguments["".$functionName.""] as $divName => $args){
            $argList .= "<li>".implode("</li><li>",$args)."</li>";
        }
    }

    //  test function

    
?>

    <!-- Vista risultati -->

<div class="functionContentDiv">
    <div class="functionContentDivFilename">[ <?=$fileSubPath?> ]   -   [PHP Version: <b><?=PHP_VERSION?></b>]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"
        <li>sono informazioni memorizzate sul browser dal server per tenere traccia delle scelte effettuate durante la navigazione</li>
        <li>Per avviare un server manualmente all'interno della cartella voluta digitare il comando <i>php -S localhost:3000</i> dall'interno della cartella e avviarlo via browser: <a href='localhost:3000' target='_blank'>webserver</a></li>
        <li>si possono impostare con l'istruzione <i>setcookie</i> (cookies/index.php - cookies/cookie.php) </li>
        <li>si possono leggere/modificare tramite la variabile PHP \$_COOKIE </li>
        <li>si possono eliminare sempre tramite la funzione <i>setcookie</i> <u>impostando il valore a <b>vuoto</b> e la data di scadenza <b>nel passato</b></u> (setcookie('cookiepageCookie','',time()-3600))</li>
    ";
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>