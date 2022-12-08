<?php
session_start();
include_once '../config.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $details = $_POST['details'];
    
    $image = $_FILES['image'];

    $old_img = $_POST['old_img'];
    $upload = $_FILES['image']['name'];

    //เช็คการอัพโหลดรูป ถ้าของมูลไม่ว่างให้ทำการอัพโหลดรูปไปไว้ในไฟล์อัพโหลด
    if ($upload != '') {
        $allow = array('jpg', 'jpeg', 'png'); //ตัวแปรสำหรับเก็บarray ที่มี 'jpg', 'jpeg', 'png'
        $extension = explode('.', $image['name']); //การแยกข้อมูลออก
        $fileActExt = strtolower(end($extension)); //แปลงข้อมูลให้เป็นตัวพิมพ์เล็กด้วยคำสั่ง strtolower
        $fileNew = rand() . "." . $fileActExt;  // random ค่าตะวเลขออกมา
        $filePath = 'upload/'.$fileNew; //ตัวแปรสำหรับpath ที่เก็บรูปในไฟล์อัพโหลดเก็บเป็นตัวที่ถูกrandom แล้ว

        //าำการเช็คมรค่าในarray หรือไม่ 
        if (in_array($fileActExt, $allow)) {
            //ถ้าไฟล์รูปมีขนาดมากกว่า0 และ ไฟล์รูป error เป็น 0 รูปจะย้ายไปเก็บใน$filePath
            if ($image['size'] > 0 && $image['error'] == 0) {
               move_uploaded_file($image['tmp_name'], $filePath);
            }
        }
        //และทำการอัปเดทข้อมูลที่อัพเข้าไปใหม่ 
        $sql = "UPDATE course SET name='$name',price='$price',details=' $details',image='$fileNew' WHERE id='$id'";
        $result = mysqli_query($conn,$sql);

    } else {
        //ถ้าไม่จะดึงรุปเก่ามาอัพ
        $fileNew = $old_img;
        $sql = "UPDATE course SET name='$name',price='$price',details=' $details',image='$fileNew' WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
    }

    if($result){
        $_SESSION['success'] = "แก้ไขข้อมูลสำเร็จ";
        header( "location: ../admin.php?Menu=2&Submenu=indexco" );
    }else{
        $_SESSION['error'] = "แก้ไขข้อมูลไม่สำเร็จ";
        header( "location: ../admin.php?Menu=2&Submenu=indexco" );
    }
}
