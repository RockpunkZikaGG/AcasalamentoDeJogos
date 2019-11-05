<?php
    include('configs.php');
	session_start();	
	
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $senha=mysqli_real_escape_string($conn,$_POST['senha']);
    
	$query = "SELECT nome FROM adm WHERE email = '".$email."' AND senha = '".$senha."'";
	$result = mysqli_query($conn,$query); 
	$row = mysqli_num_rows($result);
	
	if($row>0){
		$_SESSION['email']= $email;
		echo "<meta http-equiv=refresh content='3;URL=?page=Home'>";
	}else{
		echo '<div class="container"><p>Administrador inválido</p></div>';
		echo "<meta http-equiv=refresh content='3;URL=?page=Login'>";
	}
    mysqli_close($conn);
	
?>