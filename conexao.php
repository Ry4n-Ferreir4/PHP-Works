<?php

define('HOST', '[SEU-IP-DE-HOST]');
define('USUARIO', '[NOME-USUARIO-DB]');
define('SENHA', '[SENHA-DB]');
define('DB', '[NOME DA TABELA]');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');


