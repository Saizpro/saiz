<?php
function cabecera ($title)
{
echo <<<CABECERA
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset=UTF-8" />
<link rel="stylesheet" href="styles.css">
<title>$title</title>
</head>
CABECERA;
}
?>
