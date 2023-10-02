<?php include "connect.php" ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script>
        function confirmDelete(username){
            let ans =confirm("ต้องการลบรายชื่อ"+username);
            if(ans==true){
                document.location="workshop6_delete.php?username="+username;
            }
        }
    </script>
</head>

<body>
    <?php
    $stmt = $pdo->prepare("SELECT * from member");
    $stmt->execute()
    ?>
    <?php
    while($row = $stmt->fetch()) :
        echo "<img src='member_photo/{$row['username']}.jpg' width='100'><br>";
        echo $row["username"]."<br>";
        echo $row["password"]."<br>";
        echo $row["name"]."<br>";
        echo $row["address"]."<br>";
        echo $row["mobile"]."<br>";
        echo $row["email"]."<br>";
        echo "<a href=onclick='confirmDelete({$row["username"]})'>เเก้ไขข้อมูล</a> |";
        echo "<a href='#' onclick='confirmDelete(`{$row["username"]}`)'>ลบ</a>";
        echo" <hr>";
    ?>
    <?php endwhile?>
</body>

</html>