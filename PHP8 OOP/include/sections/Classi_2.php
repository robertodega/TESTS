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

    class Auto{
        public $color = 'white';        //  gestibile da qualunque parte
        private $model;                 //  private: gestibile solo all'interno della classe | protected: gestibile dalla classe e da quelle che la erediteranno
        private $equipment;
        private $engineSize;
        private $interiors;

        public function __construct($color = 'white', $model = '', $equipment = '', $engineSize = '', $interiors = '')
        {
            $this->color=$color;
            $this->model=$model;
            $this->equipment=$equipment;
            $this->engineSize=$engineSize;
            $this->interiors=$interiors;
        }

        public function getParam($param)
        {
            return $this->$param;
        }

        public function setParam($param,$value)
        {
            $permittedValues = [
                "engineSize" => [
                    "1.5 TDI","2.0TDI","2.5TDI"
                ]
            ];
            
            //  check valore passato per modifica
            if(in_array($value,$permittedValues["".$param.""])){
                $this->$param = $value;
            }

            //  Gestione tramite eccezioni
            //  if(!in_array($value,$permittedValues["".$param.""])){
                //  throw new Exception("Invalid value ".$value." for parameter ".$param."");
            //  }
            //  $this->$param = $value;

        }
    }

    $auto = new Auto;
    $nissan = new Auto('grey','Qashqai','N-Connecta','1.5 TDI','black & grey');
?>

<!-- Vista risultati -->

<div class="functionContentDiv">
    <div class="functionContentDivFilename">[ <?=$fileSubPath?> ]   -   [PHP Version: <b><?=PHP_VERSION?></b>]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"<br /><i>
    class <b>Auto</b>{<br />
        &nbsp;&nbsp;&nbsp;public \$color = 'white';
        <br />&nbsp;&nbsp;&nbsp;private \$model;
        <br />&nbsp;&nbsp;&nbsp;private \$equipment;
        <br />&nbsp;&nbsp;&nbsp;private \$engineSize;
        <br />&nbsp;&nbsp;&nbsp;private \$interiors;

        <br /><br />&nbsp;&nbsp;&nbsp;function __construct(\$color = 'white', \$model = '', \$equipment = '', \$engineSize = '', \$interiors = '')
        <br />&nbsp;&nbsp;&nbsp;{
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->color=\$color;
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->model=\$model;
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->equipment=\$equipment;
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->engineSize=\$engineSize;
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->interiors=\$interiors;
            <br />&nbsp;&nbsp;&nbsp;}
        <br />}

        <br /><br />&nbsp;&nbsp;&nbsp;<b>public function getParam(\$param)
        <br />&nbsp;&nbsp;&nbsp;{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \$this->\$param;
        <br />&nbsp;&nbsp;&nbsp;}</b>

        <br /><br />&nbsp;&nbsp;&nbsp;<b>public function setParam(\$param,\$value)
        <br />&nbsp;&nbsp;&nbsp;{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->\$param = \$value;
        <br />&nbsp;&nbsp;&nbsp;}</b>

        <br /><br />}

    ";
    echo"<br /><br />Stampa di parametro privato <b>\$model</b>:<br />&nbsp;&nbsp;&nbsp;\$modelloAuto = \$nissan->model;<br />&nbsp;&nbsp;&nbsp;echo \$modelloAuto;<br />&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;ERRORE (parametro privato)";
    echo"<br /><br />Stampa di parametro privato <b>\$model</b> attraverso funzione <i>getter</i>:<br />&nbsp;&nbsp;&nbsp;echo \$nissan->getParam('model');&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;".$nissan->getParam('model')."";
    echo"<br /><br />Stampa di oggetto <b>\$nissan</b>:<br /><pre>";print_r($nissan);echo"</pre>";
    echo"<br />Modifica di parametro privato <b>\$engineSize</b> attraverso funzione <i>setter</i>:<br />&nbsp;&nbsp;&nbsp;\$nissan->setParam('engineSize','2.5TDI');";
    $nissan->setParam('engineSize','2.5TDI');
    echo"<br /><br />Stampa di oggetto <b>\$nissan</b>:<br /><pre>";print_r($nissan);echo"</pre>";
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>