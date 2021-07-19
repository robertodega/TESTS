<?php
    include "../const.php";
    $filePath = __FILE__;
    $fileSubPath = stristr($filePath,"PHP8 OOP");
    $fileName = substr($filePath,(strrpos($filePath,'/')+1));
    $functionName = str_replace("_"," ",str_replace(".php","",$fileName));

    //  test function

    
?>

    <!-- Vista risultati -->

<div class="functionContentDiv">
    <div class="functionContentDivFilename"></div>
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
        ?><div class="notFoundDiv"><h1>404 | page not found</h1></div><?php
    }    
?>

    </div>
</div>
<script>
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    var functionListDivPaddingTopPerc = 0.03;
    var functionListDivPaddingPaddingTopPerc = 0.01;

    var notFoundDivWidthPerc = 0.3;
    var notFoundDivLeftPerc = 0.2;
    var notFoundDivTopPerc = 0.1;

    $('.functionContentDivPrint').css("margin-top",$(window).height() * functionListDivPaddingTopPerc);
    $('.functionContentDivPrint').css("padding-top",$(window).height() * functionListDivPaddingPaddingTopPerc);

    $('.notFoundDiv').width(windowWidth * notFoundDivWidthPerc);
    $('.notFoundDiv').css('margin-left',windowWidth * notFoundDivLeftPerc);
    $('.notFoundDiv').css('margin-top',windowHeight * notFoundDivTopPerc);
</script>