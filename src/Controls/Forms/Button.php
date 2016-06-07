<?php namespace BapCat\Widgetree\Controls\Forms;

use BapCat\Values\HttpMethod;
use BapCat\Widgetree\Renderer;

class Button extends FormField {
  private $method;
  private $action;
  private $text;
  
  public function __construct(HttpMethod $method, $action, $text) {
    $this->method = $method;
    $this->action = $action;
    $this->text   = $text;
  }
  
  protected function getSubControls() {
    return [];
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
  
  public function render(Renderer $renderer) {
    return [
      'method' => $this->method,
      'action' => $this->action,
      'text'   => $this->text
    ];
  }
}
