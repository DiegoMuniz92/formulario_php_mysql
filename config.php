<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

  /*  if($conexao->connect_errno)
    {
        echo "erro";
    }
    else
    {
        echo "conexão efetuada com sucesso";
    }
        
    //<?php
   if(isset($_POST['submit']))
    {
        

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $datanascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, datanascimento, cidade, estado, endereco) VALUES ('$nome','$email','$telefone','$sexo','$datanascimento','$cidade','$estado','$endereco')");
       
    }
?>*/
?>