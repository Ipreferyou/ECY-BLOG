<meta charset='utf-8'>
<?php
$servername = "localhost";
$username = "LTLT";
$password = "LTLTLT";
$datebasename = "test1";

// ��������
$conn = mysqli_connect($servername, $username, $password, $datebasename);
 
// �������
if (mysqli_connect_error()) {
    die("���ݿ�����ʧ��: " . mysqli_connect_error());
}
?>