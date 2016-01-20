<?php namespace BapCat\Widgetree\Controls\Forms;

use BapCat\Values\HttpMethod;
use BapCat\Widgetree\Controls\Control;

class Button extends Control {
  private $method;
  private $action;
  private $text;
  
  public function __construct(HttpMethod $method, $action, $text) {
    $this->method = $method;
    $this->action = $action;
    $this->text   = $text;
  }
  
  protected function getMethod() {
    return $this->method;
  }
  
  protected function getAction() {
    return $this->action;
  }
  
  protected function getText() {
    return $this->text;
  }
}
