<?php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 $sql = "SELECT * FROM tbl_video LIMIT 2";  
 $result = mysqli_query($connect, $sql);  
 $video_id = '';  
?>  
<html>  
     <head>  
          <title></title>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     </head>  
     <body>  
          <div class="container">  
               <br />  
               <br />  
               <br />  
               <div class="table-responsive">  
                    <h2 align="center">Load More Data using Ajax Jquery</h2><br />  
                    <table class="table table-bordered" id="load_data_table">  
                         <?php  
                         while($row = mysqli_fetch_array($result))  
                         {  
                         ?>  
                              <tr>  
                                   <td><?php echo $row["video_title"]; ?></td>  
                              </tr>  
                         <?php  
                              $video_id = $row["video_id"];  
                         }  
                         ?>  
                         <tr id="remove_row">  
                              <td><button type="button" name="btn_more" data-vid="<?php echo $video_id; ?>" id="btn_more" class="btn btn-success form-control">more</button></td>  
                         </tr>  
                    </table>  
               </div>  
          </div>  
     </body>  
</html>  
 <script>  
 $(document).ready(function(){  
      $(document).on('click', '#btn_more', function(){  
           var last_video_id = $(this).data("vid");  
           $('#btn_more').html("Loading...");  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{last_video_id:last_video_id},  
                dataType:"text",  
                success:function(data)  
                {  
                     if(data != '')  
                     {  
                          $('#remove_row').remove();  
                          $('#load_data_table').append(data);  
                     }  
                     else  
                     {  
                          $('#btn_more').html("No Data");  
                     }  
                }  
           });  
      });  
 });  
 </script>
