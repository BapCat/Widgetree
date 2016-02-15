<?php namespace BapCat\Widgetree\Controls;

use BapCat\Propifier\PropifierTrait;

abstract class Control {
  use PropifierTrait;
  
  protected abstract function getSubControls();
}
