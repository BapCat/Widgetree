<?php namespace BapCat\Widgetree\Controls;

use BapCat\Propifier\PropifierTrait;

class NavItem {
  use PropifierTrait;
  
  private $text;
  private $href;
  
  public function __construct($text, $href) {
    $this->text = $text;
    $this->href = $href;
  }
  
  protected function getText() {
    return $this->text;
  }
  
  protected function getHref() {
    return $this->href;
  }
}
