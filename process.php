
<?php
echo '';
$conn = mysqli_connect ("localhost", "isah", "123456", "isah");
if($conn === false) {
    die ("Failed to connect to database");
}
$varsname = mysqli_real_escape_string($conn, $_REQUEST['sname']);
$varsreg = mysqli_real_escape_string($conn, $_REQUEST['sreg']);
$varsclass = mysqli_real_escape_string($conn, $_REQUEST['sclass']);
$varsage = mysqli_real_escape_string($conn, $_REQUEST['sage']);
   
$createtable = "
	CREATE TABLE IF NOT EXISTS student_record(
		ID INT(10) AUTO_INCREMENT PRIMARY KEY,
		Student_name VARCHAR(100) NOT NULL, 
		Student_reg VARCHAR(100) NOT NULL,
		Student_class VARCHAR(100) NOT NULL;
		Student_age VARCHAR(100) NOT NULL
	)";
mysqli_query($conn, $createtable);

$sql = "INSERT INTO student_record (student_name, student_reg, student_class, student_age) VALUES('$varsname', '$varsreg', '$varsclass', '$varsage')";

if(mysqli_query($conn, $sql)) {
    echo "Successfully added record to database";
} else {
    echo "failed to added record to database";
}

echo  'Name :'.'&nbsp'.'Dear'.'&nbsp'. $_POST['sname'].'<br><br>'.'Reg number is:'. $_POST['sreg'].'<br><br>'.'Your level is: '.$_POST['sclass'].'<br><br>'.'Your age is: '.$_POST['sage'].'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'<b><h3> We Have Received Your Information Which Have Been Submitted To Our Database!</h3><b>';

$mycheck = "SELECT * FROM student_record WHERE student_name='$varsname'";
$result = mysqli_query($conn, $mycheck);
$count = mysqli_num_rows($result);
if($count == 0){	
$sql = "INSERT INTO student_record(Student_name, Student_reg, Student_class, Student_age) VALUES($varsname', '$varsreg', '$varsclass', '$varsage')";
	if(mysqli_query($conn, $sql)){
		echo "Added successfully";
		} else
		echo "could not be added";
} else {
	echo "Account" . ' ' . $_REQUEST['sname'] . ' ' .  "already exists";} 
header('refresh:10, url=index.php');

echo '<html>

<head>
<title>
</title>
</head>
<body>

  <div>
   <p> Reasons for Obtaining  data from student</p>
  <li> This project is created to obtain  data of student from various faculty and save in a general database so as for easy acces in the future <br>
  <li>Using Database management system, The Institution can have detailed information about student </li>
  <li>With this Mini project of Epsilion Group  Records of students have been made easy to Access</li>
 </li>
  </div>
  <br>

</body>
</html>'

mysqli_close ($conn);
?>
