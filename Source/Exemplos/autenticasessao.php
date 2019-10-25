<html>
<body>
<?php
    session_start();
    $u=isset($_SESSION['usuario'])?$_SESSION['usuario']:null;
   if ($u!= ""){
        echo "Você está logado como ";
        echo $_SESSION['usuario'];
        echo "<br/>";
        echo"<a href='apagasessao.php?logoff=1'>Deseja fazer logoff?</a>";
   }
    else{
        echo"Usuário não está logado!!<br>";
        echo"<a href='form_sessao.html'>Página login!!</a>";

    }
?>
</body>
</html>