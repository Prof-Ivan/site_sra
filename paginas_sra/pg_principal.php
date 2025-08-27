<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SRA - Sistema de Registros de Alunos</title>

<!-- Importação do BootStrap - CSS e JavaScript -->
  <link href="../css_js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../css_js/bootstrap/js/bootstrap.min.js"></script>
  
      <!-- Código para importar o CSS-->
     <link rel="stylesheet" href="../css_js/css/estilo_principal.css">

</head>
<body>
<header class="alert alert-secondary">
	<h1 style="font-style: italic; text-shadow: 2px -1px 1px rgb(19, 255, 161); text-align: center;  
	font-family: 'Brush Script MT';">
	SRA<br>Sistema de Registros de Alunos</h1>
    <hr>
<nav style="text-align: center; text-shadow: 2px -1px 1px rgb(19, 255, 161);"> 

	<a href="form_cadastro_aluno.php" class="btn btn-outline-dark form_menu pos_menu" id="pos_menu">
	<img src="../img/icones_menu/icone_cadastro.png" id="menu_img"> <br>		
		<b>Cadastro de aluno</b></a>	


	<a href="form_consultas_alunos.php" class="btn btn-outline-dark form_menu" id="pos_menu">
	 <img src="../img/icones_menu/icone_consulta.png" width="50px" height="50px"> <br>	
		<b>Consultas de alunos</b></a>
	<a href="form_relatorio_alunos.php" class="btn btn-outline-dark form_menu" id="pos_menu">
	<img src="../img/icones_menu/icone_rel.png" width="50p x" height="50px"> <br>	
		<b>Relatório de alunos</b></a>
	<a href="form_alterar_apagar_registro_aluno.php" class="btn btn-outline-dark form_menu" id="pos_menu">
	<img src="../img/icones_menu/icone_opcao.png" width="50px" height="50px"> <br>	
		<b>Alterar ou Apagar registros de alunos</b></a>
	<a href="../conexao_bd_mysql/teste_conexao_bd_mysql.php" class="btn btn-outline-dark form_menu" id="pos_menu">
	<img src="../img/icones_menu/icone_bd.png" width="50px" height="50px"> <br>	
		<b>Teste de conexão</b></a>

	<a href="../validar_usuario.php?sair_sistema=true" 
	target="_parent" class="btn btn-outline-dark form_menu" id="pos_menu">
	<img src="../img/icones_menu/icone_sair.png" width="50px" height="50px"> <br>	
		<b>Sair</b></a>

</nav>

</header>

<div style="position: relative; margin: auto; width: 300px; top: 20px;">
	<img src="../img/logotipo_sra.png" style="width: 300px; height: 300px;">
</div>
<footer style="text-align: center; padding: 20px;">
	<h5>Junho de 2025</h5>
</footer>

</body>
</html>


