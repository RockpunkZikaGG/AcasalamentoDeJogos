<html>
<body>
<?php
    if(isset($_COOKIE["usuario"])){
        echo "Usuario ".$_COOKIE["usuario"]." conectado!!";
        echo "<a href='apaga.php'>Fazer logoff?</a>";

    }
    else{
        echo"Usuário não está logado!!<br>";
        echo"<a href='form_cookie.html'>Página login!!</a>";

    }
?>
</body>
</html>