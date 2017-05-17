// 设置返回json格式数据
header('content-type:application/json;charset=utf8');

//连接数据库
$link = mysql_connect("localhost", "root", "root") or die("Unable to connect to the MySQL!");

mysql_query("SET NAMES 'UTF8'");

mysql_select_db("jilinwula", $link) or die("Unable to connect to the MySQL!");

// 获取分页参数
$page = 0 ;
$pageSize = 3;

if(!is_null($_GET["page"])) {
$page = $_GET["page"];
}

if(!is_null($_GET["pageSize"])) {
$pageSize = $_GET["pageSize"];
}

// 查询数据到数组中
$result = mysql_query("select username,password from userinfo limit " . $page . ", ". $pageSize ."");

$results = array();
while ($row = mysql_fetch_assoc($result)) {
$results[] = $row;
}

// 将数组转成json格式
echo json_encode($results);

// 关闭连接
mysql_free_result($result);

mysql_close($link);
示例代码二：
<?php

//需要执行的SQL语句
//单条
$sql="select id,name from tbl_user where id=1";
//多条数据
//$sql="select id,name from tbl_user";

//调用conn.php文件进行数据库操作 
require('Conn.php'); 

//提示操作成功信息，注意：$result存在于conn.php文件中，被调用出来 
if($result) 
{ 

// $array=mysql_fetch_array($result,MYSQL_ASSOC);
 
 
 /*数据集

 $users=array();
 $i=0;
 while($row=mysql_fetch_array($result,MYSQL_ASSOC)){

  echo $row['id'].'-----------'.$row['name'].'</br>';
  $users[$i]=$row;
  $i++;

 }
 echo json_encode(array('dataList'=>$users));

 */

 /*单条数据*/

 $row=mysql_fetch_row($result,MYSQL_ASSOC);
 
 echo json_encode(array('jsonObj'=>$row));
} 

mysql_free_result($result);
//释放结果
mysql_close();
//关闭连接

?>
