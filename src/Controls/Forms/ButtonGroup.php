<?php namespace BapCat\Widgetree\Controls\Forms;

use BapCat\Collection\Collection;

class ButtonGroup extends Group {
  private $children;
  
  public function __construct() {
    $this->children = new Collection();
  }
  
  protected function getChildren() {
    return $this->children;
  }
}