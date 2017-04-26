<?php

class FoiData {
    private $_id, $_info1, $_info2;
    
     public function __construct($dbRow) {
    
    $this->_id = $dbRow['id'];
    $this->_info1 = $dbRow['info1'];
    $this->_info2 = $dbRow['info2'];
    
    }
    
public function getID() {
    return $this->_id;
}

public function getinfo1() {
    return $this->_info1;
}

public function getinfo2() {
    return $this->_info2;
}

}