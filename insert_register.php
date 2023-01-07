<?php
session_start();
include 'config.php';

if(isset($_POST['btnRegister'])){
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $telephone = $_POST['telephone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $u_role = 'user';


    $check_user = "SELECT * FROM user WHERE `username` = '$username'";
    $result = mysqli_query($conn,$check_user);
    $user = mysqli_fetch_assoc($result); //แปลงเป็น array

    if($user) { 
        $_SESSION['error'] = 'ชื่อนี้มีผู้ใช้อยู่แล้ว';
        header("location: register.php");
    }else{
        $new_password = md5($password);
        $sql = "INSERT INTO user(name,lastname,age,telephone,username,password,u_role)VALUE('$name','$lastname','$age','$telephone','$username','$new_password','$u_role')";
        $result1 = mysqli_query($conn,$sql)or die("Error Query ['.$sql.']");
    
        if($result1){
            $_SESSION['success'] = 'สมัครสมาชิกสำเร็จ';
            header("location:login.php");
        }else{
            $_SESSION['error'] = 'มีข้อผิดพลาด';
            header("location:register.php");
        }
    }

}



?>