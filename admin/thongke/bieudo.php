<a href="index.php?act=thongke"><i class="fa-solid fa-arrow-right fa-rotate-180 fa-2xl"></i></a>
<div class="row">
    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                <?php
                    $tongdm=count($list_thongke);
                    $i=1;
                    foreach ($list_thongke as $thongke) {
                       extract($thongke);
                       if ($i==$tongdm) {
                        $dauphay="";
                       } else {
                        $dauphay=",";
                       }
                       echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
                        $i++;
                    }
                ?>
              
    
            ]);

            // Optional; add a title and set the width and height of the chart
            var options = { 'title': 'THỐNG KÊ SẢN PHẨM THEO DANH MỤC', 'width': 800, 'height': 600 };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>

</div>