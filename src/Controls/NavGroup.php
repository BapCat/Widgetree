<?php namespace BapCat\Widgetree\Controls;

use BapCat\Propifier\PropifierTrait;

class NavGroup {
  use PropifierTrait;
  
  private $name;
  private $items = [];
  
  public function __construct($name) {
    $this->name = $name;
  }
  
  protected function getName() {
    return $this->name;
  }
  
  protected function getItems() {
    return $this->items;
  }
  
  public function addItem($text, $href) {
    $this->items[] = new NavItem($text, $href);
    return $this;
  }
}
