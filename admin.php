<?php
session_start();
error_reporting(0);
include 'config.php';

if(!isset($_SESSION['admin_login'])) {
  $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
  header('location: login.php');
}

$Menu  = $_REQUEST['Menu'];
$Submenu = $_REQUEST['Submenu'];
if ($Menu == "1") {
  $selected = "class='selected'";
  if ($Submenu == "indexuser") {
    $Fileshow = "user/indexuser.php";
  } else if ($Submenu == "indexuser") {
    $Fileshow = "user/indexuser.php";
  } else if ($Submenu == "edituser") {
    $Fileshow = "user/edituser.php";
  }
} else if ($Menu == "2") {
  $selected2 = "class='selected'";
  if ($Submenu == "indexco") {
    $Fileshow = "course/indexco.php";
  } else if ($Submenu == "createcourse") {
    $Fileshow = "course/createcourse.php";
  }else if ($Submenu == "editcourse") {
    $Fileshow = "course/editcourse.php";
  }
// } else if ($Menu == "3") {
//   $selected2 = "class='selected'";
//   if ($Submenu == "indexpro") {
//     $Fileshow = "promotion/indexpro.php";
//   } else if ($Submenu == "createpro") {
//     $Fileshow = "promotion/createpro.php";
//   }else if ($Submenu == "editpro") {
//     $Fileshow = "promotion/editpro.php";
//   }
} else if ($Menu == "4") {
  $selected2 = "class='selected'";
  if ($Submenu == "indexbook") {
    $Fileshow = "booking/indexbook.php";
  } else if ($Submenu == "createbook") {
    $Fileshow = "booking/createbook.php";
  } else if ($Submenu == "editbook") {
    $Fileshow = "booking/editbook.php";
  }
  else if ($Submenu == "indexappointment") {
    $Fileshow = "appointment/indexappointment.php";
  }
} else if ($Menu == "5") {
  $selected2 = "class='selected'";
  if ($Submenu == "indexreport") {
    $Fileshow = "report/indexreport.php";
  } else if ($Submenu == "indexreport1") {
    $Fileshow = "report/indexreport1.php";
  } else if ($Submenu == "indexreport2") {
    $Fileshow = "report/indexreport2.php";
  }
} else {
  $Fileshow = "main2.php";
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>W3.CSS Template</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


  <!-- basic -->


  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: 'Kanit', sans-serif;
      text-align: center;
    }

    .w3-black {
      background-color: pink;
    }

    .container {
      padding-left: 250px;
      padding-top: 70px;
    }

    .sidebar {
      padding-top: 30px;
    }

    .w3-col img {
      width: 1000px;
      height: 70px;

    }

    .welcome {
      padding-top: 30px;
      font-size: 20px;
    }

    .w3-table-all th {
      text-align: center;
    }

    table {
      border-collapse: collapse;
      width: 70%;
      text-align: center;

    }

    th {
      background-color: IndianRed;
      color: white;
    }

    .w3-table-all td {
      text-align: center;
    }

    .btn-primary {
      margin-left: 750px;
      font-size: 14px;
    }

    .form-row {
      padding-left: 50px;
      padding-right: 50px;
      padding-top: 30px;
      /* font-size: 20px; */

    }

    .w3-rest {
      padding-left: 50px;
      padding-right: 50px;
      padding-top: 30px;
    }

    .headshow {

      width: 900px;
      font-size: 45px;
    }

    .w3-center {
      padding-bottom: 30px;
      text-align: center;
    }

    .w3-bar-block {
      font-size: 20px;
    }

    .aa {
      margin-top: 321px;

    }
  </style>
</head>

<body class="w3-light-grey">

  <!-- Top container -->
  <div class="w3-bar w3-top  w3-black w3-large" style="z-index:4; ">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>Menu</button>
    <span class="w3-bar-item w3-right " style="color:white;"><i class="fa fa-user-circle"></i>DASHBOARD </span>
  </div>

  <!-- Sidebar/menu -->
  <div class="sidebar">
    <nav class="w3-sidebar w3-collapse w3-pale-red w3-hover-pale-red" style="z-index:3;width:300px;" id="mySidebar"><br>
      <div class="w3-container w3-row">
        <div class="w3-col s4">
          <img src="images/spa1.jpg" class="w3-circle w3-margin-right" style="width:46px">
        </div>

        <!-- //class ตกแต่ง ตรงwelcome -->
        <div class="welcome">
          <div class="w3-col s8 w3-bar">
            <span>Welcome, <strong><?php echo $_SESSION['username_login'];?></strong></span><br>
          </div>
        </div>

      </div>
      <hr>

      <div class="w3-bar-block">

        <a class="w3-bar-item w3-button w3-padding" onclick="location. href='admin.php?Menu=1&Submenu=indexuser';"><i class="fa fa-user-circle"></i>&nbsp;ข้อมูลผู้ใช้งาน</a>
        <a class="w3-bar-item w3-button w3-padding" onclick="location. href='admin.php?Menu=2&Submenu=indexco';"><i class="fa fa-clipboard"></i>&nbsp;ข้อมูลคอร์ส</a>
        <!-- <a class="w3-bar-item w3-button w3-padding" onclick="location. href='admin.php?Menu=3&Submenu=indexpro';"><i class="fa fa-clipboard"></i>&nbsp;ข้อมูลโปรโมชั่น</a> -->
        <a class="w3-bar-item w3-button w3-padding" onclick="location. href='admin.php?Menu=4&Submenu=indexbook';"><i class="fa fa-list"></i>&nbsp;ข้อมูลการจอง</a>
        <a class="w3-bar-item w3-button w3-padding" onclick="location. href='admin.php?Menu=4&Submenu=indexappointment';"><i class="fa fa-list"></i>&nbsp;ตารางนัดหมาย</a>
        <div class="w3-dropdown-hover">
          <button class="w3-button"><i class="fa fa-folder"></i>&nbsp;รายงานสรุป</button>
          <div class="w3-dropdown-content  w3-card-4">
            <a class="w3-bar-item w3-button w3-padding" onclick="location. href='admin.php?Menu=5&Submenu=indexreport';"><i class="fa fa-folder"></i>&nbsp;สรุปยอดรายเดือน</a>
            <a class="w3-bar-item w3-button w3-padding" onclick="location. href='admin.php?Menu=5&Submenu=indexreport1';"><i class="fa fa-folder"></i>&nbsp;สรุปคอร์สที่ได้รับความนิยม</a>
            <a class="w3-bar-item w3-button w3-padding" onclick="location. href='admin.php?Menu=5&Submenu=indexreport2';"><i class="fa fa-folder"></i>&nbsp;สรุปโปรโมชั่นที่ได้รับความนิยม</a>
          </div>
        </div>
      </div>
      <div class="aa">
      <a  href="logout.php"><button class="w3-button w3-block w3-black" style="width:100%">ออกจากระบบ</button></a>
      </div>
    </nav>
  </div>
  <div class="row justify-content-end">
    <div class="container">

      <?php
      include($Fileshow);
      ?>

    </div>
  </div>


  <script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidebar, and add overlay effect
    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
      } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
      }
    }

    // Close the sidebar with the close button
    function w3_close() {
      mySidebar.style.display = "none";
      overlayBg.style.display = "none";
    }
  </script>
  <!-- // bootstarp4 -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- // bootstarp4 -->
</body>

</html>