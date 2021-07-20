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
    
    //  test function (php >= 7.4)
    
    $user = [
        [
            "name" => "Roberto"
            ,"lastname" => "De Gaetano"
            ,"age" => 44
            ,"city" => "Novedrate"
        ]
    ];

    //  anonimous function with array_map
    $new_user = array_map(function($val){
        $tmp = [];
        foreach($val as $k => $v){$tmp[] = strtoupper($v);}
        return $tmp;                                                        //  return classico
    },$user);

    $new_user2 = array_map(function($u){
        foreach($u as $l => &$v){
            $v = strtoupper($v);
        }
        return $u;
    },$user);

    //  arrow functions
    $arrowName = "Roberto";
    //  $welcomeMsg = fn($n) => "Welcome ".strtoupper($n);                              //  PHP 8
    $welcomeMsg = function($n){echo"Welcome ".strtoupper($n);};                     //  PHP 7
    
    $arrowNames = ["Roberto","Giovanna","Giada"];
    //  $welcomeMsgs = array_map(fn($n) => "Welcome ".strtoupper($n),$arrowNames);      //  PHP 8
    //  $welcomeMsgs = array_map(function($n){echo"Welcome ".strtoupper($n);},$arrowNames);      //  PHP 7
    
    $arrowRefNames = [
        [
            "name" => "Roberto"
        ]
        ,[
            "name" => "Giovanna"
        ]
        ,[
            "name" => "Giada"
        ]
    ];
    //  $welcomeRefMsgs = array_map(fn($n) => "Welcome ".strtoupper($n),$arrowRefNames);        //  spacca la pagina
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
        //  anonimous function with array_map print
        echo"<li>anonimous function with array_map print</li>";
        echo"<br />array user PRIMA di function upper case in array_map: <br />";var_dump($user);
        echo"<br /><br />array new_user tramite function upper case in array_map su user: <br />";var_dump($new_user);
        echo"<br /><br />array new_user tramite function upper case in array_map su user2: <br />";var_dump($new_user2);

        //  arrow functions print
        echo"<br /><br /><li>arrow functions print</li>";
        echo"<br /><br /><pre>arrowName:";print_r($arrowName);echo"</pre>";
        echo"<br /><br />arrow function message: ".$welcomeMsg($arrowName);
        echo"<br /><br />in <b>PHP 8</b> la funzione<br /><b><i>\$welcomeMsg = function(\$n){echo'Welcome '.strtoupper(\$n);};</i></b><br />può essere compressa con la <b>arrow function</b>:<br /><b><i>\$welcomeMsg = fn(\$n) => 'Welcome '.strtoupper(\$n);</i></b><br /><br />".$welcomeMsg($arrowName);
        echo"<br /><br /><pre>arrowNames:";print_r($arrowNames);echo"</pre>";
        echo"<pre>arrow function welcomeMsgs:";var_dump($welcomeMsgs);echo"</pre>";
        echo"<br /><br /><pre>arrowRefNames:";print_r($arrowRefNames);echo"</pre>";
        echo"<br /><br /><pre>arrow function welcomeRefMsgs:";var_dump($welcomeRefMsgs);echo"</pre>";
    }
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>