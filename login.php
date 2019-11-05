<div class="container login">
<fieldset><legend>Login Administrador CDJ</legend><form action="" method="post" enctype="multipart/form-data">
<p>Email:<input type="email" name="email" maxlenght=100 size=100 placeholder="E-mail"/></p>
<p>Senha:<input type="password" name="senha" maxlenght=20 size=20 placeholder="Senha"/></p>
<input type="submit" name="Logar" value="Logar" />
</fieldset></form>
<?php
    if(isset($_SESSION['errado'])):
?>
    <p>Administrador inválido</p>
<?php
    endif;
    unset($_SESSION['errado']);
?>    
<?php
session_start();
    include('configs.php');  
    if(empty($_POST['email'])||empty($_POST['senha'])){
        header('Location: login.php');
        exit();
    } 

    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $senha=mysqli_real_escape_string($conn,$_POST['senha']);
    
$query = "SELECT nome FROM adm WHERE emial = '{$email}' AND senha = '{$senha}'";
$result = mysqli_query($conn,$query); 
$row = mysqli_num_rows($result);
if($row==1){
    $_SESSION['email']= $email;
    header('Location: home.php');
    exit();
}else{
    $_SESSION['errado'] = true;
    header('Location: login.php');
    exit();
}
        
        mysqli_close($conn);
?>
 </div>
