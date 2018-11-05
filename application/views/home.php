<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">
        
    </script>
</head>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h5>Data per <strong style="color: #00c853;"><?php $mydate=getdate(date("U"));
                echo "$mydate[mday] $mydate[month], $mydate[year]"; ?></strong></h5>
            
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Master Goods</th>
                        <th>Master Customer</th>
                        <th>Master Warehouse</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $buku; ?></td>
                        <td><?php echo $customer; ?></td>
                        <td><?php echo $warehouse; ?></td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="piechart"></div>
            <script type="text/javascript">
            // Load google charts
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            // Membuat chart dan nilainya
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Keterangan','Jumlah'],
              ['Goods', <?php echo $buku; ?>],
              ['Customer',<?php echo $customer; ?>],
              ['Warehouse',<?php echo $warehouse; ?>]
            ]);
              
              var ukuran = {'title':'Data Qisthi', 'height':300};
              
              // menampilkan chart pada div
              var chart = new google.visualization.BarChart(document.getElementById('piechart'));
              chart.draw(data,ukuran);
            }
            </script>
        </div>
    </div>
</div>

