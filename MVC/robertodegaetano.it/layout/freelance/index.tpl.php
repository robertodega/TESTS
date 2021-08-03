<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="<?php echo KEYWORDS_TAG_VALUE; ?>">
        <meta name="description" content="<?php echo DESCRIPTION_TAG_VALUE; ?>">
        <meta name="author" content="<?php echo WEBSITE_OWNER; ?>">
        <title><?=WEBSITE_TITLE?></title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="<?=CURRENT_LAYOUT?>css/styles.css" rel="stylesheet" />
        <link href="<?=CURRENT_LAYOUT?>css/custom.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body id="page-top">

        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav"><?=$this->mainNav?></nav>
        <header class="masthead bg-primary text-white text-center headerContainer"><?=$this->header?></header>
        <section class="page-section bg-primary text-white mb-0 aboutContainer" id="about"><?=$this->about?></section>
        <section class="page-section portfolio" id="cv"><?=$this->cv?></section>
        <section class="page-section portfolio" id="experiences"><?=$this->experiences?></section>
        <section class="page-section portfolio" id="activities"><?=$this->activities?></section>
        <section class="page-section contact_container" id="contact"><?=$this->contact?></section>
        <div class="copyright py-4 text-center text-white"><?=$this->copyright?></div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?=CURRENT_LAYOUT?>js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
<script>
    $('.headerContainer').height($(window).height());
    $('.page-section').height($(window).height());
</script>
