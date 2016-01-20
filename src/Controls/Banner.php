<?php namespace BapCat\Widgetree\Controls;

class Banner extends Control {
  private $icon;
  
  public function hasIcon() {
    return !empty($this->icon);
  }
  
  protected function getIcon() {
    return $this->icon;
  }
  
  protected function setIcon(Icon $icon) {
    $this->icon = $icon;
  }
}
