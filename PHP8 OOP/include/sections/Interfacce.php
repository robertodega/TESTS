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

    interface iCar{
        public function stop();

        public function start();

        public function changeGear(int $v);

        public function park();

        public function accelerate();
    }

    class Auto implements iCar{
        const maxGear = 5;
        public $isStopped = true;
        protected $isParked = false;
        protected $gear = 0;
        
        public function stop(){
            $this->isStopped = true;
            $this->gear = 0;
        }

        public function start(){
            $this->isStopped = false;
        }

        public function changeGear(int $v){
            if($v <= 0){$this->gear = 0;}
            else{$this->gear = ($v <= self::maxGear) ? $v : self::maxGear;}
            if($this->gear){
                $this->isStopped = false;
                $this->isParked = false;
            }
        }

        public function park(){
            $this->isStopped = true;
            $this->isParked = true;
            $this->gear = 0;
        }

        public function accelerate(){

        }
    }

    $auto = new Auto();

?>

<!-- Vista risultati -->

<div class="functionContentDiv">
<div class="functionContentDivFilename">[ <?=$fileSubPath?></b> ]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"
        <li>Le interfacce vengono <i>dichiarate</i> dalle <b>classi</b> e <i>definiscono</i> tutti i metodi che la classe deve implementare</li>
        <li>Tutti i metodi di una <i>interface</i> devono essere dichiarati <b>pubblici</b></li>
        <li>i metodi scritti nell'interface <b>non hanno corpo ma solo dichiarazione</b></li>
        <li>la parola chiave per implementare unìinterfaccia in una classe è <i><b>implements</b></i>, seguita dal nome dell'interface</li>
        <br /><br />Stampa di oggetto <b>\$auto</b>:<br /><pre>";print_r($auto);echo"</pre>
        ".$auto->start()."".$auto->changeGear(1)."
        <br /><br />Stampa di oggetto <b>\$auto</b> dopo metodo <b>start</b><br />
        &nbsp;&nbsp;&nbsp;<i>\$auto->start()<br />&nbsp;&nbsp;&nbsp;\$auto->changeGear(1)</i><br /><br /><pre>";print_r($auto);echo"</pre>
        ".$auto->stop()."
        <br /><br />Stampa di oggetto <b>\$auto</b> dopo metodo <b>stop</b><br />
        &nbsp;&nbsp;&nbsp;<i>\$auto->stop()<br /><br /><pre>";print_r($auto);echo"</pre>
        ".$auto->park()."
        <br /><br />Stampa di oggetto <b>\$auto</b> dopo metodo <b>park</b><br />
        &nbsp;&nbsp;&nbsp;<i>\$auto->park()</i><br /><br /><pre>";print_r($auto);echo"</pre>
    ";
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>