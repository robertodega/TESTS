var windowWidth = $(window).width();
var windowHeight = $(window).height();

var functionListDivPaddingTopPerc = 0.03;
var functionListDivPaddingPaddingTopPerc = 0.01;

var functionContentDivPrintHeightPerc = 0.65;

var functionListDivPaddingTopPerc = 0.03;
var functionListDivPaddingPaddingTopPerc = 0.01;

$('.functionContentDivPrint').height(windowHeight * functionContentDivPrintHeightPerc);
$('.functionContentDivPrint').css("margin-top",windowHeight * functionListDivPaddingTopPerc);
$('.functionContentDivPrint').css("padding-top",windowHeight * functionListDivPaddingPaddingTopPerc);