<?php
// เรียกไฟล์เชื่อมต่อฐานข้อมูล
include 'db_connect.php';

// SQL query เพื่อดึงข้อมูลจากตาราง users
$sql = "SELECT name, email FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
</head>

<body>
    <h2>List of Users</h2>
    <ul>
        <?php
    // ตรวจสอบว่ามีข้อมูลในตารางหรือไม่
    if ($result->num_rows > 0) {
        // แสดงข้อมูลแต่ละแถว
        while($row = $result->fetch_assoc()) {
            echo "<li>" . $row["name"] . " - " . $row["email"] . "</li>";
        }
    } else {
        echo "0 results";
    }

    // ปิดการเชื่อมต่อ
    $conn->close();
    ?>
    </ul>
</body>

</html>