<?php namespace BapCat\Widgetree\Controls;

use BapCat\Collection\Collection;

class Page extends Control {
  private $title;
  
  private $banner;
  private $nav;
  private $body;
  
  public function __construct($title) {
    $this->body = new Collection();
    
    $this->title = $title;
  }
  
  protected function getSubControls() {
    $controls = [
      $banner,
      $nav
    ];
    
    foreach($this->body as $control) {
      $controls[] = $control;
    }
    
    return $controls;
  }
  
  protected function getTitle() {
    return $this->title;
  }
  
  public function hasBanner() {
    return !empty($this->banner);
  }
  
  protected function getBanner() {
    return $this->banner;
  }
  
  protected function setBanner(Banner $banner) {
    $this->banner = $banner;
  }
  
  public function hasNav() {
    return !empty($this->nav);
  }
  
  protected function getNav() {
    return $this->nav;
  }
  
  protected function setNav(SideNav $nav) {
    $this->nav = $nav;
  }
  
  protected function getBody() {
    return $this->body;
  }
}
