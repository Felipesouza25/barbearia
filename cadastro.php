<?php
//incluir um arquivo ja existente 
include('config.php');
require "agendar.html";


//a variavel recebe o que vem do formulario


$data = $_POST['data'];
$data1 = implode("-",array_reverse(explode("/",$data)));

$hora = $_POST['hora'];
$profissional = $_POST['profissional'];


//inserir os registros no banco de dados
$in = mysqli_query($conexao, "INSERT INTO agenda1(data, hora, profissional)
        values ('$data1', '$hora', '$profissional')") or die("Erro");

if($in)
{ ?>
  <script language="JavaScript">
     window.location="servico.html";
   </script>

<?php }
  
?>
  
  
 