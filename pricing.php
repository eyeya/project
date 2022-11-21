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
   <title>course</title>
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
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<style>
   .pricing_box {
      border: #727272 solid 1px;
      padding: 2px 1px 85px 1px;
      max-height: 450px;
   }

   .pricing_box img {
      width: 200px;
      height: 200px;
      padding-left: 60px;
      padding-top: 50px;

   }
</style>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
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
                           <li class="nav-item active">
                              <a class="nav-link" href="index.php">หน้าแรก</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="course.php">คอร์ส</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="we-do.php">โปรโมชั่น</a>
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

            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   <div class="back_re">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title">
                  <h2>คอร์สนวดหน้า</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- our pricing -->
   <div class="pricing slin">
      <div class="container">
         <div class="row">
            <div class="col-sm-3">
               <div class="pricing_box">
                  <img src="images/spa1.jpg">
                  <div class="pricing_box_ti">
                     <h3> <span>฿</span>600<strong>/ครั้ง</strong></h3>
                  </div>
                  <div class="our_pricing">
                     <span>คอร์สผลัดเซลล์ผิว</span>
                     <p>เป็นคอร์ส นวดเพื่อผลัดเซลล์ของผิวที่ตายให้หลุดออก</p>
                  </div>
               </div>
               <button type="button" class="read_more mar_top" data-toggle="modal" data-target="#exampleModal">จอง </button>

               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">จองคอร์ส</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>

                        <div class="modal-body">

                           <!-- // ฟอร์มกรอกข้อมูลการจอง -->
                           <form>
                              <div class="form-group">
                                 <label for="exampleInputName">ชื่อ-นามสกุล</label>
                                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรุณากรอกชื่อ-นามสกุล">

                              </div>
                              <div class="form-group">
                                 <label for="exampleInputAge">อายุ</label>
                                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณากรอกอายุ">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputAge">เบอร์โทร</label>
                                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณากรอกเบอร์โทร">
                              </div>
                              <!-- // ปฏิทินวันว่าง -->

                              <input type="date" id="ddmmyy" name="datenumregister" onchange="selectday()">
                           </form>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
                           <button type="button" class="btn btn-secondary">ยกเลิก</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="pricing_box">
                  <img src="images/spa2.jpg">
                  <div class="pricing_box_ti">
                     <h3> <span>฿</span>800<strong>/ครั้ง</strong></h3>
                  </div>
                  <div class="our_pricing">
                     <span>คอร์สเติมน้ำให้ผิว</span>
                     <p>คอร์สนวดหน้าควบคู่การใช้ผลิตภัณฑ์ที่ช่วยในการเพิ่มความชุ่มชื้น</p>
                  </div>
               </div>
               <button type="button" class="read_more mar_top" data-toggle="modal" data-target="#exampleModal">จอง </button>

               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">จองคอร์ส</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>

                        <div class="modal-body">

                           <!-- // ฟอร์มกรอกข้อมูลการจอง -->
                           <form>
                              <div class="form-group">
                                 <label for="exampleInputName">ชื่อ-นามสกุล</label>
                                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรุณากรอกชื่อ-นามสกุล">

                              </div>
                              <div class="form-group">
                                 <label for="exampleInputAge">อายุ</label>
                                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณากรอกอายุ">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputAge">เบอร์โทร</label>
                                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณากรอกเบอร์โทร">
                              </div>
                              <!-- // ปฏิทินวันว่าง -->


                           </form>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
                           <button type="button" class="btn btn-secondary">ยกเลิก</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-sm-3">
               <div class="pricing_box">
                  <img src="images/spa3.jpg">
                  <div class="pricing_box_ti">
                     <h3> <span>฿</span>1000<strong>/ครั้ง</strong></h3>
                  </div>
                  <div class="our_pricing">
                     <span>คอร์สหน้าใส</span>
                     <p>คอร์สนวดหน้าเพื่อให้ผิวมีความกระจ่างใส มีออร่า</p>
                  </div>
               </div>

               <button type="button" class="read_more mar_top" data-toggle="modal" data-target="#exampleModal">จอง </button>

               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">จองคอร์ส</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>

                        <div class="modal-body">

                           <!-- // ฟอร์มกรอกข้อมูลการจอง -->
                           <form>
                              <div class="form-group">
                                 <label for="exampleInputName">ชื่อ-นามสกุล</label>
                                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรุณากรอกชื่อ-นามสกุล">

                              </div>
                              <div class="form-group">
                                 <label for="exampleInputAge">อายุ</label>
                                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณากรอกอายุ">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputAge">เบอร์โทร</label>
                                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณากรอกเบอร์โทร">
                              </div>
                              <!-- // ปฏิทินวันว่าง -->


                           </form>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
                           <button type="button" class="btn btn-secondary">ยกเลิก</button>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <div class="col-sm-3">
               <div class="pricing_box">
                  <img src="images/spa4.jpg">
                  <div class="pricing_box_ti">
                     <h3> <span>฿</span>1300<strong>/ครั้ง</strong></h3>
                  </div>
                  <div class="our_pricing">
                     <span>คอร์สยกกระชับ</span>
                     <p>คอร์สนวดหน้า เพื่อยกกระชับเพื่อให้ผิวที่อ่อนคล้อยมีความกระชับมากยิ่งขึ่น</p>
                  </div>
               </div>
               <button type="button" class="read_more mar_top" data-toggle="modal" data-target="#exampleModal">จอง </button>

               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">จองคอร์ส</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>

                        <div class="modal-body">

                           <!-- // ฟอร์มกรอกข้อมูลการจอง -->
                           <form>
                              <div class="form-group">
                                 <label for="exampleInputName">ชื่อ-นามสกุล</label>
                                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรุณากรอกชื่อ-นามสกุล">

                              </div>
                              <div class="form-group">
                                 <label for="exampleInputAge">อายุ</label>
                                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณากรอกอายุ">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputAge">เบอร์โทร</label>
                                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณากรอกเบอร์โทร">
                              </div>
                              <!-- // ปฏิทินวันว่าง -->

                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
                           <button type="button" class="btn btn-secondary">ยกเลิก</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="pricing_box">
                  <img src="images/spa4.jpg">
                  <div class="pricing_box_ti">
                     <h3> <span>฿</span>1300<strong>/ครั้ง</strong></h3>
                  </div>
                  <div class="our_pricing">
                     <span>คอร์สยกกระชับ</span>
                     <p>คอร์สนวดหน้า เพื่อยกกระชับเพื่อให้ผิวที่อ่อนคล้อยมีความกระชับมากยิ่งขึ่น</p>
                  </div>
               </div>
               <button type="button" class="read_more mar_top" data-toggle="modal" data-target="#exampleModal">จอง </button>

               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">จองคอร์ส</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>

                        <div class="modal-body">

                           <!-- // ฟอร์มกรอกข้อมูลการจอง -->
                           <form>
                              <div class="form-group">
                                 <label for="exampleInputName">ชื่อ-นามสกุล</label>
                                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรุณากรอกชื่อ-นามสกุล">

                              </div>
                              <div class="form-group">
                                 <label for="exampleInputAge">อายุ</label>
                                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณากรอกอายุ">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputAge">เบอร์โทร</label>
                                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณากรอกเบอร์โทร">
                              </div>
                              <!-- // ปฏิทินวันว่าง -->

                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
                           <button type="button" class="btn btn-secondary">ยกเลิก</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>





         </div>
      </div>
   </div>



   </div>
   </div>
   </div>



   <!-- end our pricing -->

   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <ul class="conta">
                     <li><i class="fa fa-map-marker" aria-hidden="true"></i> Passages of Lorem Ipsum available</li>
                     <li><i class="fa fa-phone" aria-hidden="true"></i> Call : +012334567890</li>
                     <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                  </ul>
               </div>
               <div class=" col-md-3 col-sm-6">
                  <h3>About </h3>
                  <p class="variat">There are many variations of passages of Lorem Ipsum available, but the majority have suffered le</p>
               </div>
               <div class=" col-md-3 col-sm-6">
                  <h3>Nail Salon </h3>
                  <p class="variat">There are many variations of passages of Lorem Ipsum available, but the majority have suffered le</p>
               </div>
               <div class="col-md-2 col-sm-6">
                  <h3>Useful Link</h3>
                  <ul class="link_menu">
                     <li><a href="index.html">Home</a></li>
                     <li><a href="about.html"> About</a></li>
                     <li><a href="we-do.html">What we do</a></li>
                     <li class="active"><a href="pricing.html">Pricing</a></li>
                     <li><a href="contact.html">Contact Us</a></li>
                  </ul>
               </div>
               <div class="col-md-4 col-sm-6">
                  <h3>Subscribe</h3>
                  <form class="bottom_form">
                     <a class="right_btn" href="Javascript:void(0)"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                     <p>There are many variations of passages </p>
                  </form>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                  </div>
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