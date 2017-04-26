<?php
require_once('Models/MediaCityDataSet.php');
$view = new stdClass();
$view->pageTitle = 'MediaCityUK';
$mediaCityDataSet= new MediaCityDataSet();
$view->mediaCityDataSet= $mediaCityDataSet->fetchAllMediaCity();
require_once('Views/mediacity.phtml');