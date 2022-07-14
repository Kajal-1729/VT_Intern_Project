<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
    $Number = $_POST['Number'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $duplicate = $_POST['duplicate'];
    $upload = $_POST['upload']; 
    $skill = $_POST['skill'];
    $Alternate id= $_POST['Alternate id'];
    $comment = $_POST['comment'];
    $recorded date = $_POST['recorded date'];
    $Function name= $_POST['Function name'];
    $position = $_POST['position'];
	$yes_no = $_POST['yes_no'];
	$management = $_POST['management'];
    $interview = $_POST['interview'];
    $EAF = $_POST['EAF'];
    $pur = $_POST['pur'];
    $SR = $_POST['SR'];
	$joining date = $_POST['joining date'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','check info');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration form(firstName, lastName, Number, email, location, duplicate, upload, skill, Alternate id, comment, recorded date, Function name, position, yes_no, management, interview, EAF, pur, SR, joining date) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $Number , $email ,$location , $duplicate, $upload,  $skill , $Alternate id, $comment , $recorded date , $Function name, $position ,$yes_no, $management ,$interview , $EAF, $pur, $SR ,$joining date);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>