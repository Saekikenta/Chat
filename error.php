<head>
 <title>Chat-Error 001</title>
</head>
<body>
<?php 
	session_start();
	//echo $_SESSION['ID'];
	//echo $_SESSION['Password'];
	echo $_SESSION['Errorcode'];
	?>
<table>
<div style="margin-top : 20px">
<div style="margin-left : 40px">
	<tr><td><h1>Chat<h1/></tr></td>
	
	<?php
	//Not NameorNot Password
	if($_SESSION['Errorcode']=='Errorcode1')
	{
	echo "plese input your id and password";
	}
	
	else if($_SESSION['Errorcode']=='Errorcode2')
	{
	echo "<a>Not found id.</a>";
	}
	
	else if($_SESSION['Errorcode']=='Errorcode3')
	{
	echo "<a>ID or Password is incorrect.</a>";
	}
	?>
	
	<tr><td>
	<h2><FONT color="#ff0000">Error</FONT></h2>
	<a>Plese input your id and password</a>
	</td></tr>
	<tr><td>
	<form action="chatlogin.php">
    <input type="submit" value="back" >
    </td></tr>
    
    </form>
    
    </table>
    
</body>
