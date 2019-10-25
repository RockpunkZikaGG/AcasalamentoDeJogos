<div class="container sobre">
    <div class="rowSobre descricao">
        <div class='descricaoClube'><p>O clube de jogos do IFSul campus Sapucaia do Sul foi uma ideia que surgiu, em 2018, 
        entre amigos que gostavam muito do assunto e gostariam de criar um espaço para aliviar 
        o estresse e a pressão do dia a dia de maneira que também exercitasse seus cérebros com 
        pensamento rápido, criatividade, estragégia e lógica para ajudar nos seus estudos, porém 
        não conseguiram apoio para criá-lo até que no ano de 2019 quando entraram em contato pela 
        primeira vez com a pedagoga do instituto, Aline Castro, que apoiou a ideia e ajudou a concretizá-la.</p>
        <p>O clube começou com poucos membros e sem acervo próprio, mas isso não desmotivou ninguém 
        os membros traziam alguns jogos que tinham em casa e a diversão acontecia, então perto da 
        metade do ano foi escrito o projeto de extensão Entre Cartas e Peças: aliando lazer e aprendizagens, 
        que abria o clube para o público infanto-juvenil das escolas públicas da região e com isso foi 
        garantido ao clube sua verba e jogos de tabuleiros atuais para constituir seu <a href="?page=Jogos">acervo</a> inicial.</p>
        <p>Venha nos conhecer!!!</p><br/>
        <p>Local:<br/>Av. Copacabana - Piratini, Sapucaia do Sul - RS, 93216-120<br/><br/>Sala P5.</p>
        </div>
        <img class='imagem' src="./Source/Images/qs2.jpg">
    </div>
    <div class="rowSobre tempo">
            <?php
                include('configs.php');
                if ($result = mysqli_query($conn, 'SELECT * FROM horarios WHERE tipo="cdj"')) {
                    $row = mysqli_num_rows($result);
                    if(mysqli_num_rows($result)>0){
                        echo '
                        <h2>CDJ IFSul</h2>
                        <table class="horarios">
                        <tr>
                            <th>Dia da Semana</th>
                            <th>Horário</th>
                        </tr>
                        ';
                        while($row = $result->fetch_assoc()) {
                            echo '
                                <tr>
                                    <td class = "tabela">'.$row['dia'].'</td>
                                    <td class = "tabela">'.$row['hora'].'</td>
                                </tr>
                            ';
                        }
                        echo '</table>';
                    }else{
                        echo '<p>Estamos em uma viagem no tempo, podemos nos atrasar um pouco!</p>';
                    }
                }else{
                    echo '<p>O mundo acabou não se tem mais noção de tempo!</p>';
                }
                    
                mysqli_free_result($result);
                mysqli_close($conn);
            ?>
    </div>
</div>