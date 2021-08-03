<section class="site-section section-counters text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <p><h4>Oltre</h4></p>
                <p class="counter start" data-to="<?php echo MAX_EXP_YEARS; ?>" data-speed="2000">0</p>
                <?php echo EXP_YEARS_TEXT; ?>
            </div>
            <div class="col-sm-4 col-xs-12">
                <p><h4>Oltre</h4></p>
                <p class="counter start" data-to="<?php echo MAX_KNOWN_LANG; ?>" data-speed="2000">0</p>       
                <?php echo KNOWN_LANG_TEXT; ?>
            </div>
            <div class="col-sm-4 col-xs-12">
                <p><h4>Attualmente</h4></p>
                <p id="infinity" class="counter" data-from="0" data-to="1" data-speed="1000">0</p>
                <?php echo STATISTICS_TEXT; ?>
            </div>
        </div>
    </div>
</section>