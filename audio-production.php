<?php
require_once('Models/AudioProductionDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Audio Production';
$audioProductionDataSet= new AudioProductionDataSet();
$view->audioProductionDataSet= $audioProductionDataSet->fetchAllAudioProduction();
require_once('Views/audio-production.phtml');