<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SRA - Situação da alteração de cadastro de aluno</title>

	<!-- Importação do BootStrap - CSS e JavaScript -->
	<link href="../css_js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../css_js/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php

include("../conexao_bd_mysql/conexao_bd_mysql.php");

// Recebendo dados digitados da página alterar_cadastro_aluno_form.php (Via POST)
$codigo_aluno_dg = $_POST['txt_codigo_aluno'];
$nome_foto_aluno_dg = $_POST['txt_nome_foto_aluno'];

$nome_dg = $_POST['txt_nome'];
$endereco_dg = $_POST['txt_endereco'];
$telefone_dg = $_POST['txt_telefone'];
$celular_dg = $_POST['txt_celular'];
$email_dg = $_POST['txt_email'];
$data_nascimento_dg = $_POST['txt_data_nascimento'];
$rg_dg = $_POST['txt_rg'];
$cpf_dg = $_POST['txt_cpf'];
$cod_turma_dg = $_POST['txt_cod_turma'];


		// mantendo o nome atual da foto
   $novo_nome_img = $nome_foto_aluno_dg;

		//Código para pegar a extensão do arquivo
    $extensao_img = strtolower(substr($_FILES['txt_foto']['name'], -4)); 


if($extensao_img != null)
{

		//Código para pegar a extensão do arquivo
    $extensao_img = strtolower(substr($_FILES['txt_foto']['name'], -4)); 

	  //Código para define o novo nome da foto
 		$novo_nome_img = $nome_dg . "_" . rand(0, 999) . $extensao_img; 


    //define a pasta para onde enviaremos a nova foto
    $diretorio = "../img/fotos_alunos/"; 

		// Código para mover a imagem para a pasta escolhida do site
		move_uploaded_file($_FILES['txt_foto']['tmp_name'], $diretorio . $novo_nome_img ); 

/* Código para apagar arquivo de uma pasta
@unlink = Não mostra a mensagem de erro
unlink = Sem o @ mostra a mensagem de erro
*/
@unlink($diretorio . $nome_foto_aluno_dg);

}


//Script sql para gravar na tabela do banco de dados MySql e MariaDB

$script_sql = "update tb_alunos set 
alu_nome = '$nome_dg',
alu_endereco = '$endereco_dg', 
alu_telefone = '$telefone_dg', 
alu_celular = '$celular_dg',
alu_email = '$email_dg',
alu_data_nascimento = '$data_nascimento_dg',
alu_rg = '$rg_dg',
alu_cpf = '$cpf_dg',
alu_cod_turma = '$cod_turma_dg',
alu_foto = '$novo_nome_img'
where alu_codigo = $codigo_aluno_dg;";




//Comando sql para executar a gravação na tabela do banco de dados MySql e MariaDB

if(mysqli_query($conexao_servidor_bd, $script_sql))
{

	echo "<h1 class='alert alert-secondary' role='alert' style='text-align: center; padding: 50px;'>
	Cadastro de aluno alterado com sucesso..</h1>"; 


 echo"<meta http-equiv='refresh' content='2;url=pg_principal.php'> ";

}
else
{
	echo "<div class='alert alert-danger' role='alert' style='text-align: center;' >
	<h1  style='padding: 50px;'>Falha na alteração do cadastro de aluno..</h1> 
	<b><h3>Descrição do erro:</b> Houve um erro na gravação de dados na tabela.</h3>
    <h2><a href='pg_principal.php' class='btn btn-outline-dark'>Voltar</a></h2> </div>"; 


}




?>
</body>
</html>