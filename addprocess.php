<?php
include "db.php";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$month=$_POST['month'];
$gender=$_POST['gender'];
$addr=$_POST['addr'];
$addr2=$_POST['addr2'];
$city=$_POST['city'];
$state=$_POST['state'];
$email=$_POST['email'];
$mno=$_POST['mno'];
$course=$_POST['course'];

$sql = "INSERT INTO register (fname,lname,dob,gender,address1,address2,city,state,email,number,course)
VALUES ('$fname', '$lname','$month','$gender','$addr','$addr2','$city','$state','$email','$mno','$course')";

if ($conn->query($sql) === TRUE) {
    header("Location:result.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>