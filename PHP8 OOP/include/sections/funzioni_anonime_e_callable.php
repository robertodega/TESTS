<?php
    include "../const.php";
    $filePath = __FILE__;
    $fileSubPath = stristr($filePath,"PHP8 OOP");
    $fileName = substr($filePath,(strrpos($filePath,'/')+1));
    $functionName = str_replace("_"," ",str_replace(".php","",$fileName));

    $argList = "";
    if(isset($arguments["".$functionName.""])){
        foreach($arguments["".$functionName.""] as $divName => $args){
            $argList .= "<li>".implode("</li><li>",$args)."</li>";
        }
    }

    //  test function

    $somma = function(...$args){
        $res = 0;
        foreach($args as $arg){
            $res += $arg;
        }
        return $res;
    };

    $sommaStupida = function($v1,$v2){
        echo $v1 + $v2;
    };
    function test(Closure $func){
        $func(2,3);
    }
    
    $testArray = [2,4,6];

    $triplica = function(&$val){
        $val *= 3;
    };
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
        echo"<li><br /><br /><i>\$somma = function(...\$args){<br />&nbsp;&nbsp;&nbsp;\$res = 0;<br />&nbsp;&nbsp;&nbsp;foreach(\$args as \$arg){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$res += \$arg;<br />&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;return \$res;<br />}</i><br /><br />&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;Chiamata funzione <b>\$somma(2,3)</b>&nbsp;&nbsp;&nbsp;=>&nbsp;&nbsp;&nbsp;";echo"<b>".$somma(2,3)."</b></li><br />";
        echo"<li><br /><br /><i>\$sommaStupida = function(\$v1,\$v2){<br />&nbsp;&nbsp;&nbsp;echo \$v1 + \$v2;<br />}<br /><br />function test(Closure \$func){<br />&nbsp;&nbsp;&nbsp;\$func(2,3);<br />}</i><br /><br />&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;Chiamata funzione <b>test(\$sommaStupida)</b>&nbsp;&nbsp;&nbsp;=>&nbsp;&nbsp;&nbsp;";echo"<b>".test($sommaStupida)."</b></li>";
        echo"<br />testArray - valori iniziali: ";var_dump($testArray);echo"<br />";
        echo"<br />Utilizzo funzione <b>array_walk</b> per raddoppio valori in array test:<br />&nbsp;&nbsp;&nbsp;<i>array_walk(\$testArray,function(\$val){echo''.(\$val * 2).' ';});</i> ) <br /><br />";
        array_walk($testArray,function($val){echo"".($val * 2)." ";});echo"<br /><br />";
        array_walk($testArray,function(&$val){$val *= 2;});     //  funzione anonima che raddoppia i valori all'array passato
        echo"l'array di test dopo l'esecuzione della funzione inserita in <b>array_walk</b> risulta modificato:<br />&nbsp;&nbsp;&nbsp;";var_dump($testArray);echo"<br />";
        echo"<li><br /><br /><i>\$triplica = function(&\$val){<br />&nbsp;&nbsp;&nbsp;\$val *= 3;<br />}</i><br /><br />&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;Chiamata funzione <b>array_walk(\$testArray,\$triplica);</b>&nbsp;&nbsp;&nbsp;=>&nbsp;&nbsp;&nbsp;";array_walk($testArray,$triplica);echo"</li><br />";
        echo"testArray DOPO funzione <b>\$triplica</b> (variabile funzione <b>callable</b>): ";var_dump($testArray);echo"<br />";
    }
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>