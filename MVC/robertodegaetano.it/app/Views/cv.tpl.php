<div class="container textualSection">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 titleFont">Il mio CV</h2>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <div class="row justify-content-center">

<?php
    foreach($this->curr as $key => $cvData){                                                          //  lettura dati da DB
        $period = isset($cvData["period"]) ? trim($cvData["period"]) : "";
        $company = isset($cvData["company"]) ? trim($cvData["company"]) : "";
?>
        <div class="col-md-6 col-lg-4 mb-5 cursiveFont">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#cvModal<?=$key?>">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                </div>
                <b><u><?=$company?></u></b><br />[ <?=$period?> ]
            </div>
        </div>
<?php
    }
?>
    </div>
</div>


<?php
    //  finestra modale per dettaglio CV
    foreach($this->curr as $key => $cvData){
        $qualification = isset($cvData["qualification"]) ? trim($cvData["qualification"]) : "";
        $company = isset($cvData["company"]) ? trim($cvData["company"]) : "";
        $period = isset($cvData["period"]) ? trim($cvData["period"]) : "";
        $detail = isset($cvData["detail"]) ? trim($cvData["detail"]) : "";
?>
        <div class="portfolio-modal modal fade" id="cvModal<?=$key?>" tabindex="-1" aria-labelledby="cvModal<?=$key?>" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?=$company?></h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-4"><?=$period?></p>
                                    <p class="mb-4"><u><b><?=$qualification?></b></u></p>
                                    <p class="mb-4"><?=$detail?></p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        <?=CLOSE_BTN_MODAL?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
?>