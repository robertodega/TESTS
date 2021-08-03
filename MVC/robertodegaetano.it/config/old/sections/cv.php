<section id="cv" class="site-section section-about text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Il mio CV</h2>
                <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                
                <div class="divCvDetails">
<?php

foreach($cvLinks as $key => $cvData){

    $divBoxCVFloat = ((!($key % 2)) || (!$key)) ? "left" : "right";

    $qualification = isset($cvData["qualification"]) ? trim($cvData["qualification"]) : "";
    $company = isset($cvData["company"]) ? trim($cvData["company"]) : "";
    $period = isset($cvData["period"]) ? trim($cvData["period"]) : "";
    $detail = isset($cvData["detail"]) ? trim($cvData["detail"]) : "";
?>
                    <div class="divBoxCV" id="divBoxCV_<?php echo $cvIndex; ?>" style="float: <?php echo $divBoxCVFloat; ?>; text-align:<?php echo $divBoxCVFloat; ?>" >
                        <div id="divBoxCVQualification_<?php echo $cvIndex; ?>" class="divBoxCVQualification">
                            <?php echo $qualification; ?>
                        </div>
                        <div id="divBoxCVCompany_<?php echo $cvIndex; ?>" class="divBoxCVCompany">
                            <?php echo $company; ?>
                        </div>
                        <div id="divBoxCVPeriod_<?php echo $cvIndex; ?>" class="divBoxCVPeriod">
                            <?php echo $period; ?>
                        </div>
                        <div id="divBoxCVDetail_<?php echo $cvIndex; ?>" class="divBoxCVDetail">
                            <?php echo $detail; ?>
                        </div>
                    </div>
                    <div class="clearBoth"></div>
<?php
}
?>
                </div>

                <div class="download_cv_div">
                    <a href="<?php echo CV_ITA_PDF; ?>" class="btn btn-fill" target="_blank" title="Scarica il CV" download>CV ITA</a>
                    <a href="<?php echo CV_ENG_PDF; ?>" class="btn btn-fill" target="_blank" title="Downoad my CV" download>ENG CV</a>
                </div>

            </div>
        </div>
    </div>
</section>