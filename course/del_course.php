<?php
session_start();
include_once '../config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM course WHERE id='$id'";
    $result = mysqli_query($conn,$sql);

    if($result){
        $_SESSION['success'] = "ลบข้อมูลสำเร็จ";
        header( "location: ../admin.php?Menu=2&Submenu=indexco" );
    }else{
        $_SESSION['error'] = "ลบข้อมูลไม่สำเร็จ";
        header( "location: ../admin.php?Menu=2&Submenu=indexco" );
    }
}

?>