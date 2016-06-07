<?php require __DIR__ . '/../vendor/autoload.php';

use BapCat\Nom\Compiler;
use BapCat\Nom\Pipeline;
use BapCat\Persist\Drivers\Local\LocalDriver;

use BapCat\Widgetree\ContentType;
use BapCat\Widgetree\Renderer;

$fs = new LocalDriver(__DIR__ . '/..');
$templates = $fs->getDirectory('/templates');
$cache     = $fs->getDirectory('/cache');

if(!$cache->exists) {
  $cache->create();
}

$pipeline = new Pipeline($cache, new Compiler());
$renderer = new Renderer($templates, $pipeline);

$page = require __DIR__ . '/page.php';

echo $renderer->render($page);
