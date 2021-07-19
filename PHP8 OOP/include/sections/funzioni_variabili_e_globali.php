<?php
    include "../const.php";
    $filePath = __FILE__;
    $fileSubPath = stristr($filePath,"PHP8 OOP");
    $fileName = substr($filePath,(strrpos($filePath,'/')+1));
    $functionName = str_replace("_"," ",str_replace(".php","",$fileName));

    //  test function

    //  COOKIES
    setcookie("TESTCOOKIE",'Roberto',time()+3600);

    // array 
    $data = [
        "name" => "Roberto"
        ,"lastname" => "De Gaetano"
    ];

    //  object
    $obj = new stdClass();
    $obj->name = "Roberto";
    $obj->lastname = "De Gaetano";

    //  Scalar
    $name = "Roberto De Gaetano";
    $val = "Test";

    function modifyVal($val = null){
        global $data;
        echo"Stampa \$data con costrutto 'global':<pre>";var_dump($data);echo"</pre>";
        $data['name'] = 'Roby';
        echo"Stampa \$data con costrutto 'global' dopo aver sovrascritto il parametro 'name' (\$data['name'] = 'Roby';):<pre>";var_dump($data);echo"</pre><hr />";
        
        global $obj;
        echo"Stampa \$obj con costrutto 'global':<pre>";var_dump($obj);echo"</pre>";
        $obj->name = 'Roby';
        echo"Stampa \$obj con costrutto 'global' dopo aver sovrascritto il parametro 'name' (\$obj->name = 'Roby';):<pre>";var_dump($obj);echo"</pre><hr />";

        global $name;
        echo"Stampa \$name con costrutto 'global':<pre>";var_dump($name);echo"</pre>";
        $name = 'Roby';
        echo"Stampa \$name con costrutto 'global' dopo aver sovrascritto il valore scalare (\$name = 'Roby';):<pre>";var_dump($name);echo"</pre><hr />";

        echo"<br /><b>N.B.</b>se si modifica la variabile importata all'interno della funzione con il costrutto 'global', essa sarà modificata <b>globalmente</b> in tutto il file<br /><br /><hr />";
        
        $GLOBALS['name'] = 'ROBERTO';
        echo"Stampa \$name dopo modifica super array \$GLOBALS (\$GLOBALS['name'] = 'ROBERTO'):<pre>";var_dump($name);echo"</pre><hr />";
    }

    function modifyScalar($val = null){
        global $val;
        echo"Stampa \$val dopo costrutto 'global' (global \$val):<pre>";var_dump($val);echo"</pre><hr />";
    }

    
?>

    <!-- Vista risultati -->

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
        modifyVal();
        modifyScalar('JANE');
        echo"Stampa array \$GLOBALS<pre>";var_dump($GLOBALS);echo"</pre><hr />";
        echo"Stampa array \$_REQUEST (parte di \$GLOBALS)<pre>";var_dump($_REQUEST);echo"</pre><hr />";
        echo"Stampa array \$_SESSION (parte di \$GLOBALS)<pre>";var_dump($_SESSION);echo"</pre><hr />";
        echo"Stampa array \$_SERVER (parte di \$GLOBALS)<pre>";var_dump($_SERVER);echo"</pre><hr />";
        echo"Stampa array \$_GET (parte di \$GLOBALS)<pre>";var_dump($_GET);echo"</pre><hr />";
        echo"Stampa array \$_COOKIE (parte di \$GLOBALS)<pre>";var_dump($_COOKIE);echo"</pre><hr />";
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