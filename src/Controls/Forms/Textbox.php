<?php namespace BapCat\Widgetree\Controls\Forms;

class Textbox extends FormField {
  private $name;
  private $placeholder;
  private $text;
  
  public function __construct($name) {
    $this->name = $name;
  }
  
  protected function getName() {
    return $this->name;
  }
  
  public function hasPlaceholder() {
    return !empty($this->placeholder);
  }
  
  protected function getPlaceholder() {
    return $this->placeholder;
  }
  
  protected function setPlaceholder($placeholder) {
    $this->placeholder = $placeholder;
  }
  
  public function hasText() {
    return !empty($this->text);
  }
  
  protected function getText() {
    return $this->text;
  }
  
  protected function setText($text) {
    $this->text = $text;
  }
}
