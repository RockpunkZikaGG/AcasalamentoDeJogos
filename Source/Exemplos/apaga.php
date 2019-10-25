<html>
<body>
<?php
	//setcookie("usuario");
    
	echo "Cookie apagado!!";
	setcookie("usuario", "", time() - 120);

?>
</body>
</html>