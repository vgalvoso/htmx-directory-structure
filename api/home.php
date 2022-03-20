<?php
    $query = "SELECT * FROM employee";
    $employees = $sql->getItems($query);
    if(!$employees)
      exit("Home");

    $data = ["employees" => $employees];
    view("home",$data);