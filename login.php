<?php
    session_start();
    include('db_connect.php');

    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าจากฟอร์ม
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ตรวจสอบว่ามีผู้ใช้ที่กรอก username นี้หรือไม่
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
        // ถ้ามีผู้ใช้ ให้ดึงข้อมูลผู้ใช้
        $row = $result->fetch_assoc();

        // ตรวจสอบรหัสผ่าน (ใช้ password_verify เพื่อเช็ครหัสผ่านกับที่เข้ารหัสไว้ในฐานข้อมูล)
        if ($password === $row['password']) {
            // รหัสผ่านถูกต้อง สร้าง session ให้กับผู้ใช้
            $_SESSION['username'] = $username;

            // ย้ายไปหน้าหลักหลังจากเข้าสู่ระบบสำเร็จ
            header("Location: index.php");
            exit();
        } else {
            // รหัสผ่านไม่ถูกต้อง
            $error = "Invalid username or password";
        }
    } else {
        // ไม่พบผู้ใช้
        $error = "Invalid username or password";
    }
}

$conn->close();
?>