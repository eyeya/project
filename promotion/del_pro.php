<?php
session_start();
include_once '../config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql1 = "SELECT * FROM promotion WHERE id = '$id'";
    $result1 = mysqli_query($conn,$sql1);
    $row = mysqli_fetch_assoc($result1);

    $location = 'upload/'.$row['image'].''; //ตัวแปรที่อยู่ของภาพ

    if(unlink($location)){ //unlink คือ การลบรูปออกจากโฟเดอร์ที่จัดเก็บอยู่

        $sql = "DELETE FROM promotion WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
    }
    
    if($result){
        $_SESSION['success'] = "ลบข้อมูลสำเร็จ";
        header( "location: ../admin.php?Menu=3&Submenu=indexpro" );
    }else{
        $_SESSION['error'] = "ลบข้อมูลไม่สำเร็จ";
        header( "location: ../admin.php?Menu=3&Submenu=indexpro" );
    }
}

?>