<?php include "include/const.php"; ?>
<html>
    <head>
        <title><?=$title?></title>
        <link rel="stylesheet" href="css/style.css" />
        
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!---->

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!---->

    </head>
    <body>
        <div class="divMainContainer">
            <div class="containerDiv leftDIv">
                <div class="functionListDiv" style='padding:1%'>
                    <ul class="navbar-nav">
                        <li class="nav-item liArgumentsItem" id="argItemNotes">Files</li><hr />
                        <li class="nav-item liArgumentsItem" id="argItemHome">Home</li><hr />
    <?php 
        foreach($arguments as $func => $cont){
            $filePath = $rootPath.$sectionsPath;
            $fileName = str_replace(" ","_",$func).".php";
            $page = (file_exists($filePath.$fileName)) ? $fileName : $notFoundPage;
            foreach($cont as $divname => $content){
    ?>
                        <li class="nav-item liArgumentsItem" id="argItem<?php echo $divname; ?>" page="<?php echo $page; ?>"><?php echo $func; ?></li>    
    <?php }} ?>
                    </ul>
                </div>
            </div>
            <div class="containerDiv rightDIv">
                <div class="contentListDiv" style='padding:1%'></div>
            </div>
        </div>
    </body>
</html>
<script src="js/func.js"></script>