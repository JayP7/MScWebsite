<?php

class IndexData {
    private $_id, $_index1, $_index2, $_index3, $_index4;
  
  public function __construct($dbRow) {
    
    $this->_id = $dbRow['id'];
    $this->_index1 = $dbRow['index1'];
    $this->_index2 = $dbRow['index2'];
    $this->_index3 = $dbRow['index3'];
    $this->_index4 = $dbRow['index4'];
}

public function getID() {
    return $this->_id;
}

public function getindex1() {
    return $this->_index1;
}

public function getindex2() {
    return $this->_index2;
}

public function getindex3() {
    return $this->_index3;
}

public function getindex4() {
    return $this->_index4;
}

}
?>