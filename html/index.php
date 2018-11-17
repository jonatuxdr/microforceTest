<?php 

use MicroForce\kernel\Kernel;

// Never write this line : it's a lost of time do ctrl space

require __DIR__ . '/../vendor/autoload.php';

$kernel = new Kernel();

echo $kernel->start();
