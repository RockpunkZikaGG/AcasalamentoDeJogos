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
		header('Location: index.php?page=Noticias');
	}else{
		$_SESSION['errado'] = true;
		header('Location: index.php?page=Home');
	}
        
        mysqli_close($conn);
		
	if(isset($_SESSION['errado'])):
		echo '<p>Administrador inválido</p>';
    endif;	
	
?>