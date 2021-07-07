
<?php
echo '';
$conn = mysqli_connect ("localhost", "isah", "123456", "isah");
if($conn === false) {
    die ("Failed to connect to database");
   
$sql = "INSERT INTO student_record"(student_Name,student_Reg, student_Class,student_Age)
VALUES('$varsname','$varsreg','varsclass','varsage')";
}

?>
