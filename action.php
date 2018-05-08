<?php 
include('db.php');
if (isset($cus_ID)) {
	# code...
}
else{
	if (isset($_POST['addCart'])) {
	echo $id = $_REQUEST['id'];
	}
}
if (isset($_POST['register'])) {
	echo $fullname = $_POST['fullname'];
	echo $email = $_POST['email'];
	echo $phone = $_POST['phone'];
	echo $address = $_POST['address'];
	echo $password = $_POST['password'];
	echo $confirm = $_POST['confirm'];
	if ($password  == $confirm) {
		$sql = "SELECT * FROM `customer` WHERE cus_Email = '$email'";
  		$result = $conn->query($sql);
  		if ($result->num_rows > 0) 
  		{

  		}
  		else{
  			
  		}
	}
}
if (isset($_POST['edit-profile'])) {
	
	echo $fullname = $_POST['fullname'];
	echo $email = $_POST['email'];
	echo $phone = $_POST['phone'];
	echo $address = $_POST['address'];
	echo $password = $_POST['password'];
	echo $confirm = $_POST['confirm'];
}
?>