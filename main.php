<!DOCTYPE html>
<html lang="en">


<style>

.pricing_box {
border: #727272 solid 1px;
padding: 2px 1px 85px 1px;
max-height: 450px;
}
.pricing_box img{
width: 200px;
height: 200px;
padding-left: 60px;
padding-top: 50px;

}
</style>
<!-- body -->

<body class="main-layout">

   <header>
      <!-- header inner -->
      
   </header>
   <!-- end header inner -->
   <!-- end header -->

   <!-- what we do  -->
   <div class="we_do slin">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Welcome to H Spa </h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12 ">
               <div class="row">
                  <div class=" col-sm">
                     <div class="we_box">

                        <i><img src="images/spa1.jpg"></i>
                        <h3>คอร์สผิวหน้าใส</h3>
                        <p>ราคา 1200 ต่อ 1 ครั้ง <br>ต่อเนื่อง 10 ครั้ง ฟรี1 ครั้ง </p>
                     </div>
                  </div>
                  <div class="col-sm">
                     <div class="we_box">
                        <i><img src="images/spa2.jpg" alt="#" /></i>
                        <h3>คอร์ส Detox ผิว</h3>
                        <p>ราคา 1500 ต่อ 1 ครั้ง <br>ต่อเนื่อง 10 ครั้ง ฟรี1 ครั้ง </p>
                     </div>
                  </div>
                  <div class="col-sm">
                     <div class="we_box">
                        <i><img src="images/spa3.jpg" alt="#" /></i>
                        <h3>คอร์ส ยกกระชับใบหน้า </h3>
                        <p>ราคา 2000 ต่อ 1 ครั้ง <br>ต่อเนื่อง 10 ครั้ง ฟรี1 ครั้ง </p>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div> 
   <!-- end what we do  -->
   <!-- about -->

   <!-- our pricing -->
   <div class="back_re">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title">
                  <h2>โปรโมชั่น</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div  class="pricing slin">
         <div class="container">
            <div class="row">
               <div class="col-sm-3">
                  <div class="pricing_box">
                  <img src="images/spa1.jpg">
                     <div class="pricing_box_ti">
                        <h3> <span>฿</span>5000<strong>/10ครั้ง</strong></h3>
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
                        <h3> <span>฿</span>7000<strong>/10ครั้ง</strong></h3>
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
                  <img src="images/spa3.jpg">
                     <div class="pricing_box_ti">
                        <h3> <span>฿</span>9000<strong>/10ครั้ง</strong></h3>
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
                  <img src="images/spa4.jpg">
                     <div class="pricing_box_ti">
                        <h3> <span>฿</span>12000<strong>/10ครั้ง</strong></h3>
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
                  <img src="images/spa5.jpg">
                     <div class="pricing_box_ti">
                        <h3> <span>฿</span>19000<strong>/10ครั้ง</strong></h3>
                     </div>
                     <div class="our_pricing">
                        <span>คอร์สผลัดเซลล์ผิว</span>
                        <p>คอร์สนวดหน้าเพื่อกระตุ้นเซลล์ผิว ให้ดูอ่อนเยาว์ยิ่งขึ่น</p>
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
               
               
           

               
               </div>
         </div>
      </div>
   <!-- end our pricing -->

   <!--  footer -->

   <!-- end footer -->
 
</body>

</html>