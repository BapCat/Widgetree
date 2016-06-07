<?php namespace BapCat\Widgetree\Controls\Forms;

use BapCat\Collection\Collection;
use BapCat\Widgetree\Controls\Control;
use BapCat\Widgetree\Renderer;

class Form extends Control {
  private $field_sets;
  
  private $id;
  
  public function __construct($id) {
    $this->id = $id;
    $this->field_sets = new Collection();
  }
  
  protected function getSubControls() {
    return $this->field_sets->all();
  }
  
  protected function getId() {
    return $this->id;
  }
  
  protected function getFieldSets() {
    return $this->field_sets;
  }
  
  public function render(Renderer $renderer) {
    return [
      'id' => $this->id,
      'field_sets' => $this->field_sets->map(function($set) use($renderer) {
        return $renderer->render($set);
      })
    ];
  }
}
