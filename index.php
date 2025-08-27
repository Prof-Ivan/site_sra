<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SRA - Login</title>

    <!-- Código para inserir o icone na página-->
    <link rel="icon" href="img/icone_sra.png" type="image/png">

    <!-- Código para importar o BootStrap-->
     <link rel="stylesheet" href="css_js/bootstrap/css/bootstrap.min.css">
     <script src="css_js/bootstrap/js/bootstrap.min.js"></script>
  
     <!-- Código para importar o CSS-->
     <link rel="stylesheet" href="css_js/css/estilo_index.css">

</head>
<body>
<header id="div_topo" class="alert alert-secondary"  
style="font-style: italic; text-shadow: 2px -1px 1px rgb(19, 255, 161); text-align: center; font-family: 'Brush Script MT';">
<h1>
	SRA<br>Sistema de Registros de Alunos</h1>
        <h3>3º DS - Etec Ermelinda</h3>
</header>   

<form method="post" id="form_login" action="validar_usuario.php" class="alert alert-secondary">
    <small>Usuário</small><br>
    <input type="text" name="txt_usuario" autofocus="" required="" autocomplete="off" class="form-control"> <br>
    <small>Senha</small><br>
    <input type="password" name="txt_senha" autocomplete="off" class="form-control"> 
    <br> <br>
    <input type="submit" value="Entrar" class="btn btn-outline-dark">	
    <input type="reset" value="Limpar" class="btn btn-outline-dark">	

<small id="txt_status_login" class="alert alert-danger" role="alert" 
style="display: none; width: 300px; position: relative; margin: auto; margin: 20px; ">
</small>

<hr> <h5>2025</h5>
<form>

<?php
if($_GET)
{
echo"
<script> 
    document.getElementById('txt_status_login').innerHTML = 'Erro na validação do Login';			
    document.getElementById('txt_status_login').style.display = 'block';
    document.getElementById('form_login').style.border = 'solid 5px';
    document.getElementById('form_login').style.borderColor = 'red';
</script>";
}
?>

<script>
    window.setInterval(function()
    { document.getElementById("txt_status_login").style.display = "none";
      document.getElementById('form_login').style.border = 'none';
    }, 2000);
</script>

</body>
</html>