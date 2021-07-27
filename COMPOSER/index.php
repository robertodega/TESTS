<?php
    require_once 'vendor/autoload.php';
    $faker = Faker\Factory::create('it_IT');
    echo $faker->name()." - ".$faker->address()." - ".$faker->city();
?>
 - <a href='index.php'>reload</a><br />
<a href='image.php'>image</a><br />
