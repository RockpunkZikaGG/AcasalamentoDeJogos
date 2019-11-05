<?php
    include('configs.php');
    mysqli_query($conn, 'DELETE FROM jogo WHERE idjg='.$_GET['id'].';');
    mysqli_close($conn);
    header('Location: index.php?page=Jogos');
?>