<?php namespace BapCat\Widgetree\Controls\Forms;

use BapCat\Widgetree\Renderer;

class Textbox extends FormField {
  private $name;
  private $placeholder;
  private $text;
  private $required;
  
  public function __construct($name) {
    $this->name = $name;
  }
  
  protected function getSubControls() {
    return [];
  }
  
  protected function getName() {
    return $this->name;
  }
  
  protected function getPlaceholder() {
    return $this->placeholder;
  }
  
  protected function setPlaceholder($placeholder) {
    $this->placeholder = $placeholder;
  }
  
  protected function getText() {
    return $this->text;
  }
  
  protected function setText($text) {
    $this->text = $text;
  }
  
  protected function getRequired() {
    return $this->required;
  }
  
  protected function setRequired($required) {
    $this->required = $required;
  }
  
  public function render(Renderer $renderer) {
    return [
      'name'        => $this->name,
      'placeholder' => $this->placeholder,
      'text'        => $this->text,
      'required'    => $this->required
    ];
  }
}
