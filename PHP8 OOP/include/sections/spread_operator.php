<?php
    include "../const.php";
    $filePath = __FILE__;
    $fileSubPath = stristr($filePath,"PHP8 OOP");
    $fileName = substr($filePath,(strrpos($filePath,'/')+1));
    $functionName = str_replace("_"," ",str_replace(".php","",$fileName));

    //  test function

    function mathOp($op,...$args){          //  in ricezione, ... compatta in un array gli argomenti passati
                                            //  se non si usa lo spread operator, i valori passati 
                                            //  possono essere catturati con func_get_args()
        if(empty($args)){
            return null;
        }

        $ret = 0;
        switch($op){
            case'+':
                $ret = array_sum($args);
                break;
            case'*':
                $ret = 1;
                foreach($args as $arg){
                    $ret *= $arg;
                }
                break;
            case'-':
                $ret = $args[0];
                $vals = array_slice($args,1);
                foreach($vals as $val){
                    $ret -= $val;
                }
                break;

            case'/':
                $ret = $args[0];
                $vals = array_slice($args,1);
                foreach($vals as $val){
                    $ret /= $val;
                }
                break;

            default:
                $ret = null;
        }

        return $ret;
    }
?>

    <!-- Vista risultati -->

<div class="functionContentDiv">
    <div class="functionContentDivFilename">[ <?=$fileSubPath?></b> ] </div>
    <div class="functionContentDivPrint">
<?php
    $act = isset($_REQUEST["act"]) ? $_REQUEST["act"] : "";
    $f = isset($_REQUEST["f"]) ? str_replace(".php","",str_replace("_"," ",$_REQUEST["f"])) : "";
    if($act === "arg"){
        $arg = $arguments["".$f.""];
        foreach($arg as $a){
            echo"<li>".$a."</li>";
        }
    }
    else{
        echo"Utilizzo <b>Spread Operator (...\$args)</b><br /><br />";
        echo"<i>function mathOp(\$op,...\$args){SOME INSTRUCTIONS}<br /><br />";
        echo"<li>in <b>ricezione</b> compatta in un array gli argomenti passati<br /><br />";
        echo"mathOp('/',2,4)</i><br /><br /><pre>    ->    ";var_dump(mathOp("/",2,4));echo"</pre></li>";
        echo"<li>in <b>invio</b>, scompatta l'array in singoli valori<br /><br />";
        echo"<i>\$vals = [2,4,6,8];<br />mathOp('*',<b>...</b>\$vals)</i><pre><br />    ->    ";$vals = [2,4,6,8];var_dump(mathOp("*",...$vals));echo"</pre></li>";
    }
?>

    </div>
</div>
<script>
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    var functionListDivPaddingTopPerc = 0.03;
    var functionListDivPaddingPaddingTopPerc = 0.01;

    var functionListDivPaddingTopPerc = 0.03;
    var functionListDivPaddingPaddingTopPerc = 0.01;

    $('.functionContentDivPrint').css("margin-top",windowHeight * functionListDivPaddingTopPerc);
    $('.functionContentDivPrint').css("padding-top",windowHeight * functionListDivPaddingPaddingTopPerc);
</script>