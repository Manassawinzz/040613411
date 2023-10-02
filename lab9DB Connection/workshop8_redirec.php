<?php include "connect.php" ?>
<?php
    $stmt =$pdo->prepare("INSERT INTO member VALUE(?,?,?,?,?,?)");
    $stmt->bindParam(1,$_POST["username"]);
    $stmt->bindParam(2,$_POST["password"]);
    $stmt->bindParam(3,$_POST["name"]);
    $stmt->bindParam(4,$_POST["address"]);
    $stmt->bindParam(5,$_POST["mobile"]);
    $stmt->bindParam(6,$_POST["email"]);
    $stmt->execute();
    if($_FILES["picture"]["tmp_name"]){
        $targetfile = 'member_photo/'.$_POST["username"].'.jpg';
        $upload = move_uploaded_file($_FILES["picture"]["tmp_name"],$targetfile);
        if($upload){
            header('location: workshop5detail.php?username='.$_POST["username"]);
            die();
        }
    }
    header("location:workshop6.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    เพิ่มข้อมูลสำเร็จ<?=$_POST["username"]?>
</body>
</html>