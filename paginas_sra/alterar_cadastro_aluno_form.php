<?php
			       
$cod_aluno =  $_POST['txt_cod_selecionado']; 
$nome_aluno =  $_POST['txt_nome'];
$endereco_aluno = $_POST['txt_endereco'];
$telefone_aluno = $_POST['txt_telefone'];
$celular_aluno =  $_POST['txt_celular'];
$email_aluno = $_POST['txt_email'];
$data_nascimento_aluno = $_POST['txt_data_nascimento'];
$rg_aluno = $_POST['txt_rg'];
$cpf_aluno = $_POST['txt_cpf'];
$cod_turma_aluno = $_POST['txt_cod_turma'];
$endereco_foto_aluno = $_POST['txt_end_foto'];

//	echo"<br>   <img src='img/foto_aluno/" . $_POST['txt_end_foto'] . "'>" ;

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SRA - Alteração de cadastro de Aluno</title>

<!-- Importação do BootStrap - CSS e JavaScript -->
<link href="../css_js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../css_js/bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="../css_js/css/estilo_form_cad_aluno.css">

</head>
<body>
<header class="alert alert-secondary" role="alert">
<nav>
	<a href="form_alterar_apagar_registro_aluno.php" class="btn btn-outline-dark"><b>Voltar</b></a>
</nav>

	<h1 align="center">Formulário de Alteração de Cadastro de aluno</h1>

</header>


<div id="div_form">

<fieldset style="height: 380px;">



<form method="POST" action="alterar_cadastro_aluno_bd.php" style="width: 650px; padding: 20px;" enctype="multipart/form-data">

<input type="hidden" name="txt_codigo_aluno" value="<?php echo $cod_aluno; ?>">
<input type="hidden" name="txt_nome_foto_aluno" value="<?php echo $endereco_foto_aluno; ?>">


	<small>Nome</small> <br> 
<input type="text" name="txt_nome" autofocus="" required size="80px" 
value="<?php echo "$nome_aluno"; ?>">
 <br>

	<small>Endereço</small> <br>
<input type="text" name="txt_endereco" size="80px" value="<?php echo $endereco_aluno; ?>"> <br>

	<small>Telefone</small> <br>
<input type="text" name="txt_telefone" value="<?php echo $telefone_aluno; ?>">


<div style="position: relative; top: -50px; margin-left: 440px;">

	<small>Celular</small> <br>
	<input type="text" name="txt_celular" value="<?php echo $celular_aluno; ?>"> <br>
</div>

<div style="position: relative; top: -45px;">
	<small>E-mail</small> <br>
<input type="text" name="txt_email" size="80px" value="<?php echo $email_aluno; ?>"> <br>

	<small>Data de nascimento</small> <br>
<input type="date" name="txt_data_nascimento" value="<?php echo $data_nascimento_aluno; ?>">

<div style="position: relative; top: -55px; margin-left: 200px;">
	<small>RG</small> <br>
	<input type="text" name="txt_rg" value="<?php echo $rg_aluno; ?>"> <br>
</div>

<div style="position: relative; top: -110px; margin-left: 440px;">
	<small>CPF</small> <br>
	<input type="text" name="txt_cpf" value="<?php echo $cpf_aluno; ?>" > <br>
</div>

</div>

<div style="position: relative; top: -145px;">
	<small>Código da turma</small> <br>
<input type="number" name="txt_cod_turma" value="<?php echo $cod_turma_aluno; ?>">
</div>
</fieldset> 

<fieldset style="text-align: center;">
	<small>Escolha a foto:</small>

	<input type="file" name="txt_foto" accept="image/png, image/gif, image/jpeg" 
	id="txt_foto_selecionada">
	<hr>

	 <img src="../img/fotos_alunos/<?php echo $endereco_foto_aluno ?>" id="img_selecionada" alt="Sem foto"
	 style="width: 200px; height: 220px; border: solid 2px; border-radius: 100%;">

</fieldset>

<fieldset style="text-align: center;">

			<input type="submit" name="btn_salvar" value="Salvar alteração" class="btn btn-success">
			
</fieldset>
</form>

</div>


<script type="text/javascript">
	
	 function Trocar_Foto()
	 {
			var novo_arquivo = new FileReader();
			novo_arquivo.onload = function(e){document.getElementById("img_selecionada").src = e.target.result; 
		};
			novo_arquivo.readAsDataURL(this.files[0]);
	 }
	 
	 document.getElementById("txt_foto_selecionada").addEventListener("change", Trocar_Foto, false);



</script>

</body>
</html>