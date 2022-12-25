<?php
session_start();
include_once '../config.php';

if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $status = $_POST['status'];

    $sql = "UPDATE booking SET name='$name',telephone='$telephone',status='$status' WHERE id = '$id' ";
    $result = mysqli_query($conn,$sql);

    if($result){
        $_SESSION['success'] = "แก้ไขข้อมูลสำเร็จ";
        header( "location: ../admin.php?Menu=4&Submenu=indexbook" );
    }else{
        $_SESSION['error'] = "แก้ไขข้อมูลไม่สำเร็จ";
        header( "location: ../admin.php?Menu=4&Submenu=indexbook" );
    }
}
?>