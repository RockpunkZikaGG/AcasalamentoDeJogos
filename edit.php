<div class="container edit">
    <div class="adm">
        <?php
            include('configs.php');
            if ($result = mysqli_query($conn, "SELECT * FROM jogo WHERE idjg=".$_GET['id'])) {
                    $row = mysqli_num_rows($result);
                    if($row>0){
                        while($row = $result->fetch_assoc()) {
                    echo '<form action="?page=Atualiza" method="post" enctype="multipart/form-data">
                        <input type="text" name="id" value="'.$_GET['id'].'" style="display: none"/>
                        <input type="text" name="nomeAnt" value="'.$row['nome'].'" style="display: none"/>
                        <table>
                            <tr>
                                <td><p>Nome:</p></td><td><input type="text" name="nome" value="'.$row['nome'].'"/></td>
                            </tr>
                            <tr>
                                <td><p>Descrição:</p></td><td><input type="text" name="descricao" value="'.$row['descricao'].'"/></td>
                            </tr>
                            <tr>
                                <td><p>Foto:</p></td><td><input id="inpFoto" class="inpFile" type="file" name="foto" /><label class="lbFoto" for="inpFoto">SELECIONE UMA FOTO</label></td>
                            </tr>
                        </table>
                        <div class="buttons">
                            <input class="btn" type="submit" name="opt" value="Atualizar" />
                            <input class="btn" type="reset" name="opt" value="Limpar"/>
                        </div>
                    </form>';
                    }
                }else{
                    echo 'Falha!';
                }
            }
            mysqli_free_result($result);
            mysqli_close($conn);
        ?>
    </div>
</div>