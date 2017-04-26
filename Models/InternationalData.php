<?php


class InternationalData {
   private $_id, $_study, $_scholarship, $_ourstudents, $_meeting, $_apply, $_faq, $_gettingready;
  
  public function __construct($dbRow) {
    
    $this->_id = $dbRow['id'];
    $this->_study = $dbRow['study'];
    $this->_scholarship = $dbRow['scholarship'];
    $this->_ourstudents = $dbRow['ourstudents'];
    $this->_meeting = $dbRow['meeting'];
    $this->_apply = $dbRow['apply'];
    $this->_faq = $dbRow['faq'];
    $this->_gettingready = $dbRow['gettingready'];
  

}

public function getID() {
    return $this->_id;
}

public function getstudy() {
    return $this->_study;
}

public function getscholarship() {
    return $this->_scholarship;
}

public function getourstudents() {
    return $this->_ourstudents;
}

public function getmeeting() {
    return $this->_meeting;
}

public function getapply() {
    return $this->_apply;
}

public function getfaq() {
    return $this->_faq;
}

public function getgettingready() {
    return $this->_gettingready;
}


}
