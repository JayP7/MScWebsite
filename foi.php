<?php
require_once('Models/FoiDataSet.php');
$view = new stdClass();
$view->pageTitle = 'FOI Request';
$foiDataSet= new FoiDataSet();
$view->foiDataSet= $foiDataSet->fetchAllFOI();
require_once('Views/foi.phtml');