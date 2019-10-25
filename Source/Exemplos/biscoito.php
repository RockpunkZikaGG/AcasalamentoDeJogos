<html>
<body>
<?php
    $u=isset($_POST['usuario'])?$_POST['usuario']:null;
    $s=isset($_POST['senha'])?$_POST['senha']:null;
    if(isset($_POST["Enviar"])){
        if($u=="aluno" && $s=="12345"){
            setcookie("usuario",$u,time()+120);
            echo"Usuário criado!! ";
            echo $_COOKIE["usuario"];
            echo"<a href='apaga.php'>Apagar cookie?</a>";
        }
        else{
            echo"Usuário incorreto!!";
            echo"<a href='form_cookie.html'>Voltar</a>";
        }
    }



?>
</body>
</html>