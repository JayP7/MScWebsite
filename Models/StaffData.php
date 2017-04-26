<?php

class StaffData {
    private $_photo, $_full_name, $_course, $_email, $_telephone;
    
public function __construct($dbRow) {
    

    $this->_photo= $dbRow['photo'];
    $this->_full_name= $dbRow['full_name']; 
    $this->_course= $dbRow['course'];
    $this->_email= $dbRow['email'];
    $this->_telephone= $dbRow['telephone'];

}

public function getphoto() {
    return $this->_photo;
}

public function getfull_name() {
    return $this->_full_name; 
}

public function getcourse() {
    return $this->_course; 
}

public function getemail() {
    return $this->_email;
}

public function gettelephone() {
    return $this->_telephone;
}
}
?>
