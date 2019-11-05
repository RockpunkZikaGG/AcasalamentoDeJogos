<div class="container noticias">
    <?php
        include('configs.php');
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