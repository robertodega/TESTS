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

    $obj1 = new stdClass();
    $obj1->name = 'Roberto';
    $obj2 = new stdClass();
    $obj2->name = 'OBJ2';
    $obj3 = new stdClass();
    $obj3->name = 'OBJ3';
    $obj4 = new stdClass();
    $obj4->name = 'OBJ4';

    $obj3->myObject = $obj4;
    $obj2->myObject = $obj3;
?>

    <!-- Vista risultati -->

<div class="functionContentDiv">
    <div class="functionContentDivFilename">[ <?=$fileSubPath?> ]   -   [PHP Version: <b><?=PHP_VERSION?></b>]<br /><br /><?=$argList;?></div>
    <div class="functionContentDivPrint">
<?php
    //  actual code here
    echo"
        <br />\$obj1 = new stdClass();
        <br />\$obj1->name = 'Roberto';
        <br />\$obj2 = new stdClass();
        <br />\$obj2->name = 'OBJ2';
        <br />\$obj3 = new stdClass();
        <br />\$obj3->name = 'OBJ3';
        <br />\$obj4 = new stdClass();
        <br />\$obj4->name = 'OBJ4';
        <br />
        <br />\$obj3->myObject = \$obj4;
        <br />\$obj2->myObject = \$obj3;
        <br /><br />Accesso a valore di <b>obj4->name</b> attraverso proprietà di oggetti concatenati (partendo da oggetto <b>\$obj2</b>):<br /><br />
        echo <b>\$obj2->myObject->myObject->name</b>&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;<b>".$obj2->myObject->myObject->name."</b> &nbsp;&nbsp;&nbsp;=>&nbsp;&nbsp;&nbsp;OK
        <br /><br />tentando di leggere la proprietà concatenata con un errore volontario 
        <br />echo <b>\$obj2->myObject->myObject<i>->myObject</i>->name</b>
        <br />non si ottiene il risultato in quanto si sta cercando di puntare ad un oggetto nullo (\$obj4->myObject)
        &nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;'<b>".$obj2->myObject->myObject->myObject->name."</b>'
        <br /><br />Per tentare di usare una proprietà che potrebbe non esistere senza causare errori nella pagina, si usa l'operatore <u>Nullsafe</u> '<b><i>?</i></b>':
        <br /><br />è un metodo comodo se si deve ad esempio <u>accedere ad un Json di cui non si conosce esattamente la struttura</u>
        <br />e del quale si deve leggere una proprietà della quale a priori non si conosce l'esistenza<br />
        <br />accederà alla proprietà <b>myObject</b> <u>se questa NON è nulla</u>:<br />\$obj2<b>?</b>->myObject<b>?</b>->myObject<b>?</b>->myObject<b>?</b>->name&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;'".$obj2?->myObject?->myObject?->myObject?->name."'
        <br />\$obj2<b>?</b>->myObject<b>?</b>->myObject<b>?</b>->name&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;&nbsp;'<b>".$obj2?->myObject?->myObject?->name."</b>'
    ";
?>

    </div>
</div>
<script src="js/sectionsJs.js"></script>