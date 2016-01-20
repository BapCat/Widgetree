<?php namespace BapCat\Widgetree\ContentType;

use BapCat\Widgetree\ContentType\ContentType;

class Javascript implements ContentType {

  public function getMimeType() {
    return 'text/javascript';
  }

  public function getExtension() {
    return 'js';
  }

}
