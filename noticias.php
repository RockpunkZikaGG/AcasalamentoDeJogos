<div class="container noticias">
    <?php
        include('configs.php');
        if(isset($_COOKIE["CDJ_ADM"]) and $_COOKIE["CDJ_ADM"]!=""){
            echo '
                <div class="EditAmd">
                    <form action="?page=Confirm2" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td><p>Nome:</p></td><td><input type="text" name="nome"/></td>
                            </tr>
                            <tr>
                                <td><p>Título:</p></td><td><input type="text" name="titulo"/></td>
                            </tr>
                            <tr>
                                <td><p>Descrição:</p></td><td><input type="text" name="descricao"/></td>
                            </tr>
                            <tr>
                                <td><p>Foto:</p></td><td><input id="inpFoto" class="inpFile" type="file" name="foto" /><label class="lbFoto" for="inpFoto">SELECIONE UMA FOTO</label></td>
                            </tr>
                        </table>
                        <div class="buttons">
                            <input class="btn" type="submit" name="opt" value="Incluir" />
                            <input class="btn" type="reset" name="opt" value="Limpar"/>
                        </div>
                    </form>
                </div>
            ';
        }
        if ($result = mysqli_query($conn, 'SELECT * FROM noticia')) {
            $row = mysqli_num_rows($result);
            if(mysqli_num_rows($result)>0){
                while($row = $result->fetch_assoc()) {
                    echo '
                        <div>
                                    
                        </div>
                    ';
                }
            }else{
                echo '<p class="err">Nosso plano de ficarmos ricos e famosos, ainda não está concluído.</p><p class="err">Volte outro dia pra ver se concluímos essa missão!</p>';
            }
        }else{
            echo '<p>Perdemos os Jogos!</p><p>Socorro!</p>';
        }
            
        mysqli_free_result($result);
        mysqli_close($conn);
    ?>
</div>