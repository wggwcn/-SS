<?php  
 //login.php  
 $connect = mysqli_connect("localhost", "root", "", "testing");
 session_start();  
 if(isset($_POST["sub"]))  
 {  
   $username = mysqli_real_escape_string($connect, $_POST["name"]);
   $password = mysqli_real_escape_string($connect, $_POST["pass"]);
   $query = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
   $result = mysqli_query($connect, $query);
   if(mysqli_num_rows($result) > 0)
   {
    $_SESSION["name"] = $_POST["name"];
    header("location:index.php"); 
   }
      else
   {
    echo '<script>alert("Wrong Data")</script>';
   }    
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial</title> 
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <style>  
                #box  
                {  
                     width:600px;  
                     background:gray;  
                     color:white;  
                     margin:0 auto;  
                     padding:10px;  
                     text-align:center;  
                     margin-top:100px;
                }  
           </style>  
      </head>  
      <body>  
           <div id="box">
                <h1 align="center">Use Ajax with Jquery in PHP to check Session Expired</h1>  
                <h2>Login</h2>  
                <form method="post">  
                     <input type="text" name="name" id="name" placeholder="Enter Username" class="form-control" /><br />  
                     <input type="password" name="pass" id="pass" placeholder="Enter Pass" class="form-control" /><br />  
                     <input type="submit" name="sub" id="sub" class="btn btn-info" value="Submit" />  
                </form>  
                <br /><br />  
           </div>  
      </body>  
 </html>
