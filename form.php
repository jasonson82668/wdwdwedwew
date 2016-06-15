<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="form.php" method="post">
			<input type="num" name="a" pattern = '[0-9]'> + <input type="num" name="b">
			<input type="submit" value="=">	
		</form>
		<?php 
			if (isset($_POST['a']) && isset($_POST['b'])) {
				echo ($_POST['a']+$_POST['b']);
			}else{
				echo '?';
			}
			
		 ?>
	</body>
</html>