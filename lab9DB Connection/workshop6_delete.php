<?php include "connect.php" ?>

    <?php 
    $stmt =$pdo->prepare("DELETE from member WHERE username=:username");
    $stmt->bindParam(":username",$_GET["username"]);
    if ($stmt->execute()) // เริ่มลบข้อมูล
    header("location: workshop6.php"); // กลับไปแสดงผลหน้าข้อมูล
    ?>
