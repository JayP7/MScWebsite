<?php
require_once('Models/ApplyingDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Applying';
$applyingDataSet= new ApplyingDataSet();
$view->applyingDataSet= $applyingDataSet->fetchAllApplying();
require_once('Views/applying.phtml');