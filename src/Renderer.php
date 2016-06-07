<?php namespace BapCat\Widgetree;

use BapCat\Nom\Pipeline;
use BapCat\Persist\Directory;
use BapCat\Propifier\PropifierTrait;

use BapCat\Widgetree\ContentType;
use BapCat\Widgetree\Controls\Control;

class Renderer {
  use PropifierTrait;
  
  private $templates;
  private $pipeline;
  
  private $css;
  private $js;
  
  private $css_file;
  private $js_file;
  
  public function __construct(Directory $templates, Pipeline $pipeline) {
    $this->templates = $templates;
    $this->pipeline  = $pipeline;
  }
  
  protected function getCssFile() {
    return $this->css_file;
  }
  
  protected function getJsFile() {
    return $this->js_file;
  }
  
  public function render(Control $control) {
    $this->css = '';
    $this->js  = '';
    
    //@TODO figure out a good way to uniquely identify a tree of controls
    $this->css_file = 'test.css';
    $this->js_file  = 'test.js';
    
    $html = $this->renderControl($control);
    
    file_put_contents(__DIR__ . "/../public/$this->css_file", $this->css);
    file_put_contents(__DIR__ . "/../public/$this->js_file",  $this->js);
    
    return $html;
  }
  
  public function renderControl(Control $control) {
    $this->css .= $this->renderSupport($control, ContentType::Css());
    $this->js  .= $this->renderSupport($control, ContentType::Js());
    
    $template_name = str_replace('\\', '.', get_class($control)) . '.' . ContentType::Html()->extension . '.php';
    
    return $this->compile($template_name, $control->render($this));
  }
  
  private function renderSupport(Control $control, ContentType $type) {
    $template_name = str_replace('\\', '.', get_class($control)) . '.' . $type->extension . '.php';
    
    return $this->compile($template_name, ['control' => $control]);
  }
  
  private function compile($template_name, array $params) {
    $template = $this->templates->child[$template_name];
    
    if(!$template->exists) {
      return '';
    }
    
    return $this->pipeline->compile($template, $params);
  }
}
