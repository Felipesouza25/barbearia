<?php
//incluir um arquivo ja existente 
include('config.php');



$servico = $_POST['flexRadioDefault'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

//inserir os registros no banco de dados
$in = mysqli_query($conexao, "INSERT INTO agenda2(serviço, nome, email, telefone)
        values ('$servico', '$nome', '$email', '$telefone')") or die("Erro");

if($in)
{
?>
  <script language="JavaScript">
     window.location="index.html";
   </script>

<?php }
  
?>
  
  
 