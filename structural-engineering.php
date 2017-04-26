<?php
require_once('Models/StructuralEngineeringDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Structural Engineering';
$structuralEngineeringDataSet= new StructuralEngineeringDataSet();
$view->structuralEngineeringDataSet= $structuralEngineeringDataSet->fetchAllStructuralEngineering();
require_once('Views/structural-engineering.phtml');