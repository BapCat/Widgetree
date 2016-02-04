<?php require __DIR__ . '/../vendor/autoload.php';

use BapCat\Nom\Compiler;
use BapCat\Persist\Drivers\Local\LocalDriver;

use BapCat\Widgetree\ContentType;
use BapCat\Widgetree\Renderer;

$fs = new LocalDriver(__DIR__ . '/..');
$templates = $fs->getDirectory('/templates');
$cache     = $fs->getDirectory('/cache');

$type = ContentType::Css();

$renderer = new Renderer($templates, $cache, $type, new Compiler());

$page = require __DIR__ . '/page.php';


header("Content-Type: {$type->mime}");

echo $renderer->render($page);

