<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$con = mysqli_connect("localhost", "root", "123456", "developer_test_drive");
//$con = mysqli_connect("192.168.1.75", "brwueskjdhf", "eiywbmssdczsd", "pourfvjsdvj");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($con, "utf8");
