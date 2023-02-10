<?php
session_start();
include_once '../config.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $telephone = $_POST['telephone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $u_role = $_POST['u_role'];


    $new_password = md5($password);

    $sql = "UPDATE user SET name='$name',lastname='$lastname',age=' $age',telephone='$telephone',username='$username',password='$new_password',u_role='$u_role' WHERE id='$id'";
    $result = mysqli_query($conn,$sql);

    if($result){
        $_SESSION['success'] = "แก้ไขข้อมูลสำเร็จ";
        header( "location: ../admin.php?Menu=1&Submenu=indexuser" );
    }else{
        $_SESSION['error'] = "แก้ไขข้อมูลไม่สำเร็จ";
        header( "location: ../admin.php?Menu=1&Submenu=indexuser" );
    }
}
