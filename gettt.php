<?php

session_start();
$mysqli=new mysqli("localhost","root","","webds") or die(mysqli_error($mysqli));
$_SESSION["a"]="fas";
$name="";
$price="";
$amount="";
if(isset($_POST["save"])){
    $name=$_POST["name"];
    $price=$_POST["price"];
    $amount=$_POST["amount"];



    $mysqli->query("INSERT INTO `cart`(`cart_name`, `cart_price`, `cart_amount`) values('$name','$price','$amount')");
    $_SESSION["message"]="Record has been saved !";
    $_SESSION["msg_type"]="Success";

    header("location: cart.php");
}
if(isset($_GET["cart_add"])){
    $id=$_GET["cart_add"];
    $mysqli->query("INSERT INTO `cart`(`cart_name`, `cart_price`, `cart_amount`) values('$name','$price','$amount')");
}
if(isset($_GET["delete"])){
    $id=$_GET["delete"];
    $mysqli->query("DELETE FROM `cart` WHERE cart_id='$id'") or die(mysqli_error());;
    header("location:cart.php");
}
if(isset($_GET["edit"])){
    $id=$_GET["edit"];
    $result=$mysqli->query("select * from cart where cart_id=$id");
    if($result->num_rows>1){
        $row = $result->fetch_array();
        $name=$row("name");
        $price=$row("price");
        $amount=$row("amount");
    }
    
}
?>