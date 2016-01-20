<?php namespace BapCat\Widgetree\Controls\Forms;

use BapCat\Widgetree\Controls\Control;

class Form extends Control {
  private $groups = [];
  
  private $id;
  
  public function __construct($id) {
    $this->id = $id;
  }
  
  public function addGroup(Group $group) {
    $this->groups[] = $group;
  }
  
  protected function getGroups() {
    return $this->groups;
  }
  
  protected function getId() {
    return $this->id;
  }
}
