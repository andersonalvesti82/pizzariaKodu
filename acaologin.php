<?php
   include('conexaologin.php');
    
    $usuario= $_POST['login'];
    $senha=md5($_POST['txtsenha']);
   
   
   $login= mysqli_query($conexao,"SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'");
    
   if(mysqli_num_rows($login)!=0)
   {
    echo "<script>
      
    alert('acesso concedido!');
    window.location.href='http://localhost/pizzariacodu/telaprincipal.html';
    </script> ";
   }
    else 
    {
        echo "<script>

        alert('Falha ao acessar. Entre em contato com o administrado do sistema e realize seu cadastro');
    window.location.href='http://localhost/pizzariacodu/teladelogin.html';
    </script> ";
   }

     
?>