<section id="experiences" class="site-section section-skills">
    <div class="container">
        <div class="text-center">
            <h3>Le mie Skills</h3>
            <img src="assets/img/lines.svg" class="img-lines" alt="lines">
        </div>
        <div class="row">
            <div class="row expRow">
<?php 
    foreach($experiencesLinks as $k => $exp){
        foreach($exp as $l => $p){
?>
                <div class="col-md-4 skillDiv">
                    <div class="skill">
                        <h4><?php echo $l; ?></h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-transitiongoal="<?php echo $p; ?>"></div>
                        </div>
                    </div>
                </div>
<?php
        }
}
?>
            </div>
        </div>
    </div>
</section>