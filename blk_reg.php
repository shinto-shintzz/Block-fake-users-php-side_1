<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email']
		$Device_id = $_POST['Device_id'];
		
		if($name == '' || $username == '' || $password == '' || $email == ''){
			echo 'please fill all values';
		}else{
			require_once('dbConnect.php');
			$sql = "SELECT * FROM users WHERE Device_id='$device_id';
			
			
			
			$check = mysqli_fetch_array(mysqli_query($con,$sql));
			
			if(isset($check)){
				echo 'your device is blocked';
			}else{				
				$sql = "INSERT INTO users (name,username,password,email,Device_id) VALUES('$name','$username','$password','$email','$device_id')";
				if(mysqli_query($con,$sql)){
					echo 'successfully registered';
				}else{
					echo 'oops! Please try again!';
				}
			}
			mysqli_close($con);
		}
}else{
echo 'error';
}