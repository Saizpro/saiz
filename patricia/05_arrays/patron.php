<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>preg_match</title> 
 
</head> 
<body> 


<?php
if(preg_match("%[a-zA-Z0-9_-]%", "ana")){
	echo "sigue el patron";
}else{
	echo"no sigue el patron";
}
?>
</body>
</html>