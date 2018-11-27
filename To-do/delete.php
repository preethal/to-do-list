<?php
include('connection.php');
if(isset($_POST['delete']))
{
$id=$_REQUEST['id'];
$qry="delete from todo where id='$id'";
echo $qry;
$qry=mysql_query("delete from todo where id='$id'");
header('Location: create.php');
}
?>
