<?php 
    foreach($worksList as $title => $val){ 
        $link = isset($val["link"]) ? $val["link"] : "";
        $desc = isset($val["desc"]) ? $val["desc"] : "";
        $portItem = "portfolioItem".$title;
?>
    <div id="<?php echo $portItem; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                <img class="img-res" src="<?php echo PORTFOLIO_PATH.$title; ?>.png" title="<?php echo $title; ?>" alt="<?php echo $title; ?>">
            </div>
            <div class="modal-body">
                <h4 class="modal-title"><?php echo $title; ?></h4>
                <p><?php echo $desc; ?></p>
            </div>
            <div class="modal-footer">
                <a href="<?php echo $link; ?>" class="btn btn-fill" target="_blank">Guarda il sito!</a>
            </div>
            </div>
        </div>
    </div>
<?php
    }
?>
