<?php 

require 'conexion.php';

$dat = json_decode($_POST['data']);
$a01 = $dat[0];
$a02 = $dat[1];
$z = $dat[2];
$c01 = $dat[3];
$c02 = $dat[4];
$status = $dat[5];
echo $dat[0];
echo $dat[1];
echo $dat[2];
echo $dat[3];
echo $dat[4];
echo $dat[5];


// $c01a01 = "";
// $resul01 = ;
// $cont01 = ;

/* fecha de RECEPCIÓN*/
/*$sql01 = "SELECT fechaRecepcionObraPorVentas FROM proyectos WHERE EXTRACT(year FROM fechaRecepcionObraPorVentas)='$anio' AND EXTRACT(month FROM fechaRecepcionObraPorVentas)='$mes' ";
$result01 = mysqli_query($conexionBd,$sql01);
$numero01 = mysqli_num_rows($result01);*/


/*$meses = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"); 
$abrMeses = array("ene","feb","mar","abr","may","jun","jul","ago","sep","oct","nov","dic"); 
$query = "SELECT asesorIngenieria, count(*) AS number FROM proyectos GROUP BY asesorIngenieria";
$result = mysqli_query($conexionBd, $query);
$result02 = mysqli_query($conexionBd, $query);
$r="";*/
?>

<script type="text/javascript">
/////////////////////////////////////////////////////////////////////////////////////
    // google.charts.load('current', {'packages':['line']});
    // google.charts.setOnLoadCallback(drawChart);

    // function drawChart() {
    //     var data = new google.visualization.DataTable();
        //var arr = [13, 10, 20, 30]

        /*data.addColumn('number', 'Mes');
        data.addColumn('number', 'Guardians of the Galaxy');
        data.addColumn('number', 'The Avengers');
        data.addColumn('number', 'Transformers: Age of Extinction');
        data.addRows([
            [1,  37.8, 80.8, 41.8],
            [2,  30.9, 69.5, 32.4],
            [3,  25.4,   57, 25.7],
            [4,  11.7, 18.8, 10.5],
            [5,  11.9, 17.6, 10.4],
            [6,   8.8, 13.6,  7.7],
            [7,   7.6, 12.3,  9.6],
            [8,  12.3, 29.2, 10.6],
            [9,  16.9, 42.9, 14.8],
            [10, 12.8, 30.9, 11.6],
            [11,  5.3,  7.9,  4.7],
            [12,  6.6,  8.4,  5.2],
            arr
        ]);*/

    //     var options = {
    //               width: 750,
    //               height: 300,
    //               title: 'Comparativa Clientes',
    //               colors: ['blue', 'orange', 'red', '#f3b49f', '#f6c7b6']
    //             };
    //     var chart = new google.charts.Line(document.getElementById('g12'));
    //     chart.draw(data, google.charts.Line.convertOptions(options));
    // }
/////////////////////////////////////////////////////////////////////////////////////
    /*
    google.charts.load('current', {'packages':['corechart']});  
    google.charts.setOnLoadCallback(drawChart01);
        function drawChart01()
        {
            var data = google.visualization.arrayToDataTable([ ['asesor','numero'], 
                //<?php
                    //while($row=mysqli_fetch_array($result))
                    //{
                        //echo "['".$row["asesorIngenieria"]."',".$row["number"]."],";
                    //}
                //?>
                ]);
            var options = {
                  width: 750,
                  height: 300,
                  title: 'Comparativa Clientes',
                  colors: ['#FE2EC8', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6']
                };
            var chart = new google.visualization.LineChart(document.getElementById('g12'));
            chart.draw(data, options);
        }


        google.charts.setOnLoadCallback(drawChart02);
        
        function drawChart02()
        {
            var data02 = google.visualization.arrayToDataTable([ ['asesor','numero'], 
                //<?php
                    //while($row02=mysqli_fetch_array($result02))
                    //{
                        //echo "['".$row02["asesorIngenieria"]."',".$row02["number"]."],";
                    //}
                //?>
                ]);
            var options02 ={title:'', colors:['#FE2EC8', '#2E2EFE']};
            var chart02 = new google.visualization.PieChart(document.getElementById('g22'));
            chart02.draw(data02, options02);
        }*/
</script>



