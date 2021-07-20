<?php
    declare(strict_types=1);
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

    function testFunction(){
        echo" ... test function ... ";
    }
    $testFunction2 = function(){echo " ... test function 2 ... ";};
    function somma(int $a, int $b, callable $c){
        $res = $a + $b;
        $c();
        return $res;
    }
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
        echo"2 parametri interi e un nome di funzione(testFunction): --> ".somma(3,2,'testFunction')."<br />";
        echo"<br />2 parametri interi e una variabile come nome funzione(\$testFunction2): --> ".somma(3,2,$testFunction2)."<br />";
        //  PHP 8
        echo"<br />In PHP 8 è possibile mischiare i parametri nella chiamata specificando la label: <br /><i>somma(b:3,a:8,c:'testFunction')</i>";
        echo"<br /><i>stristr(needle:'Roberto',haystack:'Il mio nome è Roberto De Gaetano e saluto tutti!')</i>";
        //  echo"<br />2 parametri interi e funzione anonima in ordine misto(b:3,a:8,c:'testFunction'): --> ".somma(b:3,a:8,c:'testFunction')."<br />";
        //  echo"<br />parametri mischiati in funzione PHP <b>stristr</b>: --> ".stristr(needle:'Roberto',haystack:'Il mio nome è Roberto De Gaetano e saluto tutti!');echo"<br />";
    }    
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>