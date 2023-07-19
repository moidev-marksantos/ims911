<?php /* Smarty version Smarty-3.1.7, created on 2021-02-23 07:09:52
         compiled from "C:\xampp\htdocs\bayan911demo\includes\runtime/../../layouts/v7\modules\Home\FloodMonitoring.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1963556313603456ee4cf523-42388378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab2b34813f92aa10614353a12ee06a6bebf80ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bayan911demo\\includes\\runtime/../../layouts/v7\\modules\\Home\\FloodMonitoring.tpl',
      1 => 1614064190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1963556313603456ee4cf523-42388378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_603456ee4f647',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603456ee4f647')) {function content_603456ee4f647($_smarty_tpl) {?><script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<div class="content" style="height: 600px; padding: 20px; background-color:rgb(32, 32, 32);">
    <div class=" row">

    <div class="col-md-6" style="color:#ffffff;">
        <table class="table">
            <thead class="">
                <tr>
                    <th>WATER-LEVEL STATION</th>
                    <th>DATE & TIME</th>
                    <th>WLmsl</th>
                    <th style="color:green;">ALERT</th>
                    <th style="color:yellow;">ALARM</th>
                    <th style="color:red;">CRITICAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>RG_CUEVA</td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>RG_CUEVA</td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-md-6" style="color:#ffffff;">
        <table class="table">
            <thead style="font-weight: 500;">
                <tr>
                    <th>RAIN GAUGE STATION</th>
                    <th>DATE & TIME</th>
                    <th>10-MIN</th>
                    <th>1-HOUR</th>
                    <th>24-HOUR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>RG_CUEVA</td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>RG_CUEVA</td>
                    <td></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-md-6">
        <div id="chart" style="width: 100%; height: 200px;"></div>
    </div>
    <div class="col-md-6">
        <div id="chart2" style="width: 100%; height: 200px;"></div>
    </div>
</div>
</div>
<script>

    var options = {
        series: [{
                name: "CUEVA",
                data: [28, 29, 33, 36, 32, 32, 33]
            },
            {
                name: "KATAYPUANAN",
                data: [12, 11, 14, 18, 17, 13, 13]
            },
            {
                name: "KAPATALAN",
                data: [34, 39, 12, 16, 11, 5, 4]
            }
        ],
        chart: {
            height: 350,
            type: 'line',
            dropShadow: {
                enabled: true,
                color: '#000',
                top: 18,
                left: 7,
                blur: 10,
                opacity: 0.2
            },
            toolbar: {
                show: false
            }
        },
        colors: ['#0AF1D2', '#DC0AF1', '#E3D60A'],
        dataLabels: {
            enabled: true,
        },
        stroke: {
            curve: 'smooth'
        },
        title: {
            text: 'Average High & Low Rain Gauge',
            align: 'left'
        },
        grid: {
            borderColor: '#e7e7e7',
            row: {
                colors: ['#000', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.2
            },
        },
        markers: {
            size: 1
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            title: {
                text: 'Month'
            }
        },
        yaxis: {
            title: {
                text: 'Rain Gauge'
            },
            min: 5,
            max: 40
        },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            floating: true,
            offsetY: -25,
            offsetX: -5
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();



    var options2 = {
        series: [{
            name: 'series1',
            data: [31, 40, 28, 51, 42, 109, 100]
        }, {
            name: 'series2',
            data: [11, 32, 45, 32, 34, 52, 41]
        }],
        chart: {
            height: 350,
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'datetime',
            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z",
                "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                "2018-09-19T06:30:00.000Z"
            ]
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
    chart2.render();
</script><?php }} ?>