<?php
require_once('Models/AcousticsDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Acoustics';
$acousticsDataSet= new AcousticsDataSet();
$view->acousticsDataSet= $acousticsDataSet->fetchAllAcoustics();
require_once('Views/acoustics.phtml');