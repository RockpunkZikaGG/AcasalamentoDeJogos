<html>
<body>
<?php
    session_start();
    $u=isset($_POST['usuario'])?$_POST['usuario']:null;
    $s=isset($_POST['senha'])?$_POST['senha']:null;
    if(isset($_POST["Enviar"])){
        if($u=="aluno" && $s=="12345"){
            $_SESSION["usuario"]=$u;
                      
            echo"Usuário criado!! ";
           
            echo"<a href='apagasessao.php?logoff=1'>Apagar sessão?</a>";
        }
        else{
            echo"Usuário incorreto!!";
            echo"<a href='form_sessao.html'>Voltar</a>";
        }
    }



?>
</body>
</html>