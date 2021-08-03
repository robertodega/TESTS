<section id="works" class="site-section section-portfolio">
    <div class="container">
        <div class="text-center">
            <h3>Gli ultimi lavori realizzati</h3>
            <img src="assets/img/lines.svg" class="img-lines" alt="lines">
        </div>
        <div class="row">
<?php 
    foreach($worksList as $title => $val){ 
        $link = isset($val["link"]) ? $val["link"] : "";
        $desc = isset($val["desc"]) ? $val["desc"] : "";
        $portItem = "portfolioItem".$title;
?>
            <div class="col-md-4 col-xs-6">
                <div class="portfolio-item">
                    <img src="assets/img/portfolio-1.jpg" class="img-res" alt="">
                    <div class="portfolio-item-info">
                        <h4><?php echo $title; ?></h4>
                        <a href="#" data-toggle="modal" data-target="#<?php echo $portItem; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                        <a href="<?php echo $link; ?>" target="_blank"><span class="glyphicon glyphicon-link"></span></a>
                    </div>
                </div>
            </div>
<?php } ?>
        </div>
    </div>
</section>