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

        public static $classversion='1';

        abstract protected function speedUp(int $v);
        
        public final function getSpeed(){                                 //  metodo concreto in classe astratta
            return $this->speed;
        }
    }

    class myCar extends Car{
        protected $speed = 0;
        public function speedUp(int $v){
            $this->speed += $v;
        }
        public function getParentVersion(){
            return parent::$classversion;
        }
    }
    $car = new myCar;
    
?>

    <!-- Vista risultati -->

<div class="functionContentDiv">
<div class="functionContentDivFilename">[ <?=$fileSubPath?></b> ]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"
        <li>un metodo indicato come <i>final</i> <u>non può essere sovrascritto da una classe estesa</u></li>
        <li>una variabile dichiarata come <i>statica</i>, non esiste negli oggetti creati dalla classe</li>
        <br />&nbsp;&nbsp;&nbsp;abstract class Car{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;protected \$speed = 0;
        <br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>public static \$classversion='1';</b><br />
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;abstract protected function speedUp(int \$v);
        <br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public <b>final</b> function getSpeed(){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \$this->speed;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br /><br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />
        ".$car->speedUp(10)."
        <br />Valore di \$speed ricavato tramite metodo <u>concreto <b>public function getSpeed()</b> in classe astratta <b>Car</b></u>:&nbsp;&nbsp;&nbsp;-> &nbsp;&nbsp;&nbsp;<b>".$car->getSpeed()."</b>
        <br /><br />la variabile <b>\$classversion</b> è dichiarata come <i>statica</i> all'interno della classe astratta <b>Car</b>, quindi non sarà presente all'interno dell'oggetto \$car di tipo myCar, classe estesa da Car;
        <br />l'istruzione <b>echo \$car->classversion</b> non restituirà nessun valore: <pre>";print_r($car->classversion);echo"</pre>
        <br />Accedendo direttamente alla proprietà statica della classe astratta posso leggere il valore:<br /><b>echo Car::\$classversion</b>&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;".Car::$classversion."</pre>
        <br />Per accedere alla variabile \$classversion da <b>myCar</b>, utilizzo un metodo pubblico che mi estrae il valore:<br />
        <br />&nbsp;&nbsp;&nbsp;<i>class myCar extends Car{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;protected \$speed = 0;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function speedUp(int \$v){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->speed += \$v;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>public function getParentVersion(){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return parent::\$classversion;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</b>
        <br />&nbsp;&nbsp;&nbsp;}<br />
        <br />L'istruzione <b>echo \$car->getParentVersion();</b> darà il risultato:&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;".$car->getParentVersion()."
    ";
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>