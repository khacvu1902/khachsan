<div class="row">
    <div class="row mb headeradmin" style="width:1050px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row formtittle" style="width:143%;">
        <h3>BIỂU ĐỒ THỐNG KÊ</h3>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=thongke" method="post">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <div id="myChart" style="width:100%; max-width:1000px; height:700px;">
            </div>
            <script>
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Danh mục', 'Số lượng sản phẩm'],
                        <?php
                        $tongdm = count($listthongke);
                        $i = 1;
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            if ($i == $tongdm) $dauphay = "";
                            else $dauphay = ",";
                            echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "]" . $dauphay;
                            $i += 1;
                        }
                        ?>
                    ]);
                    var options = {
                        title: 'Sản Phẩm Theo Danh Mục', 'width':1150, 'height':700,
                        is3D: true
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                    chart.draw(data, options);
                }
            </script>
        </form>
    </div>
</div>
</div>