<?php
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

if ($usuario=="andre@estacio" && $senha=="1234") {
  echo "Usuário existente = usuario=$usuario e senha = $senha";
}else{
  echo "<strong> login ou senha inválidos </strong>";
}

?>
