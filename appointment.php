<?php
session_start();
include '../config.php';
$id_user = $_SESSION['user_login'];
if(isset($_GET['id_booking'])){
    $id_book = $_GET['id_booking'];
// echo $id_book;
}
// $sqlbook = "SELECT id FROM booking WHERE id_user = $id_user";
// $re = mysqli_query($conn,$sqlbook);
// $r = mysqli_fetch_assoc($re);
// $id_book = $r['id'];

$sql = "SELECT appointment.id,appointment.id_user,appointment.id_booking,appointment.date,appointment.time,appointment.status FROM appointment LEFT JOIN booking on appointment.id_booking = booking.id WHERE appointment.id_user = $id_user AND appointment.id_booking = $id_book ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<header>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
</header>
<style>
    .card {
        padding-top: 5%;
        padding-left: 10%;
        padding-right: 10%;
        padding-bottom: 18%;

    }
</style>

<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2 align="center">การนัดหมาย</h2>
                    
                </div>
                <div class="card-body">
                    
                <?php if($num >= 10){?>
                    <button type="button" class="btn btn-secondary" style="margin-left: 85%; margin-bottom:2%;">ลงนัดครบแล้ว</button>
                <?php }else{?>
                    <button type="button" class="btn btn-primary" style="margin-left: 85%; margin-bottom:2%;" data-toggle="modal" data-target="#addday" data-id_user="<?= $id_user ?>" data-id_book="<?= $id_book ?>" onclick="$('#id_user').val($(this).data('id_user')); $('#id_book').val($(this).data('id_book')); $('#addday').modal('show');">เพิ่มวันนัดครั้งถัดไป</button>
                <?php }?>


                <?php if (isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                    </div>
                <?php } ?>
                <?php if (isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success" role="alert">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                    </div>
                <?php } ?>
                    <table class="table table-bordered table-hover ">
                        <thead class="table-active">
                            <tr>
                                <th scope="col" class="text-center ">ครั้งที่</th>
                                <th scope="col" class="text-center">วันที่นัด</th>
                                <th scope="col" class="text-center">เวลานัด</th>
                                <th scope="col" class="text-center">สถานะ</th>
                                <th scope="col" class="text-center">แก้ไขวัน/เวลานัด</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $i=1;
                        while($row = mysqli_fetch_assoc($result)){
                            $bookid = $row['id'];
                        ?>
                            <tr>   
                            <th scope="row" class="text-center"><?= $i ?></th>
                                <td class="text-center"><?= $row['date'] ?></td>
                                <td class="text-center"><?= $row['time'] ?></td>
                                <td class="text-center ">
                                    <?php  if($row['status'] == 1){
                                        echo '<span class="text-warning font-weight-bold">ยังไม่เข้าใช้บริการ</span>';
                                    }else{
                                        echo '<span class="text-success font-weight-bold">เข้าใช้บริการแล้ว</span>';
                                    }
                                    ?>
                                </td>
                                <td class="text-center"> 
                                
                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit" 
                                data-id="<?= $row['id'] ?>" 
                                data-date="<?= $row['date'] ?>"
                                data-time="<?= $row['time'] ?>"
                                data-id_book="<?php echo $id_book ?>"
                                onclick="$('#id').val($(this).data('id')); 
                                $('#date').val($(this).data('date'));
                                $('#time').val($(this).data('time'));
                                $('#id_book').val($(this).data('id_book'));
                                $('#edit').modal('show');">แก้ไขวัน/เวลา</button>
                                </td>

                            </tr>
                            <?php $i++;} ?>
                        </tbody>
                    </table>
                    <div class="modal fade" id="addday" tabindex="-1" role="dialog" aria-labelledby="addday" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="addday">เพิ่มวันนัด</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action="insert_app.php" method="post">
                                    <input type="hidden" name="id_user" id="id_user" value=""/>
                                    <input type="hidden" name="id_book" id="id_book" value=""/>
                                        <div class="form-group">
                                            <label for="exampleInputAge">กรุณาเลือกวัน</label>
                                            <input type="date" class="form-control" name="date">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAge">กรุณาเลือกเวลา</label>
                                            <input type="time" class="form-control" name="time">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="submit">เพิ่มวันนัด</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">แก้ไขวัน/เวลา นัดหมาย</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action="update_app.php" method="post">
                                <input type="hidden" name="id" id="id" value=""/>
                                    <div class="form-group">
                                        <label for="exampleInputAge">กรุณาเลือกวัน</label>
                                        <input type="date" class="form-control" name="date" id="date" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAge">กรุณาเลือกเวลา</label>
                                        <input type="time" class="form-control" name="time" id="time" value="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="submit">บันทึกการแก้ไข</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>