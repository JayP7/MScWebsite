<?php


class AboutData {
    private $_id, $_aboutinfo, $_lifeinfo, $_locaction, $_campus, $_accommodation, $_leisure, 
            $_sports, $_support;
  
  public function __construct($dbRow) {
    
    $this->_id = $dbRow['id'];
    $this->_aboutinfo = $dbRow['aboutinfo'];
    $this->_lifeinfo = $dbRow['lifeinfo'];
    $this->_locaction = $dbRow['locaction'];
    $this->_campus = $dbRow['campus'];
    $this->_accommodation = $dbRow['accommodation'];
    $this->_leisure = $dbRow['leisure'];
    $this->_sports = $dbRow['sports'];
    $this->_support = $dbRow['support'];

}

public function getID() {
    return $this->_id;
}

public function getaboutinfo() {
    return $this->_aboutinfo;
}

public function getlifeinfo() {
    return $this->_lifeinfo;
}

public function getlocation() {
    return $this->_locaction;
}

public function getcampus() {
    return $this->_campus;
}

public function getaccommodation() {
    return $this->_accommodation;
}

public function getleisure() {
    return $this->_leisure;
}

public function getsports() {
    return $this->_sports;
}

public function getsupport() {
    return $this->_support;
}

}
?>