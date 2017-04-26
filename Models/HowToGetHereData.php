<?php

class HowToGetHereData {
    private $_id, $_info1, $_tram, $_bus, $_bicycle, $_car, $_flight;
    
     public function __construct($dbRow) {
    
    $this->_id = $dbRow['id'];
    $this->_info1 = $dbRow['info1'];
    $this->_tram = $dbRow['tram'];
    $this->_bus = $dbRow['bus'];
    $this->_bicycle = $dbRow['bicycle'];
    $this->_car = $dbRow['car'];
    $this->_flight = $dbRow['flight'];
    
}

public function getID() {
    return $this->_id;
}

public function getinfo1() {
    return $this->_info1;
}

public function gettram() {
    return $this->_tram;
}

public function getbus() {
    return $this->_bus;
}

public function getbicycle() {
    return $this->_bicycle;
}

public function getcar() {
    return $this->_car;
}

public function getflight() {
    return $this->_flight;
}

}
