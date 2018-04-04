<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="School">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Abdelaziz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdelaziz Elbaze MG1D</title>
</head>
<body>
<?php 
	// maak dit scipt werkend: zoek de fouten	
	
	include 'views/from.php';
	
	if (isset($_POST['sendContact']))
	{
		include 'views/response.php';
	}
?>
</body>
</html>
