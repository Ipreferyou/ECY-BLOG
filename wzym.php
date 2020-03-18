<?php
require_once("conn.php");

$tit=$_POST["tit"];
$con=$_POST["con"];
$zz=$_POST["zz"];

$sql="insert into wz(tit,con,zz) values ('$tit','$con','$zz')";

if($conn->query($sql)==TRUE)
{
header("location:../index.php");
}
else
{
echo "编辑失败".$sql."<br>".$conn->error;
}
$conn->close();

?>