<?php include "connect.php" ?>
<?php 
    $stmt=$pdo->prepare("SELECT * from member WHERE username=:username");
    $stmt->bindParam(":username",$_GET["username"]);
    $stmt->execute();
    $row=$stmt->fetch();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        .add{
            margin: 10px;
        }
        input{
            margin: 5px;
        }
    </style>
</head>

<body>
    <form action="workshop9_redirec.php" method="post" enctype="multipart/form-data>
        <div class="add">
        username : <input type="text" name="username" value="<?=$row["username"] ?>"><br>
    password : <input type="text" name="password" value="<?=$row["password"] ?>"><br>
    name : <input type="text" name="name" value="<?=$row["name"] ?>"><br>
    address : <input type="text" name="address" value="<?=$row["address"] ?>"><br>
    mobile : <input type="text" name="mobile" value="<?=$row["mobile"] ?>"><br>
    email : <input type="text" name="email" value="<?=$row["email"] ?>"><br>
    picture : <input type="file" name="picture" id="picture"><br>
    <input type="submit" value="บันทึกข้อมูล">
        </div>
    </form>

</body>

</html>