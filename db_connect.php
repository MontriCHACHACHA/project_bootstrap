<?php
$servername = "localhost";
$username = "root";  // ค่า default ของ XAMPP คือ "root"
$password = "";  // ค่า default ของ XAMPP จะเป็นช่องว่าง
$dbname = "my_database";  // ชื่อฐานข้อมูลที่สร้างไว้

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>