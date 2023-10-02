<?php include "connect.php" ?>
<html><head><meta charset="utf-8"></head>
<body>
<form>
    <input type="text" name="keyword">
    <input type="submit" value="ค้นหา">
</form>
<div style="display:flex">
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute(); // เริ่มค้นหา
?>
<?php while ($row = $stmt->fetch()) : ?>
    <div style="padding: 15px; text-align: center">
        <a href="workshop5_detail.php?username=<?=$row["username"]?>">
            <img src='member_photo/<?=$row["username"]?>.jpg' width='100'><br>
        </a>
        ชื่อสมาชิก : <?=$row ["name"]?><br>
        ที่อยู่ : <?=$row ["address"]?><br>
        อีเมลล์ : <?=$row ["email"]?>
    </div>
<?php endwhile; ?>
</div>
</body></html>