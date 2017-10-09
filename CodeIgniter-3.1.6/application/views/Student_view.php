<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Students Example</title>
</head>
<body>
<a href="<?php echo base_url(); ?>index.php/Student_Control/add_view">Add</a> <table
border="1">
<?php
$i=1;
echo "<tr>";
echo "<td>Sr#</td>";
echo "<td>Roll No.</td>";
echo "<td>Name</td>";
echo "<td>Edit</td>";
echo "<td>Delete</td>";
echo "<tr>";
foreach($records as $r){
echo "<tr>";
echo "<td>".$i++."</td>";
echo "<td>".$r->id."</td>";
echo "<td>".$r->name."</td>";
echo "<td><a
href='".base_url()."index.php/Student_Control/edit/".$r->id."'>Edit</a></td>";
echo "<td><a
href='".base_url()."index.php/Student_Control/delete/".$r->id."'>Delete</a></td>";
echo "<tr>";
}
 ?>
 </table>
</body>
</html>