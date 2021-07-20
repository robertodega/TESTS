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

    class Auto{
        public $color = 'white';
        private $model;
        private $equipment;
        private $engineSize;
        private $interiors;

        function __construct($color = 'white', $model = '', $equipment = '', $engineSize = '', $interiors = '')
        {
            $this->color=$color;
            $this->model=$model;
            $this->equipment=$equipment;
            $this->engineSize=$engineSize;
            $this->interiors=$interiors;
        }
    }

    $auto = new Auto;
    $nissan = new Auto('grey','Qashqai','N-Connecta','1.5 TDI','black & grey');
?>

<!-- Vista risultati -->

<div class="functionContentDiv">
<div class="functionContentDivFilename">[ <?=$fileSubPath?></b> ]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"<li><br /><i>
    class <b>Auto</b>{<br />
        &nbsp;&nbsp;&nbsp;public \$color = 'white';
        <br />&nbsp;&nbsp;&nbsp;private \$model;
        <br />&nbsp;&nbsp;&nbsp;private \$equipment;
        <br />&nbsp;&nbsp;&nbsp;private \$engineSize;
        <br />&nbsp;&nbsp;&nbsp;private \$interiors;
        <br />}
    ";
    echo"<br /><b>\$auto = new Auto;</b>";
    echo"<br /><br />Stampa di oggetto <b>\$auto</b>:<br /><pre>";print_r($auto);echo"</pre></li>";
    echo"<li>Modifica attributo <u>pubblico</u> di classe - <i><b>\$auto->color = 'grey';</b></i><br /><pre>";$auto->color = 'grey';print_r($auto);echo"</pre></li>";
    echo"<li>Modifica attributo <u>privato</u> di classe - <i>";
    echo"<br /><i>
    class <b>Auto</b>{<br />
        &nbsp;&nbsp;&nbsp;public \$color = 'white';
        <br />&nbsp;&nbsp;&nbsp;private \$model;
        <br />&nbsp;&nbsp;&nbsp;private \$equipment;
        <br />&nbsp;&nbsp;&nbsp;private \$engineSize;
        <br />&nbsp;&nbsp;&nbsp;private \$interiors;

        <br /><br />&nbsp;&nbsp;&nbsp;<b>function __construct(\$color = 'white', \$model = '', \$equipment = '', \$engineSize = '', \$interiors = '')
        <br />&nbsp;&nbsp;&nbsp;{
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->color=\$color;
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->model=\$model;
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->equipment=\$equipment;
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->engineSize=\$engineSize;
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->interiors=\$interiors;
            <br />&nbsp;&nbsp;&nbsp;}</b>
    <br />}
    <br /><b>\$nissan = new Auto('grey','Qashqai','N-Connecta','1.5 TDI','black & grey');</b>
    ";
    echo"<br /><br />Stampa di oggetto <b>\$nissan</b>:<br /><pre>";print_r($nissan);echo"</pre></li>";
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>