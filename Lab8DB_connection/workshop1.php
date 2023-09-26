<?php include "connect.php"; ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <table border="1">
        <tr>
            <td>รหัสสินค้า</td>
            <td>ชื่อสินค้า</td>
            <td>รายละเอียด</td>
            <td>ราคา</td>
        </tr>
        <?php
        $stmt = $pdo->prepare("SELECT * FROM product");
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo"
            <tr>
          <td>".$row["pid"]."</td> 
          <td>". $row["pname"]."</td> 
          <td>".$row["pdetail"]."</td> 
          <td>".$row["price"]."บาท</td> 
           </tr>";
         } 
         ?>
    </table>
</body>

</html>