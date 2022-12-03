<?php 
session_start();
include 'config.php';
// check btnLogin(เป็นชื่อปุ่มที่เรากด submit เอามาเช็คว่าส่งค่ามามั้ย)
if(isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

// md5ใช้ในการแปลงรหัส ในที่นี้แปลง password เพื่อไม่ให้รู้ว่ารหัสผ่านอะไร

    $password_c = md5($password);
//มีการเลือก selete username password จาก DB มา
  	$sql = "SELECT * FROM user WHERE username ='$username' AND password='$password_c'";
  	$result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

//ถ้า row มากกว่า1 ให้เก็บ seesion username_login และถ้า rowของ u_role เท่ากับ admin จะเก็บ session เป็น admin_login 
//

  	if($result->num_rows > 0) {
  	    $_SESSION['username_login'] = $row['name'].' '.$row['lastname'];
        if($row['u_role'] == 'admin'){
        $_SESSION['admin_login'] = $row['id'];
        header("location: admin.php");
        }else{
        $_SESSION['user_login'] = $row['id'];
        header("location: index.php");
        }
  	}else {
        $_SESSION['error'] = 'username หรือ password ไม่ถูกต้อง ';
        header("location: login.php");
  	}

}

?>