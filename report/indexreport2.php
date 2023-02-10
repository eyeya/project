<?php 
include 'config.php';
  $chart = "SELECT course.name,booking.id_course,COUNT(booking.id_course) AS Total FROM booking LEFT JOIN course ON course.id = booking.id_course WHERE course.type = 2 GROUP BY booking.id_course ORDER BY Total DESC;";
	$r = mysqli_query($conn, $chart);

	if (mysqli_num_rows($r) > 0) {

		while($row = mysqli_fetch_assoc($r)) {
			
			$labels[] = $row['name'];
			
			$data[] = $row['Total'];
		}
	}

?>
<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
<body>
<style>
  
</style> <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h2>รายงานสรุปโปรโมชั่นที่ได้รับความนิยม</h2>
        </div>

        <div class="card-body">
          <div class="col-4">
          <canvas id="myChart" width="250" height="250"></canvas>

          </div>
        <!-- <a href=""><button type="button" class="btn btn-primary"><i class="fa fa-print"></i>&nbsp; Print</button></a> -->
        <table class="table table-striped">
            <!-- <table class="w3-table-all w3-card-4"> -->
            <thead>
              <tr>
                <th>รหัส</th>
                <th>ชื่อคอร์ส</th>
                <th>จำนวน</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              include 'config.php';
              $sql = "SELECT course.name,booking.id_course,COUNT(booking.id_course) AS Total FROM booking LEFT JOIN course ON course.id = booking.id_course WHERE course.type = 2 GROUP BY booking.id_course ORDER BY Total DESC;";
              $result = mysqli_query($conn,$sql); 
              $i = 1;
              while($row = mysqli_fetch_assoc($result)){
              ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['Total'] ?></td>
              </tr>
              <?php $i++; } ?>
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
