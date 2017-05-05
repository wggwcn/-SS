<html>  
 <head>  
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">  
  <meta charset="utf-8">  
  <title>Webslesson Tutorial</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <h3>Upload & Resize Image using Ajax Jquery PHP without Page Refresh</h3><br />  
   <form method="post" id="upload_image" enctype="multipart/form-data">
    <label>Select File <br />  
    <input type="file" name="image_upload" id="image_upload" />
    <br />
    <input type="submit" name="upload" id="upload" class="btn btn-info" value="Upload" />
   </form>
   <br />  
   <br />  
   <div id="preview"></div>  
   <br />  
   <br />  
  </div>  
 </body>  
</html>  
<script>  
$(document).ready(function(){   
    $('#upload_image').on('submit', function(event){
     event.preventDefault();
     $.ajax({
      url:"upload.php",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data){
       $('#preview').html(data);
      }
     })
    });
});  
</script>
