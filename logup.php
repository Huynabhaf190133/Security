<?php
session_start();
$account=$_POST["user"];
$pass=$_POST["pass"];
$account = strip_tags($account);
$account = addslashes($account);
$pass = strip_tags($pass);
$pass = addslashes($pass);
$email=$_POST["email"];
$email=strip_tags($email);
$email=addslashes($email);
// Create connection
$conn =new mysqli("localhost", "root", "", "webds");
if(isset($_POST["submit"]))
{
  $data= $conn->query("select account from login" );
  while($row = $data->fetch_assoc()) {
    $_SESSION["acc"]=$row["account"];
  }
  echo $_SESSION["acc"];
  if(!($_SESSION["acc"])) {
    $conn->query("INSERT INTO `login`(`account`, `password`, `username`) values('$account','$pass','$email')");
    echo "<script>alert('Thêm thành công!')</script>";
  }
   else{
    echo "<script>alert('dữ liệu đã tồn tại!')</script>";
  }
}
?>