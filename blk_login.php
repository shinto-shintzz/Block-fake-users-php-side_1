<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$Device_id = $_POST['Device_id'];
		
		if($name == '' || $username == '' || $password == '' || $email == ''){
			echo 'please fill all values';
		}else{
			require_once('dbConnect.php');
			$sql = "SELECT blocked_status FROM users WHERE username= 'username';
			
			
			
			$check = mysqli_fetch_array(mysqli_query($con,$sql));
			if($sql==1)
			{
				echo 'u are blocked';
			}
			else
			{
				$sql = "SELET * FROM users WHERE username= 'username' and password='password';
                               if(mysqli_query($con,$sql)){
					logged in sucessfully
				}

			}
			mysqli_close($con);
		}
}else{
echo 'error';
}