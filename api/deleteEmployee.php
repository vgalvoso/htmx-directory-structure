<?php
$data = (object)$_POST;
$id = $data->id;
$query = "DELETE FROM employee WHERE id = :id";
$params = ["id" => $id];
if($sql->exec($query,$params)){
  api("getEmployees");
}else{
  $data = ["error" => $sql->getError()];
  view("error",$data);
}