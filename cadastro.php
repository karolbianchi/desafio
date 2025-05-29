<?php
$nome = $_POST["nome"];
echo"<br> O nome do palestrante é: $nome";

$idade = $_POST["idade"];
echo"<br> A sua idade é: $idade ";

$telefone = $_POST["telefone"];
echo"<br> Seu telefone é: $telefone";

$palestra = $_POST["palestra"];
echo"<br> A palestra que você escolheu é: $palestra";

$selecao = $_POST["selecao"];
echo"<br> Você é: $selecao";

if($selecao == "aluno"){
  $ra =$_POST["ra"];
echo"<br> Seu RA é: $ra";  
}else{
    $cpf = $_POST["cpf"];
echo"<br> Seu CPF é:$cpf";
}