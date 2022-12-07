<?php
session_start();
include_once '../config.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $details = $_POST['details'];
    $image = $_POST['image'];
  


    $new_password = md5($password);

    $sql = "UPDATE course SET name='$name',price='$price',details=' $details',image='$image' WHERE id='$id'";
    $result = mysqli_query($conn,$sql);

    if($result){
        $_SESSION['success'] = "แก้ไขข้อมูลสำเร็จ";
        header( "location: ../admin.php?Menu=2&Submenu=indexco" );
    }else{
        $_SESSION['error'] = "แก้ไขข้อมูลไม่สำเร็จ";
        header( "location: ../admin.php?Menu=2&Submenu=indexco" );
    }
}
