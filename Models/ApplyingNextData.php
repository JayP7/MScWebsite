<?php

class ApplyingNextData {
   private $_id, $_info1, $_info2, $_info3, $_info4, $_info5;
    
     public function __construct($dbRow) {
    
    $this->_id = $dbRow['id'];
    $this->_info1 = $dbRow['info1'];
    $this->_info2 = $dbRow['info2'];
    $this->_info3 = $dbRow['info3'];
    $this->_info4 = $dbRow['info4'];
    $this->_info5 = $dbRow['info5'];
    
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

public function getinfo3() {
    return $this->_info3;
}

public function getinfo4() {
    return $this->_info4;
}

public function getinfo5() {
    return $this->_info5;
}

}
