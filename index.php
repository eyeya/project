<?php
session_start();
error_reporting(0);
include 'config.php';
$Menu  = $_REQUEST['Menu'];
$Submenu = $_REQUEST['Submenu'];
if ($Menu == "1") {
   $selected = "class='selected'";
   if ($Submenu == "main") {
     $Fileshow = "main.php";
   } 
 } else if ($Menu == "2") {
   $selected2 = "class='selected'";
   if ($Submenu == "pricing") {
     $Fileshow = "pricing.php";
   }
 } else if ($Menu == "3") {
   $selected2 = "class='selected'";
   if ($Submenu == "promotion") {
     $Fileshow = "promotion.php";
   }
 } 
 else {
   $Fileshow = "main.php";
 }
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Welcome to H SPA</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<style>
 .img{
   max-width: 500px;
 }
</style>
<!-- body -->

<body class="main-layout">

   <header>
      <!-- header inner -->
      <div class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.html"><img src="images/HSPA.png" alt="#" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item">
                           <a class="nav-link" onclick="location. href='index.php?Menu=1&Submenu=main';">หน้าแรก</a>
                              
                           </li>
                           <li class="nav-item ">
                           <a class="nav-link" onclick="location. href='index.php?Menu=2&Submenu=pricing';">คอร์ส</a>
                           
                           </li>
                           <li class="nav-item">
                           <a class="nav-link" onclick="location. href='index.php?Menu=3&Submenu=promotion';">โปรโมชั่น</a>
                              
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="pricing.php">ปฏิทินวันว่าง</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="contact.php">ประวัติการจอง</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
               <div class="z">
                  <ul class="social_icon">
                     <button type="button" class="btn btn-primary">สมัครสมาชิก</button>
                     <button type="button" class="btn btn-secondary">เข้าสู่ระบบ</button>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </header>
   
   
   <?php
          include($Fileshow);
          ?>
  
  

   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <ul class="conta">
                     <li><i class="fa fa-map-marker" aria-hidden="true"></i>87/3 หมู่3 ต.คลองสวนพลู อ.เมือง  จ.พระนครศรีอยุธยา  13000</li>
                     <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 063-147-2519</li>

                  </ul>
               </div>
              
            </div>
         </div>
         
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>