<?php namespace BapCat\Widgetree\Controls\Forms;

use BapCat\Collection\Collection;
use BapCat\Widgetree\Controls\Control;
use BapCat\Widgetree\Renderer;

class FieldSet extends Control {
  private $fields;
  
  public function __construct() {
    $this->fields = new Collection();
  }
  
  protected function getSubControls() {
    return $this->fields;
  }
  
  protected function getFields() {
    return $this->fields;
  }
  
  public function render(Renderer $renderer) {
    return [
      'fields' => $this->fields->map(function($field) use($renderer) {
        return $renderer->render($field);
      })
    ];
  }
}
