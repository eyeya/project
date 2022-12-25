<?php 
include '../config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$sql = "SELECT * FROM booking WHERE id  = '$id'";
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

                    <form class="create" action="booking/update_book.php" method="POST" >
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>รหัสจอง</label>
                                <input type="text" class="form-control" name="id" value="<?php echo $row['id']?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>ชื่อผู้จอง</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label>เบอร์โทร</label>
                                <input type="text" name="telephone" class="form-control" value="<?php echo $row['telephone']?>" >
                            </div>
                            <div class="form-group col-md-4">
                                <label>วันที่จอง</label>
                                <input type="text" name="" class="form-control" value="<?php echo $row['date'].' '.$row['time']?>" onchange="selectday()"readonly>
                            </div>

                            <div class="form-group col-md-4">
                                <label>ครั้งที่</label>
                                <input type="text" class="form-control" name="status" value="<?php echo $row['status']?>" placeholder="">
                            </div>
                        </div>
                        <p class="w3-center">
                       <input class="btn btn-success" type="submit" name="submit" value="บันทึก" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset"class="btn btn-danger" name="cancel" value="ยกเลิก" />
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('showimg');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>

</html>