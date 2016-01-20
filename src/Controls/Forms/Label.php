<?php namespace BapCat\Widgetree\Controls\Forms;

use BapCat\Widgetree\Controls\Control;

class Label extends Control {
  private $text;
  private $for;
  
  public function __construct($text, FormField $for) {
    $this->text = $text;
    $this->for  = $for;
  }
  
  protected function getText() {
    return $this->text;
  }
  
  protected function getFor() {
    return $this->for;
  }
}
