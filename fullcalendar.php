<?php
  include 'config.php';
  include 'format_date.php';


  $sql = "SELECT *,COUNT(*) OVER (PARTITION BY date)AS total FROM appointment";
  $result = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>

<body>
    <style>
        .fullcalendar {
            padding-top: 20px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 150px;
        }

        .table .thead-dark th td {
            text-align: center;

        }
        .full{
            padding-top: 15px;
            padding-left: 600px;
            padding-bottom: 20px;
        }
    </style>

    <div class="fullcalendar">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h2 align="center">ตารางวันว่างทางร้าน</h2>
                    </div>

                    <div class="card-body">
                    <!-- <div class="full">
                        <form action="/action_page.php">
                           
                                <a>กรุณาเลือกวัน</a>
                                <input type="date" name="" onchange="selectday()">
                           
                            <button type="submit"><i class="fa fa-search"></i></button>
                            
                        </form>
                    </div> -->
                    
                        <table class="table">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <!-- <th width="25%">ชื่อคอร์ส</th> -->
                                    <th width="20%" >วันที่มีผู้เข้ามาจอง</th>
                                    <th width="15%">เวลาจอง</th>
                                    <th width="10%">เต็ม/ว่าง</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                                
                                
                                while($r = mysqli_fetch_assoc($result)){
                                    // $count = mb_strlen($r['date']);
                                    // echo $count;
                                    // if($r['date']  )
                                ?>
                                <tr class="text-center" style="font-size:16px;">
                                    <!-- <td><?= $r['id']?></td> -->
                                    <td><?= DBThaiDate($r['date'])?></td>
                                    <td><?= TimeThai($r['time'])?></td>
                                
                                    <td><?php 
                                    // echo $r['total'];
                                    if($r['total'] >= 2){
                                        echo '<span class="badge badge-danger" style="font-size:14px;">เต็ม</span> ';
                                    }else{
                                        echo '<span class="badge badge-primary" style="font-size:14px;"> ว่างสำหรับ 1 ท่าน</span>';
                                    }
                                    
                                    ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>












<!-- อันเก่า -->
<!-- <!DOCTYPE html>
<html>

<body>
    <style>
        .fullcalendar {
            padding-top: 20px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 150px;
        }

        .table .thead-dark th td {
            text-align: center;

        }
        .full{
            padding-top: 15px;
            padding-left: 600px;
            padding-bottom: 20px;
        }
    </style>

    <div class="fullcalendar">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2 align="center">ประวัติการจอง</h2>
                    </div>

                    <div class="card-body">
                    <div class="full">
                        <form action="/action_page.php">
                           
                                <a>กรุณาเลือกวัน</a>
                                <input type="date" name="" onchange="selectday()">
                           
                            <button type="submit"><i class="fa fa-search"></i></button>
                            
                        </form>
                    </div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="25%">ชื่อคอร์ส</th>
                                    <th width="25%">วันที่จอง</th>
                                    <th width="15%">เวลาจอง</th>
                                    <th width="15%">เต็ม/ว่าง</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>คอร์สหน้าใส</td>
                                    <td>20/11/2022</td>
                                    <td>เวลา 8.30 น.</td>
                                    <td>เต็ม</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html> -->