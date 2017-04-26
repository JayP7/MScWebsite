<?php
require_once('Models/MediaCityAboutDataSet.php');
$view = new stdClass();
$view->pageTitle = 'About MediaCityUK';
$mediaCityAboutDataSet= new MediaCityAboutDataSet();
$view->mediaCityAboutDataSet= $mediaCityAboutDataSet->fetchAllMediaCityAbout();
require_once('Views/mediacityabout.phtml');