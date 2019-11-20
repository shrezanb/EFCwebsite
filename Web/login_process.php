<?php ob_start();?>
<?php include('Header.php');?>
<?php



//$id= $_POST['id'];
$username= $_POST['username'];
$password = $_POST['password'];


$result= $user_act->CheckUserExists($username, $password);
$num= $db_database->countNum($result);

if($num>0){
    $data = $db_database->fetch($result);
	if($data['roles']=="admin"){


        $_SESSION['login_id'] = $data['id'];
        $_SESSION['login_name'] = $data['user_name'];
        $_SESSION['roles'] = $data['roles'];
        header('location:DashBoard.php');

	}
	else if($data['roles']=="user") {


        $_SESSION['login_id'] = $data['id'];
        $_SESSION['login_name'] = $data['user_name'];
        $_SESSION['roles'] = $data['roles'];

        header('location:Index.php');
    }
	}
	else
	{
        $cookie_name = "loginAttempts";
        $attempts = $_COOKIE['loginAttempts'] + 1;
        //cookie will be deleted after 5 mins
        setcookie($cookie_name, $attempts, time() + (60 * 5), "/");
        header('location:login.php?loginerr='.$attempts);
	}


?>


<?php ob_end_flush();?>

