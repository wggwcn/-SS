<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Multiple Image Upload</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <form id="uploadForm" action="upload.php" method="post">  
                     <div id="gallery"></div><div style="clear:both;"></div><br /><br />  
                     <div class="col-md-4" align="right">  
                          <label>Upload Multiple Image</label>  
                     </div>  
                     <div class="col-md-4">  
                          <input name="files[]" type="file" multiple />  
                     </div>  
                     <div class="col-md-4">  
                          <input type="submit" value="Submit" />  
                     </div>  
                     <div style="clear:both"></div>  
                </form>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#uploadForm').on('submit', function(e){  
           e.preventDefault();  
           $.ajax({  
                url: "upload1.php",  
                type: "POST",  
                data: new FormData(this),  
                contentType: false,  
                processData:false,  
                success: function(data)  
                {  
                     $("#gallery").html(data);  
                     alert("Image Uploaded");  
                }  
           });  
      });  
 });  
 </script>  
