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

    
?>

    <!-- Vista risultati -->

<div class="functionContentDiv">
    <div class="functionContentDivFilename">[ <?=$fileSubPath?> ]   -   [PHP Version: <b><?=PHP_VERSION?></b>]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    echo"
        <li><b>Composer</b> è un gestore di librerie PHP</li>
        <li>Dopo aver installato composer, da linea di comando l'istruzione <i>composer</i> mostra tutti i possibili comandi da dare al gestore</li>
        <li>
            All'interno della cartella progetto, inizializzare l'ambiente con il comando <b>composer init</b>, il quale creerà il file <b>composer.json</b>.
            <br /><br />Verranno richiesti:
            <ul>
                <li>nome del vendor / nome progetto (es. roberto/test-composer)</li>
                <li>description del progetto</li>
                <li>nome dell'autore del progetto (Roberto De Gaetano <roberto@robertodegaetano.it>)</li>
                <li>Minimum Stability (numero release - anche vuoto)</li>
                <li>Package type (library,project,etc.)</li>
                <li>license</li>
                <li>dipendenze del progetto (proseguire con Invio)</li>
                <li>proseguire con Invio fino alla generazione del file Json, che verrà mostrato e se tutto ok digitare 'yes'</li>
                <li>Comparirà il seguente messaggio:<br /><br /><i>PSR-4 autoloading configured. Use 'namespace Roberto\TestComposer;' in src/<br />
                Include the Composer autoloader with: require 'vendor/autoload.php';</i><br /></li><br />
                <li>utilizzando il comando <i>composer require</i> è possibile indicare i pacchetti necessari al progetto<br />(il pacchetto può essere scelto tra quelli disponibili su <a href='https://packagist.org/' target='_blank'>packagist</a> - Es.'composer require psr/log')</li>
                <li>se un pacchetto serve solamente in fase di sviluppo, posso usare il comando <i>composer require --dev</i><br />(Es. composer require --dev fzaninotto/faker)<br />Il nuovo pacchetto comparirà nella lista dei <i>require-dev</i> all'interno di <i>composer.json</i></li>
                &nbsp;&nbsp;&nbsp;<i>,
                <br />&nbsp;&nbsp;&nbsp;\"require-dev\": {
                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\"fzaninotto/faker\": \"^1.5\"
                <br />&nbsp;&nbsp;&nbsp;}</i><br /><br />
                <br /><br />Creare un file <i>index.php</i> nella root del progetto
                <br />l'istruzione <i><b>require_once 'vendor/autoload.php';</b></i> permette di caricaricare automaticamente tramite composer qualunque classe che servirà usare nel progetto
                <br /><br />Es.<br /><i>&nbsp;&nbsp;&nbsp;\$faker = Faker\Factory::create('it_IT');
                <br />&nbsp;&nbsp;&nbsp;echo \$faker->name();</i><br />
                <br />Ad ogni refresh di pagina verrà mostrato un nome italiano diverso,<br /><u>senza aver dovuto inserire la require della classe Faker</u><br /><br />
                <li>creazione nuovo progetto da composer tramite <i>composer create-project</i><br /><br />Es. <b>composer create-project laravel/laravel PROJECT_NAME</b></li><br />
            </ul>
        </li>

    ";
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>