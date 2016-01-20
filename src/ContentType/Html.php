<?php namespace BapCat\Widgetree\ContentType;

use BapCat\Widgetree\ContentType\ContentType;

class Html implements ContentType {

  public function getMimeType() {
    return 'text/html';
  }

  public function getExtension() {
    return 'html';
  }

}
