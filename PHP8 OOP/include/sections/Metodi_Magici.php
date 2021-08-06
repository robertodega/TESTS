<?php
include "../const.php";
$filePath = __FILE__;
$fileSubPath = stristr($filePath, "PHP8 OOP");
$fileName = substr($filePath, (strrpos($filePath, '/') + 1));
$functionName = str_replace("_", " ", str_replace(".php", "", $fileName));
if (strpos($functionName, "\\")) {
    $functionName = substr($functionName, (strrpos($functionName, "\\") + 1));
}

$argList = "";
if (isset($arguments["" . $functionName . ""])) {
    foreach ($arguments["" . $functionName . ""] as $divName => $args) {
        $argList .= "<li>" . implode("</li><li>", $args) . "</li>";
    }
}

//  test function
class Request
{
    protected $data;
    //  public $name;       
    public function __construct()
    {
        echo "<br />Passaggio dal costruttore<br />";
        if (!empty($_REQUEST)) {
            $this->data = $_REQUEST;
        }
    }
    public function getData()
    {
        return $this->data;
    }

    public function __get($name)
    {
        return isset($this->data[$name]) ? $this->data[$name] : "assente";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "<pre>";
        print_r(func_get_args());
        echo "</pre>";
        $obj = new static();        //  come fare una new Request()
        switch ($name) {
            case 'all': {
                    echo "obj->getData: <pre>";
                    print_r($obj->getData());
                    echo "</pre>";
                    echo "call to magic STATIC method <i>__callStatic</i> <b>" . $name . "</b><br />" . implode("<br />", $arguments);
                }
                break;
        }
    }

    public function __call($name, $arguments)
    {
        $obj = new static();        //  come fare una new Request()
        echo "obj->getData: <pre>";
        print_r($obj->getData());
        echo "</pre>";
        echo "call to magic OBJECT method <i>__call</i> <b>" . $name . "</b><br />arguments: " . implode("<br />", $arguments) . "<br />";
        switch ($name) {
            case 'test': {
                    echo "<br />__call object method " . $name . "<br />func_get_args:<pre>";
                    print_r(func_get_args());
                    echo "</pre><br />";
                }
                break;
        }
    }

    public function __destruct()
    {
        echo "<br />Distruzione oggetto di classe <b>" . __CLASS__ . "</b><br />";
    }
}
?>

<!-- Vista risultati -->

<div class="functionContentDiv">
    <div class="functionContentDivFilename">[ <?= $fileSubPath ?> ] - [PHP Version: <b><?= PHP_VERSION ?></b>]<br /><br /><?= $argList; ?></div>
    <div class="functionContentDivPrint">
        <?php
        echo "
        <br />Sono metodi che vengono chiamati in automatico in base agli eventi che avvengono sulla classe.
        <br /><br />Alcuni esempi:<br />
        <br />Classe <b>Request</b> che sarà un <i>wrapper</i> per leggere i parametri Request:
        
        <br /><br />&nbsp;&nbsp;&nbsp;class Request{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;protected \$data;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function __construct(){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(\$_REQUEST)){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$this->data = \$_REQUEST;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function getData(){
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \$this->data;
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public function <b>__get</b>(\$name)
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return isset(\$this->data[\$name]) ? \$this->data[\$name] : 'assente';
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;}
        <br />&nbsp;&nbsp;&nbsp;\$obj = new Request();<br />
    ";
        $obj = new Request();
        echo "
        <br /><br />echo \$obj->getData()&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;<b><pre>";
        print_r($obj->getData());
        echo "</pre></b>
        chiamando la pagina aggiungendo nella barra un parametro (ad es. ?name=roberto), questo si vedrà nella variabile \$obj->getData()<br />
        
        <br /></li><li>metodo<b>__get()</b>
        <br /><br />Se voglio leggere il valore della variabile name in \$data (se esiste), posso usare il metodo magico __get in cui cerco il parametro che mi serve
        <br />echo 'name: '.\$obj->name;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;" . $obj->name . "<br />
        <br /></li><li>metodo<b>__callstatic()</b>
        <br /><br />Se voglio ottenere tutti i parametri della get attraverso un metodo magico, posso creare un metodo statico 'all()' che viene riconosciuto quando lo passo tramite metodo magico callStatic<br />
        <br />Chiamata metodo magico <u>STATICO</u> \"<b><i>__callStatic</i></b>\" su oggetto \$obj:<br />
        <br /><b>Request::all('name','lastname','phone')</b>;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;
    ";
        Request::all('name', 'lastname', 'phone');
        echo "
        <br /><br /></li><li>metodo<b>__call()</b>
        <br /><br />Chiamata metodo magico <u>DI CLASSE</u> \"<i><b>__call</i></b>\" su oggetto \$obj:<br />
        <br /><b>obj->objectFunctionAll('name','lastname','phone')</b>;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;
    ";
        $obj->objectFunctionAll('name', 'lastname', 'phone');
        $obj->objectFunctionTest('test', 'Roberto', 'De Gaetano', '123456789');
        $obj->objectFunctionTest2('test2', 'Roberto', 'De Gaetano', '123456789');
        $obj->test('test3', 'Roberto', 'De Gaetano', '123456789');
        ?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>