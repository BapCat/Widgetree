<?php namespace BapCat\Widgetree\Controls;

use BapCat\Propifier\PropifierTrait;
use BapCat\Widgetree\Renderer;

abstract class Control {
  use PropifierTrait;
  
  public abstract function render(Renderer $renderer);
}
