<?php
$hostname = 'localhost';
$dbname ='duanmau2022';
$username = 'root';
$password = '';
try {
    
    $connect = new PDO("mysql:localhost=$hostname;dbname=$dbname", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  
    echo  $e->getMessage();
}
?>