<html>
 <head>
 	<meta charset="utf-8">
 <title>Consulta de Alunos</title>

<!-- Código para atualizar a página a cada 60 segundos -->
<meta http-equiv='refresh' content='60;url=form_relatorio_alunos.php'>

<!-- Importação do BootStrap - CSS e JavaScript -->
  <link href="../css_js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../css_js/bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="../css_js/css/estilo_form_consulta_aluno.css">
 </head>
 <body>

<header>
    <nav class="alert alert-secondary role="alert"  style="margin: 0px; padding: 15px;">
        <a href="pg_principal.php"  class="btn btn-outline-dark">Voltar</a>			
        <a href="form_relatorio_alunos.php" class="btn btn-outline-success">
			Atualizar Relatório</a>
    </nav>

    <h1 class="alert alert-secondary" role="alert" style="margin: 0; text-align: center;">
    Relatório de alunos</h1>
</header>

<!-- Criando tabela e cabeçalho dos campos-->

<table class="table table-striped table-dark">
	<tr class="bg-primary">
 		<th style="text-align: center; width: 100px;">Foto</th>
 		<th style="text-align: center; width: 100px;">Código</th>
 		<th>Nome</th>
 		<th>Endereço</th>
 		<th>Telefone</th>
 		<th>Celular</th>
 		<th>E-mail</th>
 		<th>Data de nascimento</th>
 		<th>RG</th>
 		<th>CPF</th>
 		<th>Código da Turma</th>
 	</tr>

 <!-- Preenchendo a tabela com os dados do banco: -->
<?php

include("../conexao_bd_mysql/conexao_bd_mysql.php");

// Lista todos os alunos cadastrado na tabela
$sql = "SELECT * FROM tb_alunos order by alu_codigo desc";

// mostrando valores encontrado na tabela

$resultado_consulta =  mysqli_query($conexao_servidor_bd, $sql)
or die
("<h5 class='alert alert-danger'>Erro na consulta...</h5>");
 
// Obtendo os dados por meio de um loop while
while($registros_consulta = mysqli_fetch_array($resultado_consulta))
{
	$foto_retorno = $registros_consulta['alu_foto'];
	$cod_aluno_retorno = $registros_consulta['alu_codigo'];
	$nome_retorno = $registros_consulta['alu_nome'];
	$endereco_retorno = $registros_consulta['alu_endereco'];
	$telefone_retorno = $registros_consulta['alu_telefone'];
	$celular_retorno = $registros_consulta['alu_celular'];
	$email_retorno = $registros_consulta['alu_email'];
   $data_nascimento_retorno = $registros_consulta['alu_data_nascimento'];
   $rg_retorno = $registros_consulta['alu_rg'];
   $cpf_retorno = $registros_consulta['alu_cpf'];
	$cod_turma_retorno = $registros_consulta['alu_cod_turma'];

 echo "<tr>";
		 echo "<td style='text-align: center;'>" . 
		 "<img src='../img/fotos_alunos/$foto_retorno' id='img_alunos'>" . "</td>";

		 echo "<td style='font-size:40px; text-align: center; vertical-align: middle;'>" 
		 . $cod_aluno_retorno . "</td>";
		 echo "<td style='vertical-align: middle;'>" . $nome_retorno . "</td>";
		 echo "<td style='vertical-align: middle;'>" . $endereco_retorno . "</td>";
		 echo "<td style='vertical-align: middle;'>" . $telefone_retorno . "</td>";
		 echo "<td style='vertical-align: middle;'>" . $celular_retorno . "</td>";
		 echo "<td style='vertical-align: middle;'>" . $email_retorno . "</td>";

//converter a data do mysql para o formato brasileiro.
$data_nascimento_retorno = implode("/",array_reverse(explode("-",$data_nascimento_retorno)));

		 echo "<td style='vertical-align: middle;'>" . $data_nascimento_retorno . "</td>";
		 echo "<td style='vertical-align: middle;'>" . $rg_retorno . "</td>";
		 echo "<td style='vertical-align: middle;'>" . $cpf_retorno . "</td>";
		 echo "<td style='vertical-align: middle; text-align: center; font-size:20px; '>" . 
		 $cod_turma_retorno . "</td>";
   echo "</tr>";
}

 mysqli_close($conexao_servidor_bd); 
 echo "</table>";


?>

</body>
</html>