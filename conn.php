<meta charset='utf-8'>
<?php
$servername = "localhost";
$username = "LTLT";
$password = "LTLTLT";
$datebasename = "test1";

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $datebasename);
 
// 检测连接
if (mysqli_connect_error()) {
    die("数据库连接失败: " . mysqli_connect_error());
}
?>