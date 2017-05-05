<?php
//delete.php
$connect = mysqli_connect("localhost", "root", "", "testing");
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM tbl_customer WHERE CustomerID = '".$id."'";
  mysqli_query($connect, $query);
 }
}
?>
