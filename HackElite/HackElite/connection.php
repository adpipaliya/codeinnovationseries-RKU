<?php
	$conn = mysqli_connect('localhost','root','');
	if(!$conn)
	{
		echo "Not Connect";
	}
	if(!mysqli_select_db($conn,'hack_elite'))
	{
		echo "Connect";
	}
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Subject = $_POST['subject'];
	$Message = $_POST['message'];

	$sql = "INSERT INTO contect_us (`name`, `email`, `subject`, `message`) VALUES ('$Name','$Email','$Subject','$Message')";

	if(!Mysqli_query($conn,$sql))
	{
		echo "Not Insert";
	}
	else
	{
		echo "Insert";	
	}

	header("Location:index.html");

?>