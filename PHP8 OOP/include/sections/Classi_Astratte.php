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
    
    abstract class Car{
        protected $speed = 0;
        abstract protected function speedUp(int $v);
        
        public function getSpeed(){                                 //  metodo concreto in classe astratta
            return $this->speed;
        }
    }

    class myCar extends Car{
        protected $speed = 0;
        public function speedUp(int $v){
            $this->speed += $v;
        }
    }
    $car = new myCar;
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
        <br /><br />&nbsp;&nbsp;&nbsp;<i>abstract class Car{
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;abstract protected function speedUp(int \$v);
        <br />&nbsp;&nbsp;&nbsp;}<br />
        <br />&nbsp;&nbsp;&nbsp;class myCar extends Car{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;protected \$speed = 0;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function speedUp(int \$v){
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->speed += \$v;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</i><br />
        <br />&nbsp;&nbsp;&nbsp;\$car = new myCar;
        <br /><br />Stampa oggetto \$car:<br /><pre>";print_r($car);echo"</pre>
        <br />Stampa oggetto \$car dopo il metodo <i>speedUp</i> ( \$car->speedUp(5); )<br /><pre>";$car->speedUp(5);print_r($car);echo"</pre>
        <br />Valore di \$speed ricavato tramite metodo <u>concreto <b>public function getSpeed()</b> in classe astratta <b>Car</b></u>:&nbsp;&nbsp;&nbsp;-> &nbsp;&nbsp;&nbsp;<b>".$car->getSpeed()."</b>
    ";
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>