<?php

require 'SchuldHulpServiceGenerator.php';
require 'vendor/autoload.php';

error_reporting(E_ERROR);

$genrator = new SchuldHulpServiceGenerator();
$genrator->generate();