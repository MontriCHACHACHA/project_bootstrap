<?php
    include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าจากฟอร์ม
    $username = $_POST['username'];
    $password = $_POST['password'];

    // เตรียมคำสั่ง SQL เพื่อเพิ่มข้อมูล
    $sql = "INSERT INTO users (`username`, `password`) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // บันทึกข้อมูลสำเร็จ ให้กลับไปยัง index.php พร้อม query string ว่า success
        header("Location: index.php?status=success");
        exit();
    } else {
        // หากเกิดข้อผิดพลาด ให้กลับไปยัง index.php พร้อม query string ว่า error
        header("Location: index.php?status=error");
        exit();
    }
}

$conn->close();
?>