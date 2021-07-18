
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
   
$sql = "INSERT INTO student_record"(student_Name,student_Reg, student_Class,student_Age)
VALUES('$varsname','$varsreg','varsclass','varsage')";

echo  'Name :'.'&nbsp'.'Dear'.'&nbsp'. $_POST['sname'].'<br><br>'.'Reg number is:'. $_POST['sreg'].'<br><br>'.'Your level is: '.$_POST['sclass'].'<br><br>'.'Your age is: '.$_POST['sage'].'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'<b><h3> We Have Received Your Information Which Have Been Submitted To Our Database!</h3><b>';


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
</html>
?>
