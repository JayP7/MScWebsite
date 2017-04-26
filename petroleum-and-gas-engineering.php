<?php
require_once('Models/PetroleumGasDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Petroleum and Gas Engineering';
$petroleumGasDataSet= new PetroleumGasDataSet();
$view->petroleumGasDataSet= $petroleumGasDataSet->fetchAllPetroleumGas();
require_once('Views/petroleum-and-gas-engineering.phtml');