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
    <div class="functionContentDivFilename">[ <?=$fileSubPath?></b> ] - <br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"
        <li>Le <b>classi astratte</b> definiscono un'interfaccia <u>senza però implementarla completamente</u></li>
        <li>servono a svolgere la funzione di <i>classe base</i> e non possono essere istanziate direttamente ma devono essere estese da altre classi</li>
        <li>basta un solo metodo astratto nella classe per definirla <i>astratta</i></li>
        <li>Una classe che eredita da una classe astratta <u>deve implementare tutti i metodi astratti</u> della classe madre</li>
    ";
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>