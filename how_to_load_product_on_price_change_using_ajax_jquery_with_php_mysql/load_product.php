<?php
//load_product.php
$connect = mysqli_connect("localhost", "root", "", "zzz");
if(isset($_POST["price"]))
{
    $output = '';
    $query = "SELECT * FROM product WHERE product_price <= ".$_POST['price']." ORDER BY product_price desc";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output .= '  
                     <div class="col-md-4">  
                          <div style="border:1px solid #ccc; padding:12px; margin-bottom:16px; height:375px;" align="center">  
                               <img src="'.$row["product_image"].'" class="img-responsive" />  
                               <h3>'.$row["product_name"].'</h3>  
                               <h4>Price - '.$row["product_price"].'</h4>  
                          </div>  
                     </div>  
                ';
        }
    }
    else
    {
        $output = "No Product Found";
    }
    echo $output;
}
?>
