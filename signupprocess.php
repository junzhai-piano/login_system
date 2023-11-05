<?php

//echo $_POST['usersFirst']."<br>";

//create a random password
$randpassword=rand();

//Encrypt the pasword
$epassword=md5($randpassword);

//Put the info in the db
include '../myguests/db.php';

$sql = "INSERT INTO users (usersFirst, usersLast, usersEmail, usersPassword)
VALUES ('{$_POST['usersFirst']}', '{$_POST['usersLast']}', '{$_POST['usersEmail']}','{$epassword}')"; 

//echo $sql;die;

if ($conn->query($sql) === TRUE) {
//Email the user
$to = $_POST['usersEmail'];
$subject = "Thanks for registering";
$txt = "Thanks for registering!
Your username: ".$_POST['usersEmail']."
Your password: ".$randpassword."
Login here: https://portfolio.jz339.opalstacked.com/projects/membersonly/login.php
";
$headers = "From: webmaster@example.com";

mail($to,$subject,$txt,$headers);

//Redirect to Thank you page
header("Location:thankyou.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>

