<?php namespace BapCat\Widgetree;

use BapCat\Nom\Compiler;
use BapCat\Nom\Preprocessor;
use BapCat\Persist\Directory;
use BapCat\Persist\FileReader;

use BapCat\Widgetree\ContentType;
use BapCat\Widgetree\Controls\Control;

class Renderer {
  private $templates;
  private $cache;
  private $compiler;
  private $preprocessors;
  
  public function __construct(Directory $templates, Directory $cache, ContentType $type, Compiler $compiler, array $preprocessors = []) {
    $this->templates     = $templates;
    $this->cache         = $cache;
    $this->compiler      = $compiler;
    $this->preprocessors = $preprocessors;
    $this->type          = $type;
  }
  
  public function render(Control $control) {
    $template_name = str_replace('\\', '.', get_class($control)) . '.' . $this->type->extension . '.php';
    $template = $this->templates->child[$template_name];
    
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
    return $this->compiler->compile($template, ['control' => $control, 'renderer' => $this]);
  }
}
