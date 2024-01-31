<?php
defined('SHARED_PATH') or define('SHARED_PATH', $_SERVER['DOCUMENT_ROOT']."/shared");
require SHARED_PATH.'/db.php';
$email = $_GET['email'];
$fingerprint = $_GET['fingerprint'];
$check_query = "SELECT fingerprint FROM `device_fingerprint` WHERE email='$email'";
$result_row = mysqli_query($con, $check_query);
$row = mysqli_fetch_row($result_row);

if(isset($row[0]) && !empty($row[0])){
    $user_query = "UPDATE `device_fingerprint` SET fingerprint='$fingerprint' where email='$email'";
    mysqli_query($con, $user_query);
}else{
    $save_data = "INSERT INTO `device_fingerprint`(`email`, `fingerprint`) VALUES ('$email','$fingerprint')";
    mysqli_query($con, $save_data);
}

?>