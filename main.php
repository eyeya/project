<?php 
include '../config.php';
?>
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
                  <?php
            
                  $sql1 = "SELECT image,name,details FROM course LIMIT 3";
                  $result1 =  mysqli_query($conn, $sql1);
                  $num_row = mysqli_num_rows($result1);
                  if ($num_row > 0) {
                     while ($row1 = mysqli_fetch_array($result1)) {
                  ?>
                  <div class=" col-sm d-flex align-items-stretch">
                     <div class="we_box shadow-sm">
                        <i><img src="course/upload/<?= $row1['image'] ?>"></i>
                        <h3><?= $row1['name'] ?></h3>
                        <p class="card-text"><?= $row1['details'] ?></p>
                     </div>
                  </div>
                  <?php } } ?>

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
   <div class="pricing slin">
      <div class="container">
         <div class="row">
            <?php
            
            $sql = "SELECT * FROM course";
            $result =  mysqli_query($conn, $sql);
            $num_row = mysqli_num_rows($result);
            if ($num_row > 0) {
               while ($row = mysqli_fetch_array($result)) {
                  
            ?>
                  <div class="col-sm-3 ">
                     <div class="pricing_box shadow-sm">
                        <img src="course/upload/<?= $row['image'] ?>">
                        <div class="pricing_box_ti">
                           <h3> <span>฿</span><?= number_format($row['price_promotion']); ?><strong>/10ครั้ง</strong></h3>
                        </div>
                        <div class="our_pricing">
                           <span><?= $row['name'] ?></span>
                           <p><?= $row['details'] ?></p>
                        </div>
                     </div>
                     <button class="read_more mar_top" data-id="<?= $row['id'] ?>" onclick="$('#dataid').val($(this).data('id')); $('#form_promotion').modal('show');" >จอง</button>
                  
                  </div>
            <?php }
            } ?>
         </div>

         <div class="modal fade" id="form_promotion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                     <form action="booking/addbooking.php" method="POST">
                        <input type="hidden" name="id_promotion" id="dataid" value=""/>
                        <input type="hidden" name="id_user" value="<?php echo $_SESSION['user_login']?>">
                        <div class="form-group">
                           <label for="exampleInputName">ชื่อ-นามสกุล</label>
                           <input type="text" class="form-control"  placeholder="กรุณากรอกชื่อ-นามสกุล" value="<?php echo $_SESSION['username_login']?>" name="name">
                        </div>
         
                        <div class="form-group">
                           <label for="exampleInputAge">เบอร์โทร</label>
                           <input type="tel" class="form-control" placeholder="กรุณากรอกเบอร์โทร" name="telephone">
                        </div>
                        <!-- // ปฏิทินวันว่าง -->
                        <div class="form-group">
                           <label for="exampleInputAge">กรุณาเลือกวัน</label>
                           <input type="date" class="form-control"  name="date">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputAge">กรุณาเลือกเวลา</label>
                           <input type="time" class="form-control"  name="time">
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="submit" name="addpro" class="btn btn-primary" >ยืนยัน</button>
                        <button type="button"  class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                     </div>
                  </form>
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