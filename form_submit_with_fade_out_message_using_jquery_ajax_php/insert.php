<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 if(isset($_POST["name"]))  
 {  
      $name = mysqli_real_escape_string($connect, $_POST["name"]);  
      $message = mysqli_real_escape_string($connect, $_POST["message"]);  
      $sql = "INSERT INTO tbl_form(name, message) VALUES ('".$name."', '".$message."')";  
      if(mysqli_query($connect, $sql))  
      {  
           echo "Message Saved";  
      }  
 }  
 ?>  
