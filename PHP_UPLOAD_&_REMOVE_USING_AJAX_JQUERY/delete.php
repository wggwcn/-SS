<?php
//delete.php
if(!empty($_POST["path"]))
{
    if(unlink($_POST["path"]))
    {
        echo 'Image Deleted';
    }
}
?>