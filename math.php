<?php

require_once 'Gaussian.php';


$A = array(array(2, 4), array(1, 1));
$x = array(8, 2);
$gaus = new Gaussian();

var_dump($gaus->solve($A, $x));


