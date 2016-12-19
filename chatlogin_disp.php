<?php
//print $_REQUEST['Name'];
		//$name="$_REQUEST['Name']";
		
		//データベースにアクセス
		$dsn = 'mysql:dbname=gacha;host=127.0.0.1';
		$user= 'root';
		$pw = 'H@chiouji1';
		
		$sql = 'SELECT * FROM Monster';
		$dbh = new PDO($dsn, $user, $pw);
		
		$sth = $dbh->prepare($sql);
		$sth->execute();
//$chara = [];
//while(($buff = $sth->fetch()) !== false){
	//$chara[] = $buff;
	//}
	
	$_Errocode1=1;
	$_Errocode2=2;
	$_Errocode3=3;

		//どっちかが未入力
if(($_REQUEST['ID']=="")||($_REQUEST['Password']==""))
	{
	//print("notname or notpassword");
	session_start();
		$_SESSION['ID'] = $_REQUEST['ID'];
		 $_SESSION['Errorcode']=$_Eroorcode1;
		header( "Location: error.php" ) ;
	}
	//入力されているが存在しない
	//else if($_)
	//{
	//print("notname or notpassword");
	//session_start();
	// $_SESSION['Errorcode']=$_Eroorcode2;
		//header( "Location: error.php" ) ;
	//}
	//PWが一致しない
	//else if()
	//{
	//print("Password is incorrect");
	//session_start();
	//$_SESSION['Errorcode']=$_Eroorcode3;
		//header( "Location: error.php" ) ;
	//}
	
	else
	{
	session_start();
		$_SESSION['ID'] = $_REQUEST['ID'];
		$_SESSION['Password'] = $_REQUEST['Password'];
		header("Location:chat.php");
	}
