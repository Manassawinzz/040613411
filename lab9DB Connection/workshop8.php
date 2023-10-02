<!DOCTYPE html>
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
    <form action="workshop8_redirec.php" method="post" enctype="multipart/form-data>
        <div class="add">
        username : <input type="text" name="username"><br>
    password : <input type="text" name="password"><br>
    name : <input type="text" name="name"><br>
    address : <input type="text" name="address"><br>
    mobile : <input type="text" name="mobile"><br>
    email : <input type="text" name="email"><br>
    picture : <input type="file" name="picture" id="picture"><br>
    <input type="submit" value="เพิ่มสมาชิก ">
        </div>
    </form>

</body>

</html>