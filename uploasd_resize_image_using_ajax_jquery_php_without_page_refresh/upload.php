<?php  
//upload.php;
if(isset($_FILES["image_upload"]["name"])) 
{
 $name = $_FILES["image_upload"]["name"];
 $size = $_FILES["image_upload"]["size"];
 $ext = end(explode(".", $name));
 $allowed_ext = array("png", "jpg", "jpeg");
 if(in_array($ext, $allowed_ext))
 {
  if($size < (1024*1024))
  {
   $new_image = '';
   $new_name = md5(rand()) . '.' . $ext;
   $path = 'upload/' . $new_name;
   list($width, $height) = getimagesize($_FILES["image_upload"]["tmp_name"]);
   if($ext == 'png')
   {
    $new_image = imagecreatefrompng($_FILES["image_upload"]["tmp_name"]);
   }
   if($ext == 'jpg' || $ext == 'jpeg')  
            {  
               $new_image = imagecreatefromjpeg($_FILES["image_upload"]["tmp_name"]);  
            }
            $new_width=200;
            $new_height = ($height/$width)*200;
            $tmp_image = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagejpeg($tmp_image, $path, 100);
            imagedestroy($new_image);
            imagedestroy($tmp_image);
            echo '<img src="'.$path.'" />';
  }
  else
  {
   echo 'Image File size must be less than 1 MB';
  }
 }
 else
 {
  echo 'Invalid Image File';
 }
}
else
{
 echo 'Please Select Image File';
}
?>
