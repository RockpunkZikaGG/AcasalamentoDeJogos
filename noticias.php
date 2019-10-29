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
                echo '<p>Não achamos os jogos, mas estamos procurando no Jubileu.</p><p>Recarregue a paguina para ver se ja encontramos!</p>';
            }
        }else{
            echo '<p>Perdemos os Jogos!</p><p>Socorro!</p>';
        }
            
        mysqli_free_result($result);
        mysqli_close($conn);
    ?>
</div>