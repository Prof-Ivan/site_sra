<?php

	// Iniciar a sessão do PHP
	session_start();


if($_SESSION['usuario_validado'] == true)
    { include("carregar_pagina.php"); }
    else
    {	
        header("Location:index.php?erro_login=true"); 
        session_destroy();
    }

?>
