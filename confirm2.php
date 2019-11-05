<div class="container">
    <h2>Registrado com sucesso!</h2>
</div>
<?php
            $titulo=isset($_POST['titulo'])?$_POST['titulo']:null;
            $descricao=isset($_POST['descricao'])?$_POST['descricao']:null;
            $conteudo=isset($_POST['conteudo'])?$_POST['conteudo']:null;          
            $foto=isset($_FILES['foto']['name'])? $_FILES['foto']['name']:null;
            if(isset($_POST['opt']) && $_POST['opt']=="Incluir"){
                include('configs.php'); 
                $grava=mysqli_query($conn,"insert into noticia
                (idnot, titulo, descricao, conteudo) values ( null,'$titulo','$descricao', '$conteudo')");
                if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0){
                     if(is_uploaded_file($_FILES['foto']['tmp_name'])){  
                             
                          // Verifica se o diretório de destino existe, senão existir cria o diretório  
                          if(!file_exists("Source/Images/Noticicas")){
                               mkdir("Source/Images/Noticias");  
                          }

                          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
                          if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'Source/Images/Noticias/'.$titulo.'.png')){  
                               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
                          }
                    } 
                }
                mysqli_free_result($grava);
                mysqli_close($conn);
            }
            echo "<meta http-equiv=refresh content='3;URL=?page=Noticias'>"
?>