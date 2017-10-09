<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Students Example</title>
</head>
<body>
<form method = "" action = "">
<?php
echo form_open('Student_Control/update_student');
echo form_hidden('old_roll_no',$old_roll_no);
echo form_label('Roll No.');
echo form_input(array('id'=>'id','name'=>'id','value'=>$records[0]->id));
echo "<br/>";
echo form_label('Name');
echo
form_input(array('id'=>'name','name'=>'name','value'=>$records[0]->name));
echo "<br/>";
echo form_submit(array('id'=>'submit','value'=>'Edit'));

echo form_close();
?>
</form>
</body>
</html>
