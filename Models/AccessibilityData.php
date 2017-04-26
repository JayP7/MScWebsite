<?php

class AccessibilityData {
   private $_id, $_accessibility, $_features, $_structure, $_navigation, $_textsizes, $_links, 
           $_images, $_colour, $_forms, $_newwindows, $_audioandvideo, $_javaScript, 
           $_alternativetextpages, $_standardscompliance;
  
  public function __construct($dbRow) {
    
    $this->_id = $dbRow['id'];
    $this->_accessibility = $dbRow['accessibility'];
    $this->_features = $dbRow['features'];
    $this->_structure = $dbRow['structure'];
    $this->_navigation = $dbRow['navigation'];
    $this->_textsizes = $dbRow['textsizes'];
    $this->_links = $dbRow['links'];
    $this->_images = $dbRow['images'];
    $this->_colour = $dbRow['colour'];
    $this->_forms = $dbRow['forms'];
    $this->_newwindows = $dbRow['newwindows'];
    $this->_audioandvideo = $dbRow['audioandvideo'];
    $this->_javaScript = $dbRow['javaScript'];
    $this->_alternativetextpages = $dbRow['alternativetextpages'];
    $this->_standardscompliance = $dbRow['standardscompliance'];

}

public function getID() {
    return $this->_id;
}

public function getaccessibility() {
    return $this->_accessibility;
}

public function getfeatures() {
    return $this->_features;
}

public function getstructure() {
    return $this->_structure;
}

public function getnavigation() {
    return $this->_navigation;
}

public function gettextsizes() {
    return $this->_textsizes;
}

public function getlinks() {
    return $this->_links;
}

public function getimages() {
    return $this->_images;
}

public function getcolour() {
    return $this->_colour;
}

public function getforms() {
    return $this->_forms;
}

public function getnewwindows() {
    return $this->_newwindows;
}

public function getaudioandvideo() {
    return $this->_audioandvideo;
}

public function getjavascript() {
    return $this->_javaScript;
}

public function getalternativetextpages() {
    return $this->_alternativetextpages;
}

public function getstandardscompliance() {
    return $this->_standardscompliance;
}

}
