<div class="container">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 titleFont">Esperienze</h2>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <div class="row justify-content-center">

<?php
    $experiencesLinks = [
		["PHP7" => 100]
		,["HTML5" => 90]
		,["CSS3" => 75]
		,["JQuery" => 50]
		,["MySQL" => 90]
		,["Oracle" => 60]
		,["Continuous Delivery" => 50]
		,["GIT" => 85]
	];
    
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