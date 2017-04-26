<?php
require_once('Models/PrivacypolicyDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Privacy Policy';
$privacypolicyDataSet= new PrivacypolicyDataSet();
$view->privacypolicyDataSet= $privacypolicyDataSet->fetchAllPrivacypolicy();
require_once('Views/privacypolicy.phtml');