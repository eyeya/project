<?php 
include '../config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$sql = "SELECT * FROM appointment WHERE id  = '$id'";
$result =  mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">


<style>
    .fullca {
        width: 250px;
        margin-top: 30px;
    }
</style>
<!-- body -->

<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2>ข้อมูลการจอง</h2>
                </div>

                <div class="card-body">

                    <form class="create" action="appointment/update_app.php" method="POST" >
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-3">
                                <label>รหัสจอง</label>
                                <input type="text" class="form-control" name="id" value="<?php echo $row['id']?>" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label>วันที่จอง</label>
                                <input type="text" name="date" class="form-control" value="<?php echo $row['date']?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label>เวลาที่จอง</label>
                                <input type="text" name="time" class="form-control" value="<?php echo $row['time']?>">
                            </div>

                            <div class="form-group col-md-3">
                                <label>แก้ไขสถานะ</label>
                                <?php
                                if($row['status'] == '1'){
                                ?>
                                <button class="btn btn-success btn-block" name="approve" value="2">เข้าใช้บริการแล้ว</button>
                                <?php }else{ ?>
                                <button class="btn btn-light btn-block" disabled>เข้าใช้บริการแล้ว</button>
                                <?php }?>
                            </div>
                        </div>
                        <p class="w3-center">
                            <input class="btn btn-success" type="submit" name="submit" value="บันทึก" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- <input type="reset"class="btn btn-danger" name="cancel" value="ยกเลิก" /> -->
                            <a href="admin.php?Menu=4&Submenu=indexappointment" class="btn btn-danger">ย้อนกลับ</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


</html>