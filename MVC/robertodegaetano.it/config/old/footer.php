<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
<?php foreach($socialLinks as $la => $li){ ?>
                <img class="footerIcon" src="<?php echo SOCIAL_PATH.$la; ?>.png" alt="<?php echo $la; ?>" title="<?php echo $la; ?>" onClick="window.open('<?php echo $li; ?>');" />
<?php } ?>
            </div>
            <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3"><p class="copyright"><?php echo FOOTER_TEXT; ?></p></div>
            <div class="col-sm-4 col-xs-3">
                <div class="text-right page-scroll">
                    <a class="icon icon-up-bg" href="#home"><i class="icon-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>