<?php
/**
 * 
 * This file is part of Aura for PHP.
 * 
 * @package Aura.Framework_Project
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */
 
require dirname(__FILE__) . "/../src/server/bootstrap.php";
$path = dirname(__DIR__);
require "{$path}/vendor/autoload.php";
$kernel = (new \Aura\Project_Kernel\Factory)->newKernel(
    $path,
    'Aura\Web_Kernel\WebKernel'
);
$kernel();
