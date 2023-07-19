<?php /* Smarty version Smarty-3.1.7, created on 2022-09-30 10:56:17
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Home/HeatMap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1513790547619efa6466ca67-36250934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b597b979fc3db9d7725212b7e92704dc75fc58e0' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Home/HeatMap.tpl',
      1 => 1664506573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1513790547619efa6466ca67-36250934',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_619efa646ae66',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_619efa646ae66')) {function content_619efa646ae66($_smarty_tpl) {?><style>
    #map {
        width: 100%;
        height: 910px;
    }

    .mapboxgl-popup {
        max-width: 400px;
        font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
    }
	
	.mapboxgl-ctrl-logo {
		display: none !important;
	}
	
	.mapboxgl-ctrl.mapboxgl-ctrl-attrib {
		display: none !important;
	}
</style>

<div id="reportrange"
    style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 21%; 
    position: absolute; top: 130px; left: 20px; z-index: 1;">
    <i class="fa fa-calendar"></i>&nbsp;
    <span></span> <i class="fa fa-caret-down"></i>
</div>

<div id='map'></div>
<div id="filter-group" name="filter-group"></div>

    <script  type="text/javascript">
    $(function() {
        var filterGroup = document.getElementById('filter-group');
        var input = document.createElement('input');
        input.id = "fromdate";
        input.name = "fromdate";
        input.type = "hidden";
        filterGroup.appendChild(input);

        var input2 = document.createElement('input');
        input2.id = "todate";
        input2.name = "todate";
        input2.type = "hidden";
        filterGroup.appendChild(input2);

        var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                $('#fromdate').val(start.format('YYYY-M-D'));
                $('#todate').val(end.format('YYYY-M-D'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);
 

        mapboxgl.accessToken =
            'pk.eyJ1IjoibWFyay1zYW50b3MiLCJhIjoiY2s2cmsxbWNmMDY2aTNsbWxlMHcwOWxoYSJ9.9XSLjIs78DSaauPk2Fa_6Q';

        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/dark-v10',
            center: [120.29827691818753,14.834258911065149],
            zoom: 14
        });

        map.addControl(new mapboxgl.FullscreenControl());
        map.addControl(new mapboxgl.NavigationControl());
       

        map.on('load', async () => {

            const response = await fetch(
                'api/maps/incidents/heatmap_incidentbystatus.php?from=' + $('#fromdate').val() + '&to=' + $('#todate').val()
            );

            const data = await response.json();
            map.addSource('datasource', { type: 'geojson', data: data });

            map.addLayer({
                    'id': 'heatheat',
                    'type': 'heatmap',
                    'source': 'datasource',
                    'maxzoom': 18,
                    'paint': {
                        // increase weight as diameter breast height increases
                        'heatmap-weight': {
                            'property': 'dbh',
                            'type': 'exponential',
                            'stops': [
                                [1, 0],
                                [62, 1]
                            ]
                        },
                        // increase intensity as zoom level increases
                        'heatmap-intensity': {
                            'stops': [
                                [11, 1],
                                [18, 3]
                            ]
                        },
                        // use sequential color palette to use exponentially as the weight increases
                        'heatmap-color': [
                            'interpolate',
                            ['linear'],
                            ['heatmap-density'],
                            0, 'rgba(255, 255, 255,0)',
                            0.2, '#FF0000',
                            0.4, '#FF0000',
                            0.6, '#FF0000',
                            0.8, '#FF0000'
                        ],
                        // increase radius as zoom increases
                        'heatmap-radius': {
                            'stops': [
                                [11, 18],
                                [18, 20]
                            ]
                        },
                        // decrease opacity to transition into the circle layer
                        'heatmap-opacity': {
                            'default': 1,
                            'stops': [
                                [14, 1],
                                [18, 0]
                            ]
                        }
                    }
                },
                'waterway-label'
            );

            map.addLayer({
                    'id': 'point',
                    'type': 'circle',
                    'source': 'datasource',
                    'minzoom': 17,
                    'paint': {
                        // increase the radius of the circle as the zoom level and dbh value increases
                        'circle-radius': {
                            'property': 'dbh',
                            'type': 'exponential',
                            'stops': [
                                [{ zoom: 18, value: 1 }, 5],
                                [{ zoom: 18, value: 62 }, 10],
                                [{ zoom: 22, value: 1 }, 20],
                                [{ zoom: 22, value: 62 }, 50]
                            ]
                        },
                        'circle-color': {
                            'property': 'dbh',
                            'type': 'exponential',
                            'stops': [
                                [0, 'rgba(255, 255, 255,0)'],
                                [10, '#FF0000'],
                                [20, '#FF0000'],
                                [30, '#FF0000'],
                                [40, '#FF0000'],
                                [50, '#FF0000'],
                                [60, '#FF0000']
                            ]
                        },
                        'circle-stroke-color': 'white',
                        'circle-stroke-width': 1,
                        'circle-opacity': {
                            'stops': [
                                [14, 0],
                                [18, 1]
                            ]
                        }
                    }
                },
                'waterway-label'
            );

            $('#reportrange').on('apply.daterangepicker', function(ev, picker) {

                $('#fromdate').val(picker.startDate.format('YYYY-M-D'));
                $('#todate').val(picker.endDate.format('YYYY-M-D'));
                var incidenturl =  'api/maps/incidents/heatmap_incidentbystatus.php?from=' + picker.startDate.format('YYYY-M-D') + '&to=' + picker.endDate.format('YYYY-M-D');                
                map.getSource('datasource').setData(incidenturl);
                
            });
        });
        });
    </script>
<?php }} ?>