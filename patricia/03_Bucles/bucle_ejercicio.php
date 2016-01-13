<!DOCTYPE html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Utilizacion de for</title> 
</head> 
<body> 
<h1>Utilización de "continue"</h1>



<?php
for($i=1;$i<=10;$i++){
   if($i==5||$i==6||$i==7){
	continue;
}else{
	echo "<p>$i</p>";
}
}

?>
</form> 
</body> 
</html>