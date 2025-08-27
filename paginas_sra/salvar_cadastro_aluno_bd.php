<!-- Salvar cadastro de alunos no BD - Maio/2025 -->

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

include("../conexao_bd_mysql/conexao_bd_mysql.php");

//Recebendo dados digitados da página form_cadastro_aluno.php (Via POST)
$nome_dg = $_POST['txt_nome'];
$endereco_dg = $_POST['txt_endereco'];
$telefone_dg = $_POST['txt_telefone'];
$celular_dg = $_POST['txt_celular'];
$email_dg = $_POST['txt_email'];
$data_nascimento_dg = $_POST['txt_data_nascimento'];
$rg_dg = $_POST['txt_rg'];
$cpf_dg = $_POST['txt_cpf'];
$cod_aluno_dg = $_POST['txt_cod_turma'];

if(isset($_FILES['txt_foto']))
{
    //Captura a extensao da foto
    $extensao = strtolower(substr($_FILES['txt_foto']['name'], -4));

    /* Código para define um número aleatório para a foto
     (Função RAND do PHP: Gera um número randômico) */
    $novo_nome_img = $nome_dg . "_" . rand(0, 999) . $extensao; 
 
    //Local do diretório de todas as fotos dos alunos
    $diretorio = "../img/fotos_alunos/"; 

    // Código para mover a foto para o novo dirtório
    move_uploaded_file($_FILES['txt_foto']['tmp_name'], $diretorio . $novo_nome_img ); 

    // Script em SQL para inserir os dados na tabela
    $script_sql_cadastrar_aluno = 
    "insert into tb_alunos (alu_nome, alu_endereco, alu_telefone, alu_celular, alu_email, alu_data_nascimento, alu_rg, alu_cpf, alu_cod_turma, alu_foto)
    values 
    ('$nome_dg','$endereco_dg', '$telefone_dg', '$celular_dg', '$email_dg', 
    '$data_nascimento_dg', '$rg_dg', '$cpf_dg', '$cod_aluno_dg', '$novo_nome_img'); ";

// Executa o cadastro no BD
 if(mysqli_query($conexao_servidor_bd, $script_sql_cadastrar_aluno))
    {   
        echo "<h1 class='alert alert-secondary' role='alert'
        style='text-align: center; padding: 50px;'>
        Cadastro de aluno realizado com sucesso..</h1>"; 

    // A página fica parada por 3 segundos 
    // depois volta para o cadastro de alunos
    echo "<meta http-equiv='refresh' content='3;url=form_cadastro_aluno.php'>";                
    } 
    else
    {
        echo" <div class='alert alert-danger' role='alert'
        style='text-align: center; padding: 50px;'>
		<h1 align='center'>Falha no cadastro de aluno</h1><hr><p>";

        $erro = mysqli_error($conexao_servidor_bd);
        
        echo "<b>Descrição do erro:
        </b> Houve um erro na gravação de dados na tabela com a seguinte descrição: $erro </div>" ;

        // A página fica parada por 10 segundos 
        // depois volta para o cadastro de alunos
        echo "<meta http-equiv='refresh' content='10;url=form_cadastro_aluno.php'>";
    }  
 
}

?>

</body>
</html>