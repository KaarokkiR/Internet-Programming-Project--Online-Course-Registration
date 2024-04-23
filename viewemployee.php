<?php
include "db.php";
$element=$_POST['ele'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wallpaper</title>
    <link rel="stylesheet" href="./table.css">
</head>
<body>
	<centre> REGISTERED DETAIL </centre>
	<br>
	<br>
<table>
<thead>
<th>First Name</th>
<th>Last Name</th>
<th>DOB</th>
<th>Gender</th>
<th>Adress1</th>
<th>Adress2</th>
<th>City</th>
<th>State</th>
<th>Email</th>
<th>Number</th>
<th>Course</th>
</thead>
<tbody>

<?php
$sql = "SELECT * FROM register where course='$element'";
$result = $conn->query($sql);
while($_row = $result->fetch_assoc()) {
$fname=$_row['fname'];
$lname=$_row['lname'];
$month=$_row['dob'];
$gender=$_row['gender'];
$addr=$_row['address1'];
$addr2=$_row['address2'];
$city=$_row['city'];
$state=$_row['state'];
$email=$_row['email'];
$mno=$_row['number'];
$course=$_row['course'];
	?>
	<tr>
	<td><?php echo $fname?></td>
	<td><?php echo $lname ?></td>
	<td><?php echo $month ?></td>
	<td><?php echo $gender ?></td>
	<td><?php echo $addr ?></td>
	<td><?php echo $addr2 ?></td>
	<td><?php echo $city ?></td>
	<td><?php echo $state ?></td>
	<td><?php echo $email ?></td>
	<td><?php echo $mno ?></td>
	<td><?php echo $course?></td>
	
	</tr>

<?php
 }

?>

</tbody>
</table>
<p><a href="result.php"<button class="button">Back</button></a></p>
   
</body>
</html>