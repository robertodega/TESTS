<?php
    declare(strict_types=1);
    include "../const.php";
    $filePath = __FILE__;
    $fileSubPath = stristr($filePath,"PHP8 OOP");
    $fileName = substr($filePath,(strrpos($filePath,'/')+1));
    $functionName = str_replace("_"," ",str_replace(".php","",$fileName));

    //  test function

    $jsonManPage = $sectionsPath."jsonManPage.php";
    $url = "http://jsonplaceholder.typicode.com/posts";
    $data = file_get_contents($url);
?>
    <!-- Vista risultati -->

<style>
    .tableCell{border-left:1px solid white;border-top:1px solid white;color:white;}
    .tdCell{border-bottom:1px solid white;border-right:1px solid white;padding:2%;width: 10%;text-align: center;}
    .tdCellTitle{color: yellow;}
    .listLi{list-style-type:none;margin-top: 5px;}
    .listLi a{color: white;}
    .listLi a:hover{color: orange;}
</style>

<div class="functionContentDiv">
    <div class="functionContentDivFilename">[ <?=$fileSubPath?></b> ] </div>
    <div class="functionContentDivPrint">
<?php
    $act = isset($_REQUEST["act"]) ? $_REQUEST["act"] : "";
    $f = isset($_REQUEST["f"]) ? str_replace(".php","",str_replace("_"," ",$_REQUEST["f"])) : "";
    if($act === "arg"){
        $arg = $arguments["".$f.""];
        foreach($arg as $a){
            echo"<li>".$a."</li>";
        }
    }
    else{
        echo"\$url: <a href='".$url."' target='_blank'>".$url."</a> (fake json api)<br />";
        echo"<br /></pre>Lanciando <b>file_get_contents</b>(\$url) si ottiene il contenuto del Json di esempio (\$data = <b>file_get_contents</b>(\$url);)<br />";//echo"<pre>";var_dump($data);echo"</pre>";
        echo"<br />Trasformazione <b>Json</b> ottenuto in oggetto <b>\$dataObj</b> (\$dataObj = <b>json_decode</b>(\$data);)<br />";//echo"<pre>";var_dump($dataObj);echo"</pre>";
        echo"<br />Stampa lista costruita a partire dall'oggetto <b>\$dataObj</b> (<a class='pagelink' href='".$jsonManPage."' target='_blank'>esempio pagina gestione</a>)<br />";//echo"<br />".$list."<br />";
    }    
?>

    </div>
</div>
<script>
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    var functionListDivPaddingTopPerc = 0.03;
    var functionListDivPaddingPaddingTopPerc = 0.01;

    var functionListDivPaddingTopPerc = 0.03;
    var functionListDivPaddingPaddingTopPerc = 0.01;
    
    $('.functionContentDivPrint').css("margin-top",windowHeight * functionListDivPaddingTopPerc);
    $('.functionContentDivPrint').css("padding-top",windowHeight * functionListDivPaddingPaddingTopPerc);
</script>