<?php
require_once('Models/AerospaceDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Aerospace Engineering';
$aerospaceDataSet= new AerospaceDataSet();
$view->aerospaceDataSet= $aerospaceDataSet->fetchAllAerospace();
require_once('Views/aerospace-engineering.phtml');