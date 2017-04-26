<?php
require_once('Models/GasEngineeringDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Gas Engineering and Management';
$gasEngineeringDataSet= new GasEngineeringDataSet();
$view->gasEngineeringDataSet= $gasEngineeringDataSet->fetchAllGasEngineering();
require_once('Views/gas-engineering-and-management.phtml');