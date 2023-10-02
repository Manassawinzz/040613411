<?php
// include เพื่อเชื่อมต่อฐานข้อมูล
include "connect.php";

    $stmt = $pdo->prepare("SELECT * FROM member WHERE username =?");
    $stmt->bindParam(1, $_GET['username']);
    $stmt->execute();
    if ($row = $stmt->fetch()) {
        // แสดงรูปภาพและรายละเอียดของสมาชิก
        echo "<html><head><meta charset='utf-8'></head><body>";
        echo "<img src='member_photo/{$row['username']}.jpg' width='100'><br>";
        echo "ชื่อสมาชิก : {$row['name']}<br>";
        echo "ที่อยู่ : {$row['address']}<br>";
        echo "อีเมลล์ : {$row['email']}<br>";
        echo "</body></html>";
    } else {
        echo "ไม่พบข้อมูลสมาชิก";
    }

?>
