<?php
// Start the session.
session_start();
if(!isset($_SESSION['email'])) header('Location: login.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard- Inventory Management System </title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
    </head>
    <body>
        <div id="dashboardMainContainer">
        <?php include('partials/app-sidebar.php') ?> 
            <div class="dashboard_content_container" id="dashboard_content_container">
            <?php include('partials/app-topnav.php') ?> 
                <div class="dashboard_content">
                    <div class="dashboard_content_main">
                        <div class="col50">
                            <figure class="highcharts-figure">
                                <div id="container"></div>
                                <p class="highcharts-description">
                                    Pie charts are very popular for showing a compact overview of a
                                    composition or comparison. While they can be harder to read than
                                    column charts, they remain a popular choice for small datasets.
                                </p>
                            </figure>
                        </div>
                        <div class="col50">
                            <figure class="highcharts-figure">
                                <div id="containerBarChart"></div>
                                <p class="highcharts-description">
                                    Pie charts are very popular for showing a compact overview of a
                                    composition or comparison. While they can be harder to read than
                                    column charts, they remain a popular choice for small datasets.
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/script.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <script>
            
            Highcharts.chart('container', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Inventory Management System, 2023',
                    align: 'left'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    name: 'ORDERS',
                    colorByPoint: true,
                    data: [{
                        name: 'PENDING',
                        y: 70.67,
                        sliced: true,
                        selected: true
                    }, {
                        name: 'COMPLETED',
                        y: 14.77
                    },  {
                        name: 'INCOMPLETED',
                        y: 4.86
                    }]
                }]
            });

            Highcharts.chart('containerBarChart', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Product Count',
                    align: 'left'
                },
                xAxis: {
                    categories: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
                    crosshair: true,
                    accessibility: {
                        description: 'Months'
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'RainFall(mm)'
                    }
                },
                tooltip: {
                    valueSuffix: ' (1000 MT)'
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [
                    {
                        name: 'America',
                        data: [406292, 260000, 107000, 68300, 27500, 14500]
                    },
                    {
                        name: 'Tokyo',
                        data: [51086, 136000, 5500, 141000, 107180, 77000]
                    }
                ]
            });


        </script>

    </body>
</html>