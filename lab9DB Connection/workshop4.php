<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form>
        <input type="text" name="keyword">
        <input type="submit" value="ค้นหา">
    </form>
        <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE name LIKE ?");
        if (!empty($_GET['keyword'])) { // ตรวจสอบว่ามีคำค้นหาถูกส่งมาจากฟอร์มหรือไม่
            $keyword = $_GET['keyword'] . '%'; // เพิ่มสัญลักษณ์ % ต่อท้ายคำค้นหา
            $stmt->bindParam(1, $keyword);
            $stmt->execute();
        } else {
            // ถ้าไม่มีคำค้นหาถูกส่งมา ให้ค้นหาทุกคน
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();
        }
        ?>
        <?php while ($row = $stmt->fetch()) : ?>
                ชื่อสมาชิก: <?= $row["name"] ?><br>
                ที่อยู่: <?= $row["address"] ?><br>
                อีเมลล์: <?= $row["email"] ?>
                <img src='member_photo/<?= $row["username"] ?>.jpg' width='100'><br>
                <?php endwhile; ?>
</body>

</html>
