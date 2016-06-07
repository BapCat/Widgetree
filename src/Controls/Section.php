<?php namespace BapCat\Widgetree\Controls;

use BapCat\Collection\Collection;
use BapCat\Widgetree\Renderer;

class Section extends Control {
  private $children;
  
  public function __construct() {
    $this->children = new Collection();
  }
  
  protected function getSubControls() {
    return $this->children;
  }
  
  protected function getChildren() {
    return $this->children;
  }
  
  public function render(Renderer $renderer) {
    return [
      'children' => $this->children->map(function($child) use($renderer) {
        return $renderer->render($child);
      })
    ];
  }
}
