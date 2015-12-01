<?php

define('CLASS_DIR', '../');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

use src\NomeImput;
use src\EmailImput;
use src\IdadeImput;
use src\SenhaImput;
use src\Form;

echo"<form action='form_submit' method='post' accept-charset='utf-8'>";

$nome = new NomeImput();
$form = new Form($nome);
$form->Render();

$email = new EmailImput();
$form = new Form($email);
$form->Render();

$idade = new IdadeImput();
$form = new Form($idade);
$form->Render();

$senha = new SenhaImput();
$form = new Form($senha);
$form->Render();

echo "</form>";
echo "<button>Enviar</button>";
?>
