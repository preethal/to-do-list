<?php
$id=$_POST['id_val'];
//echo $id;
?>


<html>
<head>
<h2>Create a to do list</h2>
<form method="post" action ="">
  <input type="text" name="title" placeholder="Title"><br>
  <input type="text" name="desc" placeholder="description">
<input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="submit" value="Update" name="update">
</form>
</head>
</html>
<?php

include('connection.php');
if(isset($_POST['update']))
{
$val=$_REQUEST['id'];
    $title=$_REQUEST['title'];
    $desc=$_REQUEST['desc'];
     $sql = "update todo set title='$title',description='desc' where id='$val'";
echo $sql;
mysql_query($sql);
header('Location: create.php');


}
?>
