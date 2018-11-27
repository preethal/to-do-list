<html>
<head>
<h2>Create a to do list</h2>
<form method="post" action="">
  <input type="text" name="title" placeholder="Title"><br>
  <input type="text" name="desc" placeholder="description">
  <input type="submit" value="Create" name="create" id="create">
</form>
</head>
</html>
<?php
include('connection.php');

if(isset($_POST['create']))
{
    $title=$_REQUEST['title'];
$title;
    $desc=$_REQUEST['desc'];
     $sql = "INSERT INTO todo (title, description)VALUES ('$title','$desc')";
//echo $sql;
mysql_query($sql);

}
?>
<div>
<?php
include('todo_list.php');
?>

<form method="post" action="">
<input type="submit" name="complete" value="COMPLETED">
</form>
<?php
if(isset($_POST['complete']))
{
echo '<script>
alert("You have completed");
window.location = "thankyou.php"
</script>';
}
?>
</div>
