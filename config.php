<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bdname = "banco";
$conexao = mysqli_connect($servidor, $usuario, $senha, $bdname) or die('Erro de conexão com o banco de dados');

$datas = $_POST['datas'];
$horario = $_POST['horario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

// Adicione um var_dump para depuração
var_dump($_POST);

$stmt = $conexao->prepare("INSERT INTO agendamentos (datas, horario, nome, email, telefone) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $datas, $horario, $nome, $email, $telefone);

if ($stmt->execute()) {
    header("Location: confirmacao.html");
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
mysqli_close($conexao);
?>
