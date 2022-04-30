<?php
    include("conexao.php");
   
    $nome= $_POST['nome'];
    $usuario= $_POST['cpf'];
    $email= $_POST['email'];
    $telefone= $_POST['telefone'];
    $sexo= $_POST['genero'];
    $data_nasc= $_POST['data_nasc'];
    $endereco= $_POST['endereco'];
    $numero= $_POST['numero'];
    $cep= $_POST['cep'];
    $bairro= $_POST['bairro'];
    $cidade= $_POST['cidade'];
    $estado= $_POST['estado'];
    

    $sql = "INSERT INTO dadoscliente (nome, idcpf, email, telefone, sexo, data_nasc, endereco, numero, cep, bairro, cidade, estado) VALUES ('$nome', '$cpf', '$email', '$telefone', '$sexo', '$data_nasc','$endereco', '$numero','$cep','$bairro','$cidade','$estado')";
    

    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso"; 
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);

?>
