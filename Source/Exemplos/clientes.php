<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
<title>Cliente</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data">
Nome:<input type="text" name="nome" /><br />
Email:<input type="text" name="email" /><br />
Cidade:<input type="text" name="cidade" /><br />
Foto:<input type="file" name="foto" /><br />
<input type="submit" name="Incluir" value="Incluir" />
<input type="reset" name="Limpar" value="Limpar"/>

<input type="submit" name="Mostrar" value="Mostrar" />
<BR>
Registro a ser excluído:<input type="text" name="registro"  value="registro"/>
<input type="submit" name="Excluir" value="Excluir">
</form>
<?php
    
 
    $nome=isset($_POST['nome'])?$_POST['nome']:null;
    
    $email=isset($_POST['email'])?$_POST['email']:null;
    
    $cidade=isset($_POST['cidade'])?$_POST['cidade']:null;
    
    $foto=isset($_FILES['foto']['name'])? $_FILES['foto']['name']:null;
    
    
    include('conexao.php');
    //print_r($_FILES);    
    
    if(isset($_POST['Incluir'])){
        //código para incluir
        $db=mysqli_select_db($conexao,$banco);
        $grava=mysqli_query($conexao,"insert 
        into clientes(nome,email,cidade,foto)values('$nome',
        '$email','$cidade','$foto')");
        if($grava==true){
            echo"Cadastro realizado com sucesso!!";
            move_uploaded_file($_FILES['foto']['tmp_name'],
            "uploads/".$_FILES['foto']['name']);
          
        }
        else{
            echo "Impossível incluir!!";
        }
                                
          
    }
    if(isset($_POST['Mostrar'])){
        //código para mostrar
    }
    if(isset($_POST['Excluir'])){
        //código para excluir
        // precisamos de um id
        $id=$_POST['registro'];
        $db=mysqli_select_db($conexao,$banco);
        $resultado = mysqli_query ($conexao,"select * from clientes where codigo=$id");
        if ($resultado==false) {
             echo "Erro na query";
             exit;
         }
        if (mysqli_num_rows($resultado) != 0) {
             mysqli_query ($conexao,"delete from clientes where codigo=$id");
             echo "<script>alert(\"Registro excluído com sucesso!\")
             </script>";
         }
         else {
             echo "<script>alert(\"Registro inexistente!\")</script>";
         } 
   
    }

    
?>
</body>
</html>
