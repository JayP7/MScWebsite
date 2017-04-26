<?php

class PetroleumGasData {
    private $_id, $_course, $_coursedetails, $_coursedetails1, $_coursedetails2, $_coursedetails3, $_coursedetails4, 
          $_coursedetails5, $_coursedetails6, $_coursedetails7, $_entry, $_teaching, $_employability, $_feesandfunding;
  
  public function __construct($dbRow) {
    
    $this->_id = $dbRow['id'];
    $this->_course = $dbRow['course'];
    $this->_coursedetails = $dbRow['coursedetails'];
    $this->_coursedetails1 = $dbRow['coursedetails1'];
    $this->_coursedetails2 = $dbRow['coursedetails2'];
    $this->_coursedetails3 = $dbRow['coursedetails3'];
    $this->_coursedetails4 = $dbRow['coursedetails4'];
    $this->_coursedetails5 = $dbRow['coursedetails5'];
    $this->_coursedetails6 = $dbRow['coursedetails6'];
    $this->_coursedetails7 = $dbRow['coursedetails7'];
    $this->_entry = $dbRow['entry'];
    $this->_teaching = $dbRow['teaching'];
    $this->_employability = $dbRow['employability'];
    $this->_feesandfunding = $dbRow['feesandfunding'];


}

public function getID() {
    return $this->_id;
}

public function getcourse() {
    return $this->_course;
}

public function getcoursedetails() {
    return $this->_coursedetails;
}

public function getcoursedetails1() {
    return $this->_coursedetails1;
}

public function getcoursedetails2() {
    return $this->_coursedetails2;
}

public function getcoursedetails3() {
    return $this->_coursedetails3;
}

public function getcoursedetails4() {
    return $this->_coursedetails4;
}

public function getcoursedetails5() {
    return $this->_coursedetails5;
}

public function getcoursedetails6() {
    return $this->_coursedetails6;
}

public function getcoursedetails7() {
    return $this->_coursedetails7;
}

public function getentry() {
    return $this->_entry;
}

public function getteaching() {
    return $this->_teaching;
}

public function getemployability() {
    return $this->_employability;
}

public function getfeesandfunding() {
    return $this->_feesandfunding;
}

}
?>
