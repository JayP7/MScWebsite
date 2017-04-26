<?php
require_once('Models/TaughtDegreesDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Taught Degrees';
$taughtDegreesDataSet= new TaughtDegreesDataSet();
$view->taughtDegreesDataSet= $taughtDegreesDataSet->fetchAllTaughtDegrees();
require_once('Views/taughtdegrees.phtml');