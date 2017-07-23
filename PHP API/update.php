<?php
$data = json_decode(file_get_contents("php://input"));
include "db.php";
$sql = "UPDATE employees SET
name ='$data->name',  position ='$data->position',
department ='$data->department',salary ='$data->salary'
WHERE _id = $data->_id ";
$qry = $conn->query($sql);
if($data->name){
}
$conn->close();
?>
