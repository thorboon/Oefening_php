<?php
include_once 'dbcon.php';
$id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE tbl_users SET username='$username[$i]', email='$email[$i]' WHERE user_id=".$id[$i]);
}
header("Location: index.php");
?>