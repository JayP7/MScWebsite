<?php
require_once('Models/CombustionEngineeringDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Industrial and Commercial Combustion Engineering';
$combustionEngineeringDataSet= new CombustionEngineeringDataSet();
$view->combustionEngineeringDataSet= $combustionEngineeringDataSet->fetchAllCombustionEngineering();
require_once('Views/industrial-and-commercial-combustion-engineering.phtml');