<html>
<body>
<?php
	
session_start();
if($_GET['logoff']==1){
	session_destroy();
	echo"Usuário fez logoff!";
}
?>
</body>
</html>