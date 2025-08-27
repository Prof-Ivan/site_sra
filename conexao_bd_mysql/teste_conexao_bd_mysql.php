<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    
	<!-- Código para atualizar a página automático -->
	<meta http-equiv='refresh' content='10;url=teste_conexao_bd_mysql.php'>

	<title>Teste de conexão com BD MySql</title>

<!-- Importação do BootStrap - CSS e JavaScript -->
  <link href="../css_js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../css_js/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<header class="alert alert-secondary">
    <nav>
    <a href="#" class="btn btn-outline-dark" onclick="history.back();return false;">
    <b>Voltar</b></a>
    <a href="teste_conexao_bd_mysql.php" class="btn btn-outline-success"><b>Atualizar</b></a>
    </nav>

        <h1 align="center">Teste de conexão com BD MySql</h1>

        <!-- Data e hora da atualização da página -->
<script>
    var data_hora_atual = new Date();
    var formato_data_hora = new  Intl.DateTimeFormat('pt-BR', {
    dateStyle: 'long', 
    timeStyle: 'long',
    timeZone: 'America/Sao_Paulo',
    });

document.write("<h6 align='center'>" + formato_data_hora.format(data_hora_atual) + "</h6>");
</script>

</header>
<body>
<div class="alert alert-dark">

<?php

include('conexao_bd_mysql.php');

// Teste de conexão com o servidor -----------------------------------------
if($conexao = mysqli_connect($local_servidor, $usuario, $senha))
{
 echo  "<h3 align=center class='btn btn-success'>Servidor conectado com sucesso</h3><p>";
}
else
{
	echo "<h3 align=center>Erro: Servidor não está conectado</h3>";
	echo "<h4 align=center>Verifique os seguintes itens: Xampp, local do servidor, porta do servidor, usuário, senha</h4>";
}

// Teste de conexão com o banco de dados -----------------------------------------
if($conexao = mysqli_connect($local_servidor, $usuario, $senha, $bd_procurado))
{
 echo  "<h3 align=center class='btn btn-success'>Banco de dados conectado com sucesso</h3><p>";
}
else
{
	echo "<h3 align=center>Erro: Banco de dados não está conectado</h3>";
	echo "<h4 align=center>Verifique se o BD foi criado e depois o nome do BD no servidor e usuário do BD e senha do BD</h4>";
}
?>

</div>
</body>
</html>