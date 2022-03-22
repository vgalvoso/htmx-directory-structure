<?php
  $data = (object)$_POST;
  $first_name = $data->first_name;
  $middle_name = $data->middle_name;
  $last_name = $data->last_name;
  $salary = $data->salary;
  $emp_type = $data->emp_type;

  $query = "INSERT INTO employee(first_name,middle_name,last_name,salary,employment_type)
            VALUES (:first_name,:middle_name,:last_name,:salary,:employment_type)";
  $params = ["first_name" => $first_name,"middle_name" => $middle_name,"last_name" => $last_name,
            "salary" => $salary,"employment_type" => $emp_type];
  if($sql->exec($query,$params)){
    api("getEmployees");
  }else{
    $data = ["error" => $sql->getError()];
    view("error",$data);
  }