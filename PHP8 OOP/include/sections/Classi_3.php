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
        public $color = 'white';        //  gestibile da qualunque parte
        private $model;                 //  private: gestibile solo all'interno della classe | protected: gestibile dalla classe e da quelle che la erediteranno
        protected $equipment;
        protected $engineSize;
        protected $interiors;

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
                ,"color" => [
                    "red","white","grey","blue"
                ]
                ,"equipment" => [
                    "elettrica blue","N-Connecta","hybrid sport","hybrid city"
                ]
            ];
            if(in_array($value,$permittedValues["".$param.""])){
                $this->$param = $value;
            }
        }
    }

    class electric extends Auto{
        
    }

    class hybrid extends Auto{
        protected $speed;
        public function __construct($color = '', $equipment = '', $speed = '')
        {
            //  override #1
            //  $this->color = $color;                                  //  override di parametri 
            //  $this->equipment = $equipment;
            
            //  override #2
            parent::__construct($color,'',$equipment);                  //  tutti i valori impostati con unica chiamata al costruttore padre
 
            //  override #3
            //  parent::setParam('color',''.$color.'');                 //  chiamata dei metodi setter della classe padre
            //  parent::setParam('equipment',''.$equipment.'');

            $this->speed = $speed;
        }

        public function getParam($param)                                //  override metodo della classe pafre - il livello di accessibilità
                                                                        //  deve essere uguale o superiore a quello del metodo padre
        {
            return "utilizzo funzione getParam sovrascritta: Actual ".$param." is: ".parent::getParam($param);
        }

        public function setParam($param, $value)
        {
            $this->$param = $value;
        }
    }

    $auto = new Auto;
    $nissan = new Auto('grey','Qashqai','N-Connecta','1.5 TDI','black & grey');
    $leaf = new electric();
    $leafBlue = new electric('blue','elettrica blue');
    $hybrid = new hybrid('red','hybrid sport','200 km/h');
?>

<!-- Vista risultati -->

<div class="functionContentDiv">
<div class="functionContentDivFilename">[ <?=$fileSubPath?></b> ]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"
        <br /><i>class <b>Auto</b>{<br />
            &nbsp;&nbsp;&nbsp;public \$color = 'white';
            <br />&nbsp;&nbsp;&nbsp;private \$model;
            <br /><b>&nbsp;&nbsp;&nbsp;protected</b> \$equipment;
            <br /><b>&nbsp;&nbsp;&nbsp;protected</b> \$engineSize;
            <br /><b>&nbsp;&nbsp;&nbsp;protected</b> \$interiors;
        <br />}
        <br />class <b>electric</b> <i>extends</i> <b>Auto</b>{
            <br />&nbsp;&nbsp;&nbsp;
        <br />}
        <br />\$leaf = new electric();
        <br />\$leaf->getParam('color');&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;<b>".$leaf->getParam('color')."</b>
        <br /><br />Stampa di oggetto <b>\$leaf</b>:<br /><pre>";print_r($leaf);echo"</pre>
        ".$leaf->setParam('color','blue')."
        <br />\$leaf->setParam('color','blue');&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;<b>".$leaf->getParam('color')."</b>
        <br /><br />Stampa di oggetto <b>\$leaf</b>:<br /><pre>";print_r($leaf);echo"</pre>
        <br /><br />Costruzione oggetto da classe ereditata con parametri impostati: <i>\$leafBlue = new electric('blue','elettrica blue')</i>
        <br /><br />Stampa di oggetto <b>\$leafBlue</b>:<br /><pre>";print_r($leafBlue);echo"</pre>
        <br /><br /><b>override Costruttore</b> di Auto:<br />

        <br /><i>class <b>hybrid</b> extends Auto{
            <br />&nbsp;&nbsp;&nbsp;protected \$speed;
            <br />&nbsp;&nbsp;&nbsp;public function __construct(\$color = '', \$equipment = '', \$speed = '')
            <br />&nbsp;&nbsp;&nbsp;{<br />
            <br />&nbsp;&nbsp;&nbsp;}
        <br />}
        <br /><br />\$hybrid = new hybrid('red','hybrid sport','200 km/h');<br />
        <br /><br />Stampa di oggetto <b>\$hybrid</b>:<br /><pre>";print_r($hybrid);echo"</pre>
        <br />chiamata a metodo getParam in classe ereditata: \$hybrid->getParam('color');&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;<b>".$hybrid->getParam('color')."</b>
        <br />chiamata a metodo getParam in classe ereditata: \$hybrid->getParam('speed');&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;<b>".$hybrid->getParam('speed')."</b>
        <br />chiamata a metodo setParam in classe ereditata: \$hybrid->setParam('speed','500 km/h');</b>".$hybrid->setParam('speed','500 km/h')."
        <br />chiamata a metodo getParam in classe ereditata: \$hybrid->getParam('speed');&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;<b>".$hybrid->getParam('speed')."</b>
    ";
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>