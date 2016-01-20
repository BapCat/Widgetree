<?php namespace BapCat\Widgetree\Controls\Forms;

class FieldGroup extends Group {
  private $fields = [];
  
  public function addField(FormField $field, $label) {
    $this->fields[] = ['field' => $field, 'label' => new Label($label, $field)];
  }
  
  protected function getFields() {
    return $this->fields;
  }
}
