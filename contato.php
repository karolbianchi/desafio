<?php

$nome = $_POST["nome"];

$email = $_POST["email"];

$endereco = $_POST["endereco"];

$cep = $_POST["cep"];

$telefone = $_POST["telefone"];


echo "<h2>Cadastro realizado com sucesso!</h2>";
echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>E-mail:</strong> $email</p>";
echo "<p><strong>Endereço:</strong> $endereco</p>";
echo "<p><strong>CEP:</strong> $cep</p>";
echo "<p><strong>Telefone:</strong> $telefone</p>";
?>