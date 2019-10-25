<div class="container jogos">
<table>
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
                            <td class = "tabela"><img src="" alt=".."></td>
                            <td class = "tabela">'.$row['nome'].'</td>
                            <td class = "tabela">'.$row['descricao'].'</td>
                        </tr>
                    ';
                }
            }else{
                echo '<p>Não achamos os jogos, mas estamos procurando no Jubileu.</p><p>Recarregue a paguina para ver se ja encontramos!</p>';
            }
        }else{
            echo '<p>Não achamos os jogos, mas estamos procurando no Jubileu.</p><p>Recarregue a paguina para ver se ja encontramos!</p>';
        }
            
        mysqli_free_result($result);
        mysqli_close($conn);
    ?>
</table>
</div>