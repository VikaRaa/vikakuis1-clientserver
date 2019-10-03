<?php
include_once(__DIR__."/../lib/Employee.php");
include_once(__DIR__."/../lib/DataFormat.php");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
$emp = new Employee();
$emp->setValue(4,'ica','ica','angelica@gmail.com','082389897809','2019-10-07',1,1000000,1,1,4);
$result=$emp->create();
$format= new DataFormat();
echo $format->asJSON($result);
