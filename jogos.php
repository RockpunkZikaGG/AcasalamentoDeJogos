<div class="container jogos">
    <?php
        if(isset($_SESSION['email'])){
            echo '
                <div class="EditAmd">
                    <form action="?page=Confirm" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td><p>Nome:</p></td><td><input type="text" name="nome"/></td>
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
    ?>
<table class="lista">
    <?php
        include('configs.php');
        if ($result = mysqli_query($conn, 'SELECT * FROM jogo')) {
            $row = mysqli_num_rows($result);
            if(mysqli_num_rows($result)>0){
                echo '
                    <tr>
                        <th class = "tabela">Jogo</th>
                        <th class = "tabela">Nome</th>
                        <th class = "tabela">Descrição</th>
                    </tr>
                ';
                while($row = $result->fetch_assoc()) {
                    echo '
                        <tr>
                            <td class = "tabela imgTb"><img class="imgJogo" src="Source/Images/Jogos/'.$row["nome"].'.png" alt=".."></td>
                            <td class = "tabela">'.$row['nome'].'</td>
                            <td class = "tabela">'.$row['descricao'].'</td>
                        </tr>
                    ';
                }
            }else{
                echo '<p class="Inf">Não achamos os jogos, mas estamos procurando no Jubileu.</p><p class="Inf">Recarregue a paguina para ver se ja encontramos!</p>';
            }
        }else{
            echo '<p class="Inf">Perdemos os Jogos!</p><p class="Inf">Socorro!</p>';
        }
            
        mysqli_free_result($result);
        mysqli_close($conn);
    ?>
</table>
</div>