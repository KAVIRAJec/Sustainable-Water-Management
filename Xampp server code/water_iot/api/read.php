<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include_once '../database.php';
include_once '../temp.php';
$database = new Database();

$db = $database->getConnection();
$items = new Temp($db);
$records = $items->getTemp();
$itemCount = $records->num_rows;
echo json_encode($itemCount);
if($itemCount > 0){
$tempArr = array();
$tempArr["body"] = array();
$tempArr["itemCount"] = $itemCount;
while ($row = $records->fetch_assoc())
{
array_push($tempArr["body"], $row);
}
echo json_encode($tempArr);
}
else{
http_response_code(404);
echo json_encode(
array("message" => "No record found.")
);
}
?>