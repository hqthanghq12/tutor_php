<?php

$host = "localhost";
$username = "";
$password = "";
$dbname = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Kết nối thành công";
}catch (PDOException $e){
    die("Lỗi kết nối cơ sở dữ liệu: ".$e->getMessage());
}
?>