

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
      <!-- our pricing -->
      <div  class="pricing slin">
         <div class="container">
            <div class="row">
               <?php
               include '../config.php';
               $sql = "SELECT * FROM promotion";
               $result =  mysqli_query($conn,$sql);
               $num_row = mysqli_num_rows($result);
               if($num_row > 0){
                  while($row = mysqli_fetch_array($result)){
               ?>
               <div class="col-sm-3">
                  <div class="pricing_box">
                  <img src="promotion/upload/<?=$row['image'] ?>">
                     <div class="pricing_box_ti">
                        <h3> <span>฿</span><?=$row['price'] ?><strong>/10ครั้ง</strong></h3>
                     </div>
                     <div class="our_pricing">
                        <span><?=$row['name'] ?></span>
                        <p><?=$row['details'] ?></p>
                     </div>
                  </div>
                   <button type="button" class="read_more mar_top" data-toggle="modal" data-target="#exampleModal">จอง </button>
               </div>
               <?php } }?>
            </div>

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
      
    
         
      <!-- end our pricing -->
     
  
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

