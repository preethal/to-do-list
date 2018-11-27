<?php
include('connection.php');
?>
<table style="width:100%" border="1">
  <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Delete</th>
<th>Edit</th>
  </tr>
  <tr>
<?php
$qry="select id,title,description from todo";
$sql = mysql_query($qry);

while($contact=mysql_fetch_array($sql))
{
?>
<tr>


    <td><?php echo $contact['title']; ?></td>
    <td><?php echo  $contact['description']; ?></td>
<td>
<form method="post" action="delete.php">
<input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
<input type="submit" name="delete" value="Delete" >
</form>
<td>
<td>
<form  method="post" action="edit.php">
<input type="hidden" name="id_val" value="<?php echo $contact['id']; ?>">
<input type="submit" name="edit" value="Edit" >
</form>
</td>
</tr>
<?php
}
?>
</table>
