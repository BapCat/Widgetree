<?php namespace BapCat\Widgetree\Controls;

use BapCat\Collection\Collection;
use BapCat\Widgetree\Renderer;

class Page extends Control {
  private $title;
  private $sections;
  
  public function __construct($title) {
    $this->title = $title;
    $this->sections = new Collection();
  }
  
  protected function getTitle() {
    return $this->title;
  }
  
  protected function getSections() {
    return $this->sections;
  }
  
  public function render(Renderer $renderer) {
    return [
      'title'    => $this->title,
      'css_file' => $renderer->css_file,
      'js_file'  => $renderer->js_file,
      'sections' => $this->sections->map(function($section) use($renderer) {
        return $renderer->render($section);
      })
    ];
  }
}
