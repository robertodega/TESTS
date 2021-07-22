
// variables
var notesPath = "https://github.com/robertodega/TESTS/tree/main/PHP8%20OOP";
var toggleArg = new Array();

var minWidthValue = 600;
var minHeightValue = 400;
var maxWidthValue = 1354;
var maxHeightValue = 1200;
var landscapeWidthValue = 1512;

var currentVisualization;

var fadeInTime = 1000;
var fadeOutTime = 1000;
var doubleFadeInTime = 2000;

var divMainContainerHeightPerc = 95;
var leftDIvPerc = 0.15;
var rightDIvPerc = 0.8;

var contentDivPrintTopPerc = 0.03;

// functions

function pageInit(){
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    var curX = parseInt(windowWidth);
    var curY = parseInt(windowHeight);
    currentVisualization = ((curX < minWidthValue) && (curY < maxHeightValue)) ? "portrait" : "landscape";
    if(curX > landscapeWidthValue){currentVisualization = "big";}

    $('.leftDIv').width(curX * leftDIvPerc);
    $('.rightDIv').width(curX * rightDIvPerc);
    
    $('.divMainContainer').height(divMainContainerHeightPerc+"%");
    $('.containerDiv').height("100%");

    switch(currentVisualization){
        case'landscape':{
            
        }break;
        case'big':{
            
        }break;
        case'portrait':{
            
        }break;
    }

    $('.contentListDiv').load("include/sections/home.php");

}

// events
$(window).on('load', function() { pageInit(); });
$(window).on('resize', function() { pageInit(); });
$(window).on('drag', function() { pageInit(); });

//  arguments list highlights management and page content loading

$("#argItemHome").css("background-color","orange");

$('.liArgumentsItem').each(function(){
    $(this).on("mouseover",function(){
        $("#"+$(this).attr('id')).css("background-color","orange");
    });
    $(this).on("mouseout",function(){
        if(!toggleArg[""+$(this).attr('id')+""]){
            $("#"+$(this).attr('id')).css("background-color","wheat");
        }
    });
    $(this).on("click",function(){
        $('.liArgumentsItem').each(function(){
            $("#"+$(this).attr('id')).css("background-color","wheat");
            toggleArg[""+$(this).attr('id')+""] = false;
        });
        toggleArg[""+$(this).attr('id')+""] = true;
        $("#"+$(this).attr('id')).css("background-color","orange");

        $('.contentListDiv').load("include/sections/"+$(this).attr('page'));
    });
});

$('#argItemHome').on('click',function(){document.location.href='';});
$('#argItemNotes').on('click',function(){window.open(notesPath);});
