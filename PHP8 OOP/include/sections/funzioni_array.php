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

    $arr = [1,2,3];
    list($a,$b,$c) = $arr;
    $userData = ['name' => 'Roberto','lastname' => 'De Gaetano'];
    list($name,$lastname) = $userData;
    list('name' => $name,'lastname' => $lastname) = $userData;
    ['name' => $name, 'lastname' => $lastname ] = $userData;
    $userData2 = [['name' => 'Roberto','lastname' => 'De Gaetano'],['name' => 'Daniele','lastname' => 'De Gaetano']];
?>

<!-- Vista risultati -->

<div class="functionContentDiv">
<div class="functionContentDivFilename">[ <?=$fileSubPath?></b> ]<br /><br /><?=$argList;?></div>
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
        echo"Array \$arr:<pre>";print_r($arr);echo"</pre><b>list</b> di \$arr<pre>";var_dump($a,$b,$c);echo"</pre>";
        echo"<br />Array \$userData:<pre>";print_r($userData);echo"</pre><b>list</b> di \$userData (array associativo) con indici non numerici <i>chiamati come la variabile assegnata</i><br />(list('name' => \$name,'lastname' => \$lastname) = \$userData)<br />var_dump(\$name,\$lastname)<br /><pre>";var_dump($name,$lastname);echo"</pre>";
        echo"<br />Destrutturazione array \$userData tramite <b>source sintax</b> (alternativa a <i>list</i>)<br />(['name' => \$name, 'lastname' => \$lastname ] = \$userData)<br />var_dump(\$name,\$lastname)<br /><pre>";var_dump($name,$lastname);echo"</pre>";
        echo"<br />array associativo multidimensionale \$userData2<pre>";var_dump($userData2);echo"</pre><br />utilizzo di source sintax in foreach<br />";
        foreach($userData2 as ['name' => $nameIdexed, 'lastname' => $lastnameIdexed ]){
            echo"<br />".$nameIdexed." ".$lastnameIdexed;
        }
    }    
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>