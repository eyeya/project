<?php
include 'format_date.php';
include 'config.php';

if(isset($_REQUEST['m_id'])){
    $m_id = $_REQUEST['m_id'];
}

?>

<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>

<body>
    <style>

    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2>รายงานสรุปยอดรายเดือน</h2>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>รหัส</th>
                        <th>ชื่อคอร์ส</th>
                        <th>ราคา</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $sql = "SELECT course.id,course.name,course.price,booking.datecreate FROM booking LEFT JOIN course ON course.id = booking.id_course WHERE DATE_FORMAT(booking.datecreate, '%m') = '$m_id' ";
                    $result = mysqli_query($conn,$sql); 
                    // echo $sql;
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result)){
                        $amount_price += $row['total_price'];
                        $amount_booking += $row['total_booking'];
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['name'] ?></a></td>
                        <td><?php echo number_format($row['price']) ?></td>
                    </tr>
                    <?php $i++; } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<!-- 
-------------- รายละเอียดภายในเดือน ---------------
SELECT course.id,course.name,course.price,booking.datecreate FROM booking LEFT JOIN course ON course.id = booking.id_course 
WHERE booking.datecreate BETWEEN '2023-01-01' AND '2023-01-31'; -->