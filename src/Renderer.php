<?php namespace BapCat\Widgetree;

use BapCat\Nom\Compiler;
use BapCat\Nom\Preprocessor;
use BapCat\Persist\Directory;
use BapCat\Persist\FileReader;
use BapCat\Propifier\PropifierTrait;

use BapCat\Widgetree\ContentType;
use BapCat\Widgetree\Controls\Control;

class Renderer {
  use PropifierTrait;
  
  private $templates;
  private $cache;
  private $compiler;
  private $preprocessors;
  
  private $css;
  private $js;
  
  private $css_file;
  private $js_file;
  
  public function __construct(Directory $templates, Directory $cache, Compiler $compiler, array $preprocessors = []) {
    $this->templates     = $templates;
    $this->cache         = $cache;
    $this->compiler      = $compiler;
    $this->preprocessors = $preprocessors;
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
    
    return $this->compile($template_name, [
      'control'  => $control,
      'renderer' => $this
    ]);
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
    
    if(count($this->preprocessors) != 0) {
      $code = null;
      $template->read(function(FileReader $reader) use(&$code) {
        $code = $reader->read();
      });
      
      $processed_code = $code;
      
      foreach($this->preprocessors as $preprocessor) {
        $processed_code = $preprocessor->process($processed_code);
      }
      
      $template = $this->cache->child[$template_name];
      
      //@TODO: use FileWriter when available
      file_put_contents($template->full_path, $processed_code);
    }
    
    //@TODO: this won't work unless it's a LocalFile
    return $this->compiler->compile($template, $params);
  }
}
