<?php
require "conn.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {

  $name=$_POST["name"];
  $product=$_POST["product"];
  $price=$_POST["price"];


  $query="INSERT INTO exporter(name,product,₹) VALUES('$name','$product','$price')";
  if(mysqli_query($conn,$query)){
    echo"success";
  }
  else {
    echo"no";
  }

}
?>
