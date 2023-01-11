<?php 

session_start();

require_once('./database/conn.php');

if (isset($_POST['txtUsername']) && isset($_POST['txtPassword'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $user = validate($_POST['txtUsername']);
    $passwd = validate($_POST['txtPassword']);

    if (empty($user)) {
		header("Location: index.php?error=Username is required.");
	    exit();
	}else if(empty($passwd)){
        header("Location: index.php?error=Password is required.");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE username='$user' AND password='$passwd'";

		$result = mysqli_query($mysqli, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $user && $row['password'] === $passwd) {
            	$_SESSION['logged-user'] = $row['username'];
            	header("Location: ./pages/home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorrect Username or Password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorrect Username or Password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
?>