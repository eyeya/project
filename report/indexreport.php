<?php
include 'format_date.php';
include 'config.php';

if(isset($_REQUEST['search'])){$search = $_REQUEST['search'];$s1 = $_REQUEST['s1'];$s2 = $_REQUEST['s2'];}else{$s1 = '';$s2 = ''; }

$chart = "SELECT DATE_FORMAT(booking.datecreate, '%M-%Y') AS month_name, SUM(course.price) as total_mounth, COUNT(booking.id_course) AS Total FROM booking LEFT JOIN course ON course.id = booking.id_course GROUP BY DATE_FORMAT(booking.datecreate, '%M-%Y') ORDER BY DATE_FORMAT(booking.datecreate, '%m-%Y') ASC;";
	$r = mysqli_query($conn, $chart);

	if (mysqli_num_rows($r) > 0) {

		while($row = mysqli_fetch_assoc($r)) {
			
			$labels[] = $row['month_name'];
			
			$data[] = $row['total_mounth'];
		}
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
                    <div class="col-12">
                        <canvas id="myChart" style="max-width:550px;max-height:250px;margin-bottom:25px;"></canvas>
                    </div>

                    <div class="search-container" style="margin-bottom:10px;">
                        <form action="" class="form-inline" method="POST">
                        <button class="btn btn-outline-dark  m-1 " type="submit" ><i class="fa fa-repeat"></i></button>
                            <a>ตั้งแต่ &nbsp;</a>
                            <select class="form-control" name="s1">
                                <option value="">--- เลือก ---</option>
                                <option value="01">มกราคม</option>
                                <option value="02">กุมภาพันธ์</option>
                                <option value="03">มีนาคม </option>
                                <option value="04">เมษายน </option>
                                <option value="05">พฤษภาคม </option>
                                <option value="06">มิถุนายน </option>
                                <option value="07">กรกฎาคม </option>
                                <option value="08">สิงหาคม  </option>
                                <option value="09">กันยายน  </option>
                                <option value="10">ตุลาคม  </option>
                                <option value="11">พฤศจิกายน </option>
                                <option value="12">ธันวาคม </option>
                            </select>
                            <a>&nbsp; ถึง &nbsp;</a>
                            <select class="form-control" name="s2">
                                <option value="">--- เลือก ---</option>
                                <option value="01">มกราคม</option>
                                <option value="02">กุมภาพันธ์</option>
                                <option value="03">มีนาคม </option>
                                <option value="04">เมษายน </option>
                                <option value="05">พฤษภาคม </option>
                                <option value="06">มิถุนายน </option>
                                <option value="07">กรกฎาคม </option>
                                <option value="08">สิงหาคม  </option>
                                <option value="09">กันยายน  </option>
                                <option value="10">ตุลาคม  </option>
                                <option value="11">พฤศจิกายน  </option>
                                <option value="12">ธันวาคม  </option>
                            </select>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary " type="submit" name="search" value="1"> ค้นหา</button>
                        </form>
                    </div>


                    <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>รหัส</th>
                        <th>เดือน</th>
                        <th>ยอดรวม</th>
                        <th>ยอดการจอง</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    //month_name คือเอาไว้นับเดือน
                    //month_id คือเอาไว้ส่งค่าไอดี ไปหน้า ที่แยกแต่ละเดือน โดยอีกหน้าจะรับค่า m_id
                    $sql = "SELECT DATE_FORMAT(booking.datecreate, '%Y-%m') AS month_name,DATE_FORMAT(booking.datecreate, '%m') AS month_id,
                    SUM(course.price) as total_price,
                    COUNT(booking.id_course) AS total_booking";
                    $sql .= " FROM booking LEFT JOIN course ON course.id = booking.id_course";
                    if($search){
                        if($s2 == ''){
                            $sql .= " WHERE DATE_FORMAT(booking.datecreate, '%m') = '$s1' ";
                        }else{
                            $sql .= " WHERE DATE_FORMAT(booking.datecreate, '%m') BETWEEN '$s1' AND '$s2'";
                        }
                    }
                    $sql .= " GROUP BY DATE_FORMAT(booking.datecreate, '%M-%Y') ";
                    $sql .= " ORDER BY DATE_FORMAT(booking.datecreate, '%m-%Y') DESC;";
                    $result = mysqli_query($conn,$sql); 
                    // echo $sql;
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result)){
                        $amount_price += $row['total_price'];
                        $amount_booking += $row['total_booking'];
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><a href="admin.php?Menu=5&Submenu=view_detail&m_id=<?php echo $row['month_id'] ?>"><?php echo DBThaiLongDate1($row['month_name']) ?></a></td>
                        <td><?php echo number_format($row['total_price']) ?></td>
                        <td><?php echo number_format($row['total_booking']) ?></td>
                    </tr>
                    <?php $i++; } ?>
                    <tr class="table-success">
                        <td  class="text-center">Total</td>
                        <td  class="text-center"></td>
                        <td ><?= number_format($amount_price);?></td>
                        <td ><?= number_format($amount_booking);?></td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <script>
	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
		type: 'bar',
		// type: 'line',
		// type: 'pie',
		data: {
			labels: <?=json_encode($labels)?>,
			datasets: [{
				label: 'จำนวน',
				data: <?=json_encode($data, JSON_NUMERIC_CHECK);?>,
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
          'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
				],
				borderWidth: 0
			}]
		},
		options: {
      legend: {
            display: false
        },
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			},
			 responsive: true,
			 title: {
				display: false
			}
		}
	});
	</script>

</body>

</html>
<!-- 
-------------- รายละเอียดภายในเดือน ---------------
SELECT course.id,course.name,course.price,booking.datecreate FROM booking LEFT JOIN course ON course.id = booking.id_course 
WHERE booking.datecreate BETWEEN '2023-01-01' AND '2023-01-31'; -->