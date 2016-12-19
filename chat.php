<head>
<title>Chat</title>

</head>
<body>


	<?php 
	session_start();
	echo $_SESSION['ID'];
	echo $_SESSION['Password'];
	?>
	<input type="text" name="writr">
	<input type="submit" value="Write">
	<hr>
	<input type="submit" value="Refresh">
</body>
<html>
