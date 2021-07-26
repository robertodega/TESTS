<?php

use Carbon\Traits\Test as TraitsTest;

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
    trait test{
        public function login(){
            echo"<br />Logging function<br />";
        }
        public function logout(){
            echo"<br />Logout function<br />";
        }
        public function getUserRole(){
            return $_SESSION["userrole"] ?? '';
        }
        public function getUserName(){
            return $_SESSION["username"] ?? 'Roberto';
        }
    }

    class PostController{
        use test;
        public function display(){
            echo $this->getUserName();
            $this->logout();
        }
    }
    $pc = new PostController();
?>

    <!-- Vista risultati -->

<div class="functionContentDiv">
    <div class="functionContentDivFilename">[ <?=$fileSubPath?> ]   -   [PHP Version: <b><?=PHP_VERSION?></b>]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"
        <br />In PHP <u>non è possibile estendere più di una classe</u> da una classe specifica.
        <br />I <b>traits</b> sono un modo per ottenere questo comportamento, <u>raggruppando i metodi presenti in diverse classi</u>, per poi importarli nella classe voluta.
        <br />Il trait può essere messo in un percorso voluto, basterà quindi poi importare il <i>namespace</i> corretto nella classe utilizzatrice.
        <br />Se il trait contiene il metodo presente anche nella classe padre, questo verrà sovrascritto nella classe figlia dal codice presente nel trait per quel metodo
        <br /><br />&nbsp;&nbsp;&nbsp;trait <b>test</b>{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function <b>login</b>(){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo'Logging function';
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function <b>logout</b>(){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo'Logout function';
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function <b>getUserRole</b>(){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \$_SESSION['userrole'] ?? '';
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;public function <b>getUserName</b>(){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \$_SESSION['username'] ?? 'Roberto';
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;}
        <br /><br />Per utilizzare i metodi presenti nel <i>trait</i> non servirà quindi utilizzare i construtti <i>extends</i> o <i>implements</i> ma semplicemente la parola <i><b>use</b></i>:
        <br /><br />Supponiamo di volere usare i dati presenti nelle funzioni sopra in una classe <i>PostController</i>:
        <br /><br />&nbsp;&nbsp;&nbsp;class PostController{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use <b>test</b>;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function display(){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo \$this->getUserName();
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->logout();
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;\$pc = new PostController();
        <br />&nbsp;&nbsp;&nbsp;echo \$pc->display():&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;<b>";echo $pc->display();echo"</b>
    ";
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>