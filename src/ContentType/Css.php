<?php namespace BapCat\Widgetree\ContentType;

use BapCat\Widgetree\ContentType\ContentType;

class Css implements ContentType {

  public function getMimeType() {
    return 'text/css';
  }

  public function getExtension() {
    return 'css';
  }

}
