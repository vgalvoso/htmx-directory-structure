<?php
class Sql{

    protected $conn;
    protected $db;
    public $error;
    public $query;

    public function __construct($dbase="default"){
        include "connect.php";
        $server = $db[$dbase]["server"];
        $user = $db[$dbase]["user"];
        $pass = $db[$dbase]["pass"];
        $dbname = $db[$dbase]["dbname"];
        $driver = $db[$dbase]["driver"];
        try{
            $this->conn = new PDO("$driver:host=$server;dbname=$dbname",$user,$pass,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    //select single item
    public function getItem($query,$inputs=null){
        try{
            $stmt = $this->conn->prepare($query);
            $stmt->execute($inputs);
            return $stmt->fetch(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    //select single items
    public function getItems($query,$inputs=null){
        try{
            $stmt = $this->conn->prepare($query);
            $stmt->execute($inputs);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    //insert/update/delete
    public function exec($query,$inputs){
        try{
            $stmt = $this->conn->prepare($query);
            return $stmt->execute($inputs);
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function startTrans(){
        return $this->conn->beginTransaction();
    }

    public function commit(){
        return $this->conn->commit();
    }

    public function rollback(){
        return $this->conn->rollBack();
    } 
}

function template($template,$data = null){
    if($data != null)
        extract($data);
    include "../template/$template.php";
}

function api($template,$data = null){
    global $sql;
    if($data != null)
        extract($data);
    include "$template.php";
}