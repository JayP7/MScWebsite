<?php
require_once('Models/HowToGetHereDataSet.php');
$view = new stdClass();
$view->pageTitle = 'How to get here';
$howToGetHereDataSet= new HowToGetHereDataSet();
$view->howToGetHereDataSet= $howToGetHereDataSet->fetchAllHowToGetHere();
require_once('Views/howtogethere.phtml');