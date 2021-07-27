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

    function autoloadClass($classname){               //  eseguita quando deve essere caricata una classe mancante
        $link = str_replace("\\","/",$classname).'.php';
        if(file_exists($link)){
            require_once($link);
        }
    }
    spl_autoload_register('autoloadClass');
    
?>

    <!-- Vista risultati -->

<div class="functionContentDiv">
    <div class="functionContentDivFilename">[ <?=$fileSubPath?> ]   -   [PHP Version: <b><?=PHP_VERSION?></b>]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"
        <br />I namespaces sono degli ambienti isolati in cui le classi dichiarate possono avere lo stesso nome di altre classi in diversi namespaces
        <br />Possiamo avere ad esempio i namespaces <b><i>classes/roby/</i></b> e <b><i>classes/roby2/</i></b> entrambi con la classe <b>Test</b> nel file <i>Test.php</i>
        
        <br /><br /><i>&nbsp;&nbsp;&nbsp;namespace classes\\roby;
        <br />&nbsp;&nbsp;&nbsp;class Test
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function __construct()
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo'Costruttore classe '.__CLASS__.' in namespace '.__NAMESPACE__;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;}</i>

        <br /><br /><i>&nbsp;&nbsp;&nbsp;namespace classes\\roby2;
        <br />&nbsp;&nbsp;&nbsp;class Test
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function __construct()
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo'Costruttore classe '.__CLASS__.' in namespace '.__NAMESPACE__;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;}</i>

        <br /><br />Le istruzioni<br /><i><u>\$roby = new classes\\roby\Test();</u></i><br />e <br /><i><u>\$roby2 = new classes\\roby2\Test();</u></i><br /><br />nel file corrente daranno un errore perchè le relative classi non vengono trovate<br />
        <br />in PHP 8 esiste il metodo <b>spl_autoload_register</b> che serve a registrare una funzione che servirà a caricare una classe mancante<br />
        <br /><i>&nbsp;&nbsp;&nbsp;function autoloadClass(\$classname){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$link = str_replace('\\\','/',\$classname).'.php';
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;require_once(\$link);
        <br />&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;spl_autoload_register('autoloadClass');</i><br />
        <br />Richiamando ora i costruttori delle classi Test nei due namespaces, gli oggetti dovrebbero essere riconosciuti e istanziati
        <br /><br /><i>\$roby = new classes\\roby\\Test();
        <br />\$roby2 = new classes\\roby2\\Test();</i><br />
    ";
    $roby = new classes\roby\Test();
    $roby2 = new classes\roby2\Test();
    echo"<br />\$roby3 = new classes\\roby3\\User();</i><br />";
    $roby3 = new classes\roby3\User();
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>