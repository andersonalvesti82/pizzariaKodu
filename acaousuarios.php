<?php
    require_once('conexaologin.php');
    
    $usuario= $_POST['usuario'];
    $senha= md5($_POST['senha']);
    $nivel= $_POST['nivel'];
   
    

   $cadastrar= mysqli_query($conexao,"INSERT INTO usuarios (usuario,senha,nivel) VALUES ('$usuario', '$senha', '$nivel')");
    
   if($cadastrar==true)
   {
       
    echo "<script>
      
    alert('Usuário registrado com sucesso!');
    window.location.href='teladelogin.html';
    </script> ";  
   }
    else 
    {
        "<script>
      
        alert('Falha ao registrar!');
        window.location.href='teladelogin.html';
        </script> "; 
    }