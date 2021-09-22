<?php
include "db_conn.php";
if (isset($_POST['uname'])&& isset($_POST['password'])) {
	function validate($data){
		$data = trim($data);
		$data=stripslashes($data);
		$data= htmlspecialchars($data);
		return $data;
	}
	$uname= validate($_POST['uname']);
	$pass=validate($_POST['password']);
	
	if (empty($uname)) {
		header("Location:loging.php?error=user name is required");
		exit();
	}elseif (empty($pass)){
			header("Location:loging.php?error=password is required");
			exit();
	}else{
		$sql = "SELECT * FROM user WHERE user_name='$uname' AND password ='$pass' ";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)){
            header("Location: Home.php");
		}
		else{
			header("Location:loging.php?error=incorect user name and password");
		}
	}
}else{
	header("location:loging.php");
	exit();
}