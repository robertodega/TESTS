<div class="container">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 titleFont">Esperienze</h2>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <div class="row justify-content-center">

<?php
foreach($experiencesLinks as $k => $exp){
    foreach($exp as $l => $p){
?>
        <div class="col-md-10 skillDiv">
            <div class="skill cursiveFont">
                <h4><?php echo $l; ?></h4><hr />
            </div>
        </div>
<?php
    }
}
?>
    </div>
</div>