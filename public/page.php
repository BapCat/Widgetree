<?php require __DIR__ . '/../vendor/autoload.php';

use BapCat\Values\HttpMethod;

use BapCat\Widgetree\Controls\Forms\Button;
use BapCat\Widgetree\Controls\Forms\FieldSet;
use BapCat\Widgetree\Controls\Forms\EmailTextbox;
use BapCat\Widgetree\Controls\Forms\Form;
use BapCat\Widgetree\Controls\Forms\PasswordTextbox;
use BapCat\Widgetree\Controls\Header;
use BapCat\Widgetree\Controls\Page;
use BapCat\Widgetree\Controls\Section;

$page = new Page('Test Page');

$header = new Header();
$section = new Section();

$page->sections->add($header);
$page->sections->add($section);

$login_submit = new Button(HttpMethod::POST(), 'post-dump.php', 'Log in');

$login_email = new EmailTextbox('email');
$login_email->required();

$login_pass = new PasswordTextbox('password');
$login_pass->required();

$login_field_group = new FieldSet();
$login_field_group->fields->add($login_email, 'Email');
$login_field_group->fields->add($login_pass,  'Password');

$login_button_group = new FieldSet();
$login_button_group->fields->add($login_submit);

$login_form = new Form('login');
$login_form->field_sets->add($login_field_group);
$login_form->field_sets->add($login_button_group);

$section->children->add($login_form);

return $page;
