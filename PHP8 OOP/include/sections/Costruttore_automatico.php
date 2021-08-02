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
    
    /* PHP 8 */
    
    class PersonConstruct{
        public function __construct(
            public string $name,public string $lastname,public string $phone
            ,public ?string $address='',public ?int $age=0
        )
        {
            
        }
    }
    $personConstruct = new PersonConstruct('Roberto','De Gaetano','123456789',age:44);
    
    /* PHP 7 *

    class PersonConstruct{
        public function __construct(
            $name,$lastname,$phone
            ,$address='',$age=0
        )
        {
            $this->$name = $name;
            $this->lastname = $lastname;
            $this->phone = $phone;
            $this->address = $address;
            $this->age = $age;
        }
    }
    $personConstruct = new PersonConstruct('Roberto','De Gaetano','123456789','-',44);

    /* */
    
?>

    <!-- Vista risultati -->

<div class="functionContentDiv">
    <div class="functionContentDivFilename">[ <?=$fileSubPath?> ]   -   [PHP Version: <b><?=PHP_VERSION?></b>]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"
        <br /><br /><u>E' possibile inizializzare l'oggetto in <b>modo automatico</b></u>:<br /><br />
        <li>non è più necessaria la dichiarazione delle proprietà nella classe e la loro inizializzazione manuale nel costruttore</li>
        <li>oltre al tipo, anche la visibilità delle proprietà viene settata nel costruttore</li>
        <li>le proprietà verranno automaticatìmente create e inizializzate alla creazione dell'istanza</li>
        <li>è un modo utile per creare un oggetto in caso di poche proprietà</li>
        <br />&nbsp;&nbsp;&nbsp;<i>class PersonConstruct{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function __construct(
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public string \$name,public string \$lastname,public string \$phone
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,public ?string \$address='',public ?int \$age=0
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;}</i><br />
        <br />\$personConstruct = new PersonConstruct('Roberto','De Gaetano','123456789',age:44);<br />
        <br /><br />Stampa di oggetto <b>\$personConstruct</b>:<br /><pre>";var_dump($personConstruct);echo"</pre>
    ";
?>

    </div>
</div>

<script src="js/sectionsJs.js"></script>