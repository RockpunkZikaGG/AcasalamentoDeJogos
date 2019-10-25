<?php
    include('header.php');

    $p = isset( $_GET["page"] ) ? $_GET["page"] : "Home";
    include($p.".php");
    
    include('footer.php');
?>