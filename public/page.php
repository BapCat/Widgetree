<?php require __DIR__ . '/../vendor/autoload.php';

use BapCat\Nom\Compiler;
use BapCat\Nom\NomPreprocessor;
use BapCat\Persist\Drivers\Local\LocalDriver;
use BapCat\Values\HttpMethod;

use BapCat\Widgetree\Controls\Forms\Button;
use BapCat\Widgetree\Controls\Forms\ButtonGroup;
use BapCat\Widgetree\Controls\Forms\FieldGroup;
use BapCat\Widgetree\Controls\Forms\EmailTextbox;
use BapCat\Widgetree\Controls\Forms\Form;
use BapCat\Widgetree\Controls\Forms\Label;
use BapCat\Widgetree\Controls\Forms\PasswordTextbox;
use BapCat\Widgetree\Controls\Banner;
use BapCat\Widgetree\Controls\Icon;
use BapCat\Widgetree\Controls\Page;
use BapCat\Widgetree\Controls\SideNav;
use BapCat\Widgetree\Renderer;

$page = new Page('Test Page');

$banner = new Banner();
$banner->icon = new Icon('Logo', 'https://docs.atlassian.com/aui/latest/styles/images/logos/aui-header-logo-aui.png', '/');

$nav = new SideNav();
$nav->addGroup('Test Group')
  ->addItem('Item 1', '/')
  ->addItem('Item 2', '/')
;

$nav->addGroup('Test Group 2')
  ->addItem('Item', '/')
;

$page->banner = $banner;
$page->nav    = $nav;

$login_submit = new Button(HttpMethod::POST(), 'post-dump.php', 'Log in');

$login_email = new EmailTextbox('email');
$login_email->required();

$login_pass = new PasswordTextbox('password');
$login_pass->required();

$login_field_group = new FieldGroup();
$login_field_group->addField($login_email, 'Email');
$login_field_group->addField($login_pass,  'Password');

$login_button_group = new ButtonGroup();
$login_button_group->children->add($login_submit);

$login_form = new Form('login');
$login_form->addGroup($login_field_group);
$login_form->addGroup($login_button_group);

$page->body->add($login_form);

return $page;
