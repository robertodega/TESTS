- <a href='index.php'>INDEX</a><br />
<a href='image.php'>reload</a><br />
<?php
    // include composer autoload
    require 'vendor/autoload.php';

    // import the Intervention Image Manager Class
    use Intervention\Image\ImageManager;

    // create an image manager instance with favored driver
    $manager = new ImageManager(array('driver' => 'imagick'));

    // to finally create image instances
    $image = $manager->make('public/salina.jpg')->resize(300, 200)->save('public/salina-sm.jpg');
?>
 

