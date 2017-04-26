<?php


class PrivacypolicyData {
     private $_id, $_privacyinfo, $_information, $_collect, $_permission, $_informationcollect, $_personalinformation1, 
             $_personalinformation2, $_cookies, $_registration, $_interactive, $_security, $_ecommerce, $_international, 
             $_advertising, $_links, $_privacystatement, $_futureinformation, $_contact ;
     
     public function __construct($dbRow) {
    
    $this->_id = $dbRow['id'];
    $this->_privacyinfo = $dbRow['privacyinfo'];
    $this->_information = $dbRow['information'];
    $this->_collect = $dbRow['collect'];
    $this->_permission = $dbRow['permission'];
    $this->_informationcollect = $dbRow['informationcollect'];
    $this->_personalinformation1 = $dbRow['personalinformation1'];
    $this->_personalinformation2 = $dbRow['personalinformation2'];
    $this->_cookies = $dbRow['cookies'];
    $this->_registration = $dbRow['registration'];
    $this->_interactive = $dbRow['interactive'];
    $this->_security = $dbRow['security'];
    $this->_ecommerce = $dbRow['ecommerce'];
    $this->_international = $dbRow['international'];
    $this->_advertising = $dbRow['advertising'];
    $this->_links = $dbRow['links'];
    $this->_privacystatement = $dbRow['privacystatement'];
    $this->_futureinformation = $dbRow['futureinformation'];
    $this->_contact = $dbRow['contact'];
    
}

public function getID() {
    return $this->_id;
}

public function getprivacyinfo() {
    return $this->_privacyinfo;
}

public function getinformation() {
    return $this->_information;
}

public function getcollect() {
    return $this->_collect;
}

public function getpermission() {
    return $this->_permission;
}

public function getinformationcollect() {
    return $this->_informationcollect;
}

public function getpersonalinformation1() {
    return $this->_personalinformation1;
}

public function getpersonalinformation2() {
    return $this->_personalinformation2;
}

public function getcookies() {
    return $this->_cookies;
}

public function getregistration() {
    return $this->_registration;
}

public function getinteractive() {
    return $this->_interactive;
}

public function getsecurity() {
    return $this->_security;
}

public function getecommerce() {
    return $this->_ecommerce;
}

public function getinternational() {
    return $this->_international;
}

public function getadvertising() {
    return $this->_advertising;
}

public function getlinks() {
    return $this->_links;
}

public function getprivacystatement() {
    return $this->_privacystatement;
}

public function getfutureinformation() {
    return $this->_futureinformation;
}

public function getcontact() {
    return $this->_contact;
}


}
?>