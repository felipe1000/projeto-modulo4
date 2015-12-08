<?php

define('CLASS_DIR', '../');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

use src\InputText;
use src\InputEmail;
use src\InputNumber;
use src\InputPassword;
use src\Submit;
use src\Form;

echo"<form action='form_submit' method='post' accept-charset='utf-8'>";

$nome = new InputText("nome");
$form = new Form($nome);
$form->Render();

$email = new InputEmail("email");
$form = new Form($email);
$form->Render();

$idade = new InputNumber("idade");
$form = new Form($idade);
$form->Render();

$senha = new InputPassword("senha");
$form = new Form($senha);
$form->Render();

$submit = new Submit("enviar");
$form = new Form($submit);
$form->Render();

echo "</form>";
?>
