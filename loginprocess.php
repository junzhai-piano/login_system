<?php
session_start();

//encrypt the password
$epassword=md5($_POST['pwd']);

//select data
include '../myguests/db.php';

$sql = "SELECT * FROM users where usersEmail='{$_POST['usersEmail']}' and usersPassword='{$epassword}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //redirect to dashboard
    $_SESSION['usersFirst']=$row['usersFirst'];
    $_SESSION['usersLast']=$row['usersLast'];
    $_SESSION['usersEmail']=$row['usersEmail'];
    $_SESSION['usersId']=$row['usersId'];
    $_SESSION['loggedin']= true;
    header("Location: dashboard.php");
}
} else {
    //send back to log in
    $_SESSION['message']="failedlogin";
    header("Location: login.php");
}

?>
4957