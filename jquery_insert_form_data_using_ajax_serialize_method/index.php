<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Jquery Post Form Data using Ajax serialize() method</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:600px;">  
                <h3>Jquery Post Form Data using Ajax serialize() method</h3><br />  
                <form id="submit_form">  
                     <label>Name</label>  
                     <input type="text" name="name" id="name" class="form-control" />  
                     <br />  
                     <label>Message</label>  
                     <textarea name="message" id="message" class="form-control"></textarea>  
                     <br />  
                     <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                </form>  
                <div id="response"></div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();  
           var message = $('#message').val();  
           if(name == '' || message == '')  
           {  
                $('#response').html('<span class="text-danger">All Fields are required</span>');  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#submit_form').serialize(),  
                     beforeSend:function(){  
                          $('#response').html('<span class="text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                          $('form').trigger("reset");  
                          $('#response').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#response').fadeOut("slow");  
                          }, 5000);  
                     }  
                });  
           }  
      });  
 });  
 </script> 
