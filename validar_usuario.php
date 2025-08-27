<?php

$usuario = strtoupper($_POST['txt_usuario']);
$senha = strtoupper($_POST['txt_senha']);

$situacao_usuario = false;

// Validando usuários do sistema
if($usuario == "ADM" and $senha == "123")
{ $situacao_usuario = true; }
    else
if($usuario == "GERENTE" and $senha == "200")
{ $situacao_usuario = true; }
    else
if($usuario == "FUNC" and $senha == "2000")
{ $situacao_usuario = true; }
    else
{	
    header("Location:index.php?erro_login=true");
     session_destroy();
    
     if (isset($_COOKIE)) {
        foreach ($_COOKIE as $name => $value) {
            setcookie($name, '', time() - 3600, '/'); // Define a data de expiração para uma hora no passado, e '/' para o caminho da URL
        }
    }
    
}


// Abrindo página inicial do sistema após a validação
if($situacao_usuario == true)
{
    // Inicia a sessão do PHP
	session_start();
	$_SESSION['usuario_validado'] = true;

    header("Location:pg_site.php");
  
}

    $sair_sistema = false;

    if(sair_sistema == true)
    {
            if (isset($_COOKIE)) 
            {
                foreach ($_COOKIE as $name => $value) 
                {
                    setcookie($name, '', time() - 3600, '/'); 
                    // Define a data de expiração para uma hora no passado, e '/' para o caminho da URL
                }
            }
        header("Location:pg_site.php");
    }

?>

