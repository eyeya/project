<!DOCTYPE html>
<html lang="en">


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
               <button type="button" class="read_more mar_top" data-bs-toggle="modal" data-bs-target="#exampleModal">จอง </button>

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

                           <!-- // ฟอร์มกรอกข้อมูลการจอง  formaction -->
                           <form action="" >
                              <div class="form-group"> 
                                 <!-- //ดึงข้อมูลคนเข้าใช้มาโชว์ -->
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
                              <a>
                                 กรุณาเลือกวัน
                              </a>
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
  
   <!-- end footer -->

</body>

</html>