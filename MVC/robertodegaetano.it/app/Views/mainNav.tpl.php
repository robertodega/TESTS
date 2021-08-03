<div class="container">
    <a class="navbar-brand cursiveFont" href="./">Roberto De Gaetano</a>
    <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">

<?php foreach($menuLinks as $target => $label){ ?>
        <li class="nav-item mx-0 mx-lg-1 cursiveFont"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#<?=$target?>"><?=$label?></a></li>
<?php } ?>

        </ul>
    </div>
</div>