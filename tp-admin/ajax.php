<?php
include 'tp-includes/funciones.php';
$T = new TantraClass();
switch ($_GET['acc'])
{
	case 'taney_count':
	{
		$T->init_db('bill');
		$T->Exec("SELECT cashBalance FROM tblUserInfo WHERE UserId = '".$_GET['param1']."'");
		$a = $T->gArray();
		echo $a[0];
		$T->close();
	}
	break;
	case 'ban':
	{
		$T->init_db('login');
		$account = $_GET['param1'];
		$T->Exec("SELECT Activated FROM Account WHERE UserId = '$account'");
		$F = $T->gArray();
		if ($F[0])
		{	$T->Update("UPDATE account SET Activated = 0 WHERE UserId = '".$_GET['param1']."'");
			echo '&nbsp;False';
		}
		else
		{	$T->Update("UPDATE account SET Activated = 1 WHERE UserId = '".$_GET['param1']."'");
			echo '&nbsp;True';
		}
		$T->close();	
	}
	break;
	case 'block':
	{
		$T->init_db('login');
		$account = $_GET['param1'];
		$T->Exec("SELECT Blocked FROM Account WHERE UserId = '$account'");
		$F = $T->gArray();
		if ($F[0])
		{	$T->Update("UPDATE account SET Blocked = 0 WHERE UserId = '".$_GET['param1']."'");
			echo '&nbsp;False';
		}
		else
		{	$T->Update("UPDATE account SET Blocked = 1 WHERE UserId = '".$_GET['param1']."'");
			echo '&nbsp;True';
		}
		$T->close();	
	}
	break;
	case 'edit':
	{
		$T->init_db('login');
		switch($_GET['param1'])
		{
			case 'email':
			{
				$mail = $_GET['param2'];
				$user = $_GET['param3'];
				$T->Update("UPDATE account SET Email = '$mail' WHERE UserId = '$user'");
				echo $mail;
			}
			break;
			case 'pass':
			{
				$pass = $_GET['param2'];
				$user = $_GET['param3'];
				$T->Update("UPDATE account SET Password = '$pass' WHERE UserId = '$user'");
				echo $pass;
			}
			break;
			case 'key':
			{
				$key = $_GET['param2'];
				$user = $_GET['param3'];
				$T->Update("UPDATE account SET UserKey = '$key' WHERE UserId = '$user'");
				echo $key;
			}
			break;
		}
		$T->close();	
	}
	break;
}
$T = NULL;
?>