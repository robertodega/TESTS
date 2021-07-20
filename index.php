<?php //    echo"_SERVER<pre>";print_r($_SERVER);echo"</pre>"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
        <link rel="stylesheet" href="../css/custom.css" />

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <title>Apache2 Localhost</title>
    </head>
    <body>
        <div class="pageContainer">
            <div class="headerDiv"><?php echo $_SERVER["REQUEST_URI"]; ?></div>
<?php
    $scanFolder = ".";
    $folderContent = scandir($scanFolder,1);
    if(!empty($folderContent)){
        $notAllowedValues = [".","..","index.php","index.html","css","const.php"];
        $t = [];
        foreach($folderContent as $c){
            if(!in_array($c,$notAllowedValues)){
                $t[] = $c;
            }
        }
        $folderContent = $t;
        foreach($folderContent as $c){
            $tgt = (is_dir($c)) ? "" : "_blank";
?>
        <li><a href="<?php echo $c; ?>" target="<?php echo $tgt; ?>"><?php echo $c; ?></a></li>
<?php
        }
    }
?>
            <hr /><li><a href="../">Back</a></li>
        </div>
    </body>
</html>