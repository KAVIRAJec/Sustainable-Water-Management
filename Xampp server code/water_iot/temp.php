<?php
class Temp{
// dbection
private $db;
// Table
private $db_table = "temp";
// Columns
public $id;
public $readings;
public $result;


// Db dbection
public function __construct($db){
$this->db = $db;
}

// GET ALL
public function getTemps(){
$sqlQuery = "SELECT id, readings FROM " . $this->db_table . "";
$this->result = $this->db->query($sqlQuery);
return $this->result;
}

// CREATE
public function createTemp(){
// sanitize
$this->readings=htmlspecialchars(strip_tags($this->readings));
$sqlQuery = "INSERT INTO
". $this->db_table ." SET readings = '".$this->readings."'";
$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// UPDATE
public function getSingleTemp(){
$sqlQuery = "SELECT id, readings FROM
". $this->db_table ." WHERE id = ".$this->id;
$record = $this->db->query($sqlQuery);
$dataRow=$record->fetch_assoc();
$this->readings = $dataRow['readings'];
}

// UPDATE
public function updateTemp(){
$this->readings=htmlspecialchars(strip_tags($this->readings));
$this->id=htmlspecialchars(strip_tags($this->id));

$sqlQuery = "UPDATE ". $this->db_table ." SET readings = '".$this->readings."'
WHERE id = ".$this->id;

$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// DELETE
function deleteTemp(){
$sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ".$this->id;
$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}
}
?>

