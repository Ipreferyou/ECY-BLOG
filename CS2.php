<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<head/>
<body>
<?php
require_once("conn.php");
include ("conn.php");
// 控制连接
?>


<center>
<?php
for ($Y=1,$D=1,$YY=1;$D==1;$Y++)
{
$sqltit = "SELECT tit FROM WZ limit $Y,$YY";
// 先出第一个的标题
$resulttit = mysqli_query($conn, $sqltit);
if (!$resulttit) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}



if (mysqli_num_rows($resulttit) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($resulttit)) {
        echo"标题：   " . $row["tit"]. "<br>". "<br>";
    }
} else {
    echo "到此为止了哟！";
	$D=0;
	exit();
}


$sqlcon = "SELECT con FROM WZ limit $Y,$YY";
// 再出第一个的内容
$resultcon = mysqli_query($conn, $sqlcon);


if (mysqli_num_rows($resultcon) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($resultcon)) {
        echo"内容：   " . $row["con"]. "<br>". "<br>";
		
    }
} else {
    echo "到此为止了哟！";
	$D=0;
}


$sqlzz = "SELECT zz FROM WZ limit $Y,$YY";
// 最后出第一个的作者
$resultzz = mysqli_query($conn, $sqlzz);


if (mysqli_num_rows($resultzz) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($resultzz)) {
        echo"作者：   " . $row["zz"]. "<br>". "<br>". "<br>". "<br>";
    }
} else {
    echo "到此为止了哟！";
	$D=0;
}

}
 
mysqli_close($conn);

?>
</center>
</body>
</html>
