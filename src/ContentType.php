<?php namespace BapCat\Widgetree;

use BapCat\Propifier\PropifierTrait;

use Eloquent\Enumeration\AbstractMultiton;

/**
 * Represents an HTTP content type
 * 
 * @author    Corey Frenette
 * @copyright Copyright (c) 2015, BapCat
 */
class ContentType extends AbstractMultiton {
  use PropifierTrait;
  
  private $mime;
  private $extension;
  
  protected function __construct($key, $mime, $extension) {
    parent::__construct($key);
    
    $this->mime      = $mime;
    $this->extension = $extension;
  }
  
  protected static function initializeMembers() {
    new static('Html', 'text/html',       'html');
    new static('Css',  'text/css',        'css');
    new static('Js',   'text/javascript', 'js');
  }
  
  protected function getMime() {
    return $this->mime;
  }
  
  protected function getExtension() {
    return $this->extension;
  }
}
