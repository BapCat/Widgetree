<?php require __DIR__ . '/../vendor/autoload.php';

use BapCat\Nom\Compiler;
use BapCat\Persist\Drivers\Local\LocalDriver;

use BapCat\Widgetree\ContentType\Css;
use BapCat\Widgetree\Renderer;

$fs = new LocalDriver(__DIR__ . '/..');
$templates = $fs->getDirectory('/templates');
$cache     = $fs->getDirectory('/cache');

$type = new Css();

$renderer = new Renderer($templates, $cache, $type, new Compiler());

$page = require __DIR__ . '/page.php';


header('Content-Type: ' . $type->getMimeType()); 

echo $renderer->render($page);

