<!-- Páginda de Formulário de cadastro de alunos - Out/2024 -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SRA - Cadastro de Aluno</title>

<!-- Importação do BootStrap - CSS e JavaScript -->
  <link href="../css_js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../css_js/bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="../css_js/css/estilo_form_cad_aluno.css">

</head>
<body>
<header class="alert alert-secondary" role="alert">
<nav>
<button class="btn btn-outline-dark" 
onclick="parent.iframe_carregar_pg.location.href = 'pg_principal.php';">Voltar</button>
</nav>
	<h1 align="center">Formulário de Cadastro de aluno</h1>
</header>

<div id="div_form">

<fieldset style="height: 380px;">

<form method="POST" action="salvar_cadastro_aluno_bd.php" style="width: 650px; padding: 20px;" enctype="multipart/form-data">

	<small>Nome</small> <br>
<input type="text" name="txt_nome"  placeholder="Nome completo" autofocus=""
 required size="80px"> <br>
	<small>Endereço</small> <br>
<input type="text" name="txt_endereco" placeholder="Rua / Av: Tal, 000" size="80px"> <br>
	<small>Telefone</small> <br>
<input type="text" name="txt_telefone" placeholder="Telefone Ex:(00) 0000-0000">

<div style="position: relative; top: -50px; margin-left: 440px;">
	<small>Celular</small> <br>
	<input type="text" name="txt_celular" placeholder="Celular Ex:(00) 00000-0000"> <br>
</div>

<div style="position: relative; top: -45px;">
	<small>E-mail</small> <br>
<input type="text" name="txt_email" placeholder="emailteste@gmail.com" size="80px"> <br>

	<small>Data de nascimento</small> <br>
<input type="date" name="txt_data_nascimento">

<div style="position: relative; top: -55px; margin-left: 200px;">
	<small>RG</small> <br>
	<input type="text" name="txt_rg" placeholder="00000000-0"> <br>
</div>

<div style="position: relative; top: -110px; margin-left: 440px;">
	<small>CPF</small> <br>
	<input type="text" name="txt_cpf" placeholder="000.000.000-00"> <br>
</div>
</div>

<div style="position: relative; top: -145px;">
	<small>Código da turma</small> <br>
<input type="number" name="txt_cod_turma" placeholder="0000">
</div>
</fieldset>

<fieldset style="text-align: center;">
	<label for="txt_foto">Escolha a foto:</label>

	<input type="file" name="txt_foto" accept="image/png, image/gif, image/jpeg" 
	id="txt_foto_selecionada">
	<hr>

	 <img src="../img/foto_padrao.png" id="img_selecionada" 
	 style="width: 200px; height: 220px; border: solid 2px; border-radius: 100%;">
</fieldset>

<fieldset style="text-align: center;">
	<input type="submit" name="btn_salvar" value="Salvar" class="btn btn-outline-success">
	<input type="reset" name="btn_limpar" value="limpar" class="btn btn-outline-warning"
	 onclick="javascript:limpar_foto();">
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


	 function limpar_foto()
	 {document.getElementById("img_selecionada").src = "../img/foto_padrao.png";}

</script>

    </body>
    </html>