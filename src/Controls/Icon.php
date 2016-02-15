<?php namespace BapCat\Widgetree\Controls;

class Icon extends Control {
  private $alt;
  private $href;
  private $link;
  
  public function __construct($alt, $href, $link) {
    $this->alt  = $alt;
    $this->href = $href;
    $this->link = $link;
  }
  
  protected function getSubControls() {
    return [];
  }
  
  protected function getAlt() {
    return $this->alt;
  }
  
  protected function getHref() {
    return $this->href;
  }
  
  protected function getLink() {
    return $this->link;
  }
}
