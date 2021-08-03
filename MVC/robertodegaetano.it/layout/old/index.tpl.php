<?php
    include "config/old/const.php";
    
    $coockieTime = time() + (10 * 365 * 24 * 60 * 60);
    if(!isset($_COOKIE["visitorNumber"])){
        setcookie('visitorNumber',1,$coockieTime);
    }else{
        $total = $_COOKIE["visitorNumber"] + 1;
        setcookie('visitorNumber',$total);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo WEBSITE_TITLE; ?></title>
        <meta name="keywords" content="<?php echo KEYWORDS_TAG_VALUE; ?>">
        <meta name="description" content="<?php echo DESCRIPTION_TAG_VALUE; ?>">
        <meta name="author" content="<?php echo WEBSITE_OWNER; ?>">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link href="<?=CSS_PATH?>/fonts.css" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="180x180" href="<?=IMAGES_PATH?>apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?=IMAGES_PATH?>favicon.png">
        <link href="<?=CSS_PATH?>bootstrap.min.css" rel="stylesheet">
        <link href="<?=CSS_PATH?>style.css" rel="stylesheet">
        <link href="<?=CSS_PATH?>responsive.css" rel="stylesheet">
        <link href="<?=CSS_PATH?>custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
<?php 
    include CONST_PATH.'header.php'; 
    include CONST_PATH.'cover.php'; 
?>
        <main id="main" class="site-main"><?php foreach($sections as $s){include SECTIONS_PATH.$s.".php";} ?></main>
<?php 
    include CONST_PATH.'footer.php';
    include CONST_PATH.'portfolioPopups.php';
?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="<?=JS_PATH?>bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="<?=JS_PATH?>skrollr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.9.0/bootstrap-progressbar.min.js"></script>
        <script src="<?=JS_PATH?>jquery.countTo.min.js"></script>
        <script src="<?=JS_PATH?>script.js"></script>

        <script src="<?=JS_PATH?>func.js"></script>
    
    </body>
</html>