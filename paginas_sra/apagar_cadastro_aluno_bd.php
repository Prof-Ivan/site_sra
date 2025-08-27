<!-- Apagar registro de alunos - Out/2024 -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <!-- Código para importar o BootStrap-->
    <link rel="stylesheet" href="../css_js/bootstrap/css/bootstrap.min.css">
     <script src="../css_js/bootstrap/js/bootstrap.min.js"></script>    
</head>
<body>

<?php

include ('../conexao_bd_mysql/conexao_bd_mysql.php');

if(isset($_POST['txt_cod_selecionado']))
{

$cod_proc_apagar = $_POST['txt_cod_selecionado'];
$nome_foto_aluno_dg = $_POST['txt_end_foto_apagar'];

 
$sql = "DELETE FROM tb_alunos WHERE alu_codigo = '$cod_proc_apagar'";
  
  // Verifica se o comando foi executado com sucesso
  if(mysqli_query($conexao_servidor_bd, $sql))
  	{ 
      $diretorio = "../img/fotos_alunos/"; 
      @unlink($diretorio . $nome_foto_aluno_dg);
  

      echo "<h1 class='alert alert-secondary' role='alert' style='text-align: center; padding: 50px;'>
      Registro de aluno apagadao com sucesso..</h1>"; 
    }
  		else
	   {
      echo "<h1 class='alert alert-danger' role='alert' style='text-align: center; padding: 50px;'>
      Registro de aluno não apagado..</h1>";  
    }
    
    echo "<meta http-equiv='refresh' content='2;url=pg_principal.php'>";
}

?>

</body>
</html>
