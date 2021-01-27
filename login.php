<?php
session_start();
$account=$_POST["user"];
$pass=$_POST["pass"];
$account = strip_tags($account);
$account = addslashes($account);
$pass = strip_tags($pass);
$pass = addslashes($pass);
// Create connection
$conn =new mysqli("localhost", "root", "", "webds");
if(isset($_POST["submit"]))
{
  $data= $conn->query("select * from login where password='$pass' AND account='$account'" );
  $check_login = mysqli_num_rows($data);
  if($check_login==0){
    echo "<script>alert('Password or email is incorrect, please try again!')</script>";
    header('location: sign.php');
    exit();
  }
  else{
    while($row = $data->fetch_assoc()) {
      $_SESSION["name"]=$row["username"];
    }
    $_SESSION["checksession"]=true;
    header("location: customer/customer.php");
  }
}
?>
$conn.close();