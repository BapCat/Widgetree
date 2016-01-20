<?php namespace BapCat\Widgetree\Controls\Forms;

use BapCat\Widgetree\Controls\Control;

abstract class FormField extends Control {
  private $required;
  
  public function required() {
    $this->required = true;
  }
  
  protected function getRequired() {
    return $this->required;
  }
  
  protected function setRequired($required) {
    $this->required = $required;
  }
}
