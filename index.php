<?php

require_once('autoload/autoload.php');

spl_autoload_register(array('Autoloader', 'loader'));

echo Books::showbooks();

echo "<br><br>";

echo calc::sum(2,5);

