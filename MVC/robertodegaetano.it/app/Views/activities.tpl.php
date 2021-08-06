<div class="container">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 titleFont">Attività</h2>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <div class="row justify-content-center textualSection">
        <div class="col-md-12">
                <h3 class='titleFont'>Di cosa mi occupo</h3><hr />
            </div>
            <div class="col-sm-4">
                <div class="service">
                    <img src='<?=IMG_PATH?>frontend.png' class='activitiesImg' alt='Front End Developer' />
                    <h4 class='titleFont'>Front-end</h4>
                    <p><?=ACTIVITY_FRONTEND_TEST?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="service">
                <img src='<?=IMG_PATH?>backend.png' class='activitiesImg' alt='Back End Developer' />
                    <h4 class='titleFont'>Back-end</h4>
                    <p><?=ACTIVITY_BACKEND_TEST?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="service">
                    <img src='<?=IMG_PATH?>computer.png' class='activitiesImg' alt='Computers' />
                    <h4>HW / SW</h4>
                    <p><?=ACTIVITY_ASSISTANCE_TEST?></p>
                </div>
            </div>
    </div>
</div>

<script>
    $('.activitiesImg').width($(window).width() * 0.05);
</script>