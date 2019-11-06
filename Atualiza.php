<div class="container">
    <h2>Atualizando...<br/>Se sua foto não aparecer recarregue a pagina!</h2>
</div>
<?php
            include('configs.php');
            $nome=isset($_POST['nome'])?$_POST['nome']:null;
            $nomeAnt=isset($_POST['nomeAnt'])?$_POST['nomeAnt']:null;
            $id=isset($_POST['id'])?$_POST['id']:null;
            $descricao=isset($_POST['descricao'])?$_POST['descricao']:null;            
            $foto=isset($_FILES['foto']['name'])? $_FILES['foto']['name']:null;
            mysqli_free_result($result);
            if(isset($_POST['opt']) && $_POST['opt']=="Atualizar"){
                $grava=mysqli_query($conn,"UPDATE jogo SET descricao='".$descricao."', nome='".$nome  ."' where idjg=".$id."");
                if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0){
                     if(is_uploaded_file($_FILES['foto']['tmp_name'])){  
                            if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'Source/Images/Jogos/'.$id.'.png')){  
                                echo "Houve um erro ao gravar arquivo na pasta de destino!";  
                            }
                    } 
                }
                mysqli_free_result($grava);
                mysqli_close($conn);
            }else{
                echo 'Errooo!';
            }
            echo "<meta http-equiv=refresh content='3;URL=?page=Jogos'>";
?>