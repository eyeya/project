<?php
include 'config.php';
$sql = "SELECT date FROM appointment"; 
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {

                events: [
                    // เปิด loop 
                    
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    {
                        title: 'จองแล้ว',
                        start: '<?=  $row['date'] ?>',
                        allDay: true // ถ้าเป็น ture ทั้งวัน false ตามเวลาที่กำหนด
                    },
                    <?php }?> 
                    //ปิดลูป
                    // {
                    //     title: 'จองแล้ว',
                    //     start: '2023-02-24T13:30:00', //T12:30 เวลาที่เราจะให้มันขึ้น
                    //     allDay: false // ถ้าเป็น ture ทั้งวัน false ตามเวลาที่กำหนด
                    // },
                    // {
                    //     title: 'จองแล้ว',
                    //     start: '2023-03-01T13:30:00',
                    //     allDay: false // ถ้าเป็น ture ทั้งวัน false ตามเวลาที่กำหนด
                    // },
                    // {
                    //     title: 'จองแล้ว',
                    //     start: '2023-03-09T13:30:00',
                    //     allDay: false // ถ้าเป็น ture ทั้งวัน false ตามเวลาที่กำหนด
                    // },
                    // {
                    //     title: 'จองแล้ว',
                    //     start: '2023-03-15T13:30:00',
                    //     allDay: false // ถ้าเป็น ture ทั้งวัน false ตามเวลาที่กำหนด
                    // }
                ],

                initialView: 'dayGridMonth'
            });
            calendar.render();
        });
    </script>
</head>

<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-header">
                <div class="card-header" style="text-align: center;">
                    <h1>หากขึ้นจองแล้วในปฏิทิน 2 ครั้ง ท่านจะไม่สามารถจองวันที่ปรากฎจองได้</h1>
                </div>
                <div id='calendar' style="margin: 100px; "></div>

            </div>
        </div>
    </div>
</body>

</html>