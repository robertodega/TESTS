<?php
    declare(strict_types=1);
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

    $jsonManPage = $sectionsPath."jsonManPage.php";
    $url = "http://jsonplaceholder.typicode.com/posts";
    $data = file_get_contents($url);

?>
    <!-- Vista risultati -->

<div class="functionContentDiv">
    <div class="functionContentDivFilename">[ <?=$fileSubPath?> ]   -   [PHP Version: <b><?=PHP_VERSION?></b>]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"\$url: <a href='".$url."' target='_blank'>".$url."</a> (fake json api)<br />";
    echo"<br /></pre>Lanciando <b>file_get_contents</b>(\$url) si ottiene il contenuto del Json di esempio (\$data = <b>file_get_contents</b>(\$url);)<br />";//echo"<pre>";var_dump($data);echo"</pre>";
    echo"<br />Trasformazione <b>Json</b> ottenuto in oggetto <b>\$dataObj</b> (\$dataObj = <b>json_decode</b>(\$data);)<br />";//echo"<pre>";var_dump($dataObj);echo"</pre>";
    echo"<br />Stampa lista costruita a partire dall'oggetto <b>\$dataObj</b> (<a class='pagelink' href='".$jsonManPage."' target='_blank'>esempio pagina gestione</a>)<br />";//echo"<br />".$list."<br />";
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>