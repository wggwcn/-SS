<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/18
 * Time: 19:03
 */
function get_data()
{
    $connect = mysqli_connect("localhost","root","","testing");
    $query = "SELECT * FROM tbl_enployee";
    $result = mysqli_query($connect,$query);
    $employee_data =array();
    while($row =mysqli_fetch_array($result))
    {

            $employee_data[] = array (
                'name'   =>   $row["name"],
                'gender' =>   $row["gender"],
                'designation'  =>  $row["designation"]

        );
    }

    return json_encode($employee_data);
}
$file_name =date("d-m-y").".json";
if(file_put_contents($file_name,get_data()))
{
    echo $file_name . "FILE CREATE";


}
else
{
    echo 'there is some error ';
}
