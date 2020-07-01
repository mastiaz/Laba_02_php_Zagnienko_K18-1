<?php 
if (!empty($_POST['back'])) {
	header("Location: Profiles/".strtolower($_SESSION['role']).".php");
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ERROR 403</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="error_403">
		<img class="error403" src="eror403.jpg" alt="error_403">
	</div>
</body>
</html>