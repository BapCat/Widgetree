<?php require __DIR__ . '/../vendor/autoload.php';

use BapCat\Nom\Compiler;
use BapCat\Persist\Drivers\Local\LocalDriver;

use BapCat\Widgetree\ContentType;
use BapCat\Widgetree\Renderer;

$fs = new LocalDriver(__DIR__ . '/..');
$templates = $fs->getDirectory('/templates');
$cache     = $fs->getDirectory('/cache');

$renderer = new Renderer($templates, $cache, ContentType::Html(), new Compiler());

$page = require __DIR__ . '/page.php';

echo $renderer->render($page);

