<?php namespace BapCat\Widgetree\Controls;

class SideNav extends Control {
  private $groups = [];
  
  protected function getSubControls() {
    return $this->groups;
  }
  
  protected function getGroups() {
    return $this->groups;
  }
  
  public function addGroup($name) {
    return $this->groups[] = new NavGroup($name);
  }
}
