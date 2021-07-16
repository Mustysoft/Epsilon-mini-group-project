
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

echo '<html>
<head>
<title>
</title>
</head>
<body>
</body>
</html>
?>
