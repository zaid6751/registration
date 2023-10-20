
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="information";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection fail");
}

$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$mob=$_POST['mob'];

$sql="INSERT INTO `info` (`name`,`email`,`gender`,`mob`) VALUES('$name','$email','$gender','$mob')";

if($conn->query($sql)==True){
  echo "new record added";  
}else{
  echo "error"; 
}

$conn->close();
?>