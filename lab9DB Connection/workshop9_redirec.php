<?php include "connect.php" ?>
<?php 
$stmt =$pdo->prepare("UPDATE member set password=?,name=?,address=?,mobile=?,email=? WHERE username=?");
$stmt->bindParam(1,$_POST["password"]);
$stmt->bindParam(2,$_POST["name"]);
$stmt->bindParam(3,$_POST["address"]);
$stmt->bindParam(4,$_POST["mobile"]);
$stmt->bindParam(5,$_POST["email"]);
$stmt->bindParam(6,$_POST["username"]);
if ($stmt->execute()) 
if($_FILES["picture"]["tmp_name"]){
    $targetfile = 'member_photo/'.$_POST["username"].'.jpg';
    $upload = move_uploaded_file($_FILES["picture"]["tmp_name"],$targetfile);
    if($upload){
        header('location: workshop5_detail.php?username='.$_POST["username"]);
        die();
    }
}
header('location: workshop5_detail.php?username='.$_POST["username"]);
echo "แก้ไขรายละเอียด " . $_POST["username"] . " สำเร็จ";
?>