<?php /* Smarty version Smarty-3.1.7, created on 2021-05-31 07:19:24
         compiled from "C:\xampp7.4\htdocs\sbma\includes\runtime/../../layouts/v7\modules\Home\HeatMap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179044942460b48021658b53-20083180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f241b71811558482c780775cd1fb0b368f52316f' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\sbma\\includes\\runtime/../../layouts/v7\\modules\\Home\\HeatMap.tpl',
      1 => 1622445562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179044942460b48021658b53-20083180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60b4802165905',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b4802165905')) {function content_60b4802165905($_smarty_tpl) {?><style>
    #map {
        width: 100%;
        height: 600px;
    }

    .mapboxgl-popup {
        max-width: 400px;
        font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
    }

    .filter-group {
        font: 12px 'Helvetica Neue', Arial, Helvetica, sans-serif;
        font-weight: 600;
        position: absolute;
        top: 150px;
        left: 10px;
        z-index: 1;
        border-radius: 3px;
        width: 200px;
        color: #fff;
    }

    .filter-group input[type='checkbox']:first-child+label {
        border-radius: 3px 3px 3px 3px;
    }

    .filter-group label:last-child {
        border-radius: 3px 3px 3px 3px;
        border: none;
    }

    .filter-group input[type='checkbox'] {
        display: none;
    }

    .filter-group input[type='checkbox']+label {
        background-color: #ed0e0e;
        display: block;
        cursor: pointer;
        padding: 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.25);
    }

    .filter-group input[type='checkbox']+label {
        background-color: #ed0e0e;
        text-transform: capitalize;
    }

    .filter-group input[type='checkbox']+label:hover,
    .filter-group input[type='checkbox']:checked+label {
        background-color: #ccc;
    }

    .filter-group input[type='checkbox']:checked+label:before {
        content: '✔';
        margin-right: 5px;
    }
</style>

<div id='map'></div>
<nav id="filter-group" class="filter-group"></nav>


    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibWFyay1zYW50b3MiLCJhIjoiY2s2cmsxbWNmMDY2aTNsbWxlMHcwOWxoYSJ9.9XSLjIs78DSaauPk2Fa_6Q';

        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/dark-v10',
            center: [120.27795218458459,14.821511544003869],
            zoom: 14
        });
    
        map.addControl(new mapboxgl.FullscreenControl());
        map.addControl(new mapboxgl.NavigationControl());
        var filterGroup = document.getElementById('filter-group');
    
    
    
        map.on('load', function() {
    
            $.get("api/ticketstaus/get.php", function(data, status) {
                var classification = JSON.parse(data);
                classification.forEach(function(item) {
                    
    
                    map.addSource('datasource_' + item.id, {
                        'type': 'geojson',
                        'data': 'api/ticketstaus/get_bystatus.php?status=' + item.ticketstatus
                    });
    
                    map.addLayer({
                            'id': 'heatheat_' + item.id,
                            'type': 'heatmap',
                            'source': 'datasource_' + +item.id,
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
                                    0.2, item.color,
                                    0.4, item.color,
                                    0.6, item.color,
                                    0.8, item.color
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
                            'id': 'point_' + item.id,
                            'type': 'circle',
                            'source': 'datasource_' + item.id,
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
                                        [10, item.color],
                                        [20, item.color],
                                        [30, item.color],
                                        [40, item.color],
                                        [50, item.color],
                                        [60, item.color]
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

                    // Add checkbox and label elements for the layer.
                    var input = document.createElement('input');
                    input.type = 'checkbox';
                    input.id = 'layer_' + item.id;
                    input.checked = true;
                    filterGroup.appendChild(input);
    
                    var label = document.createElement('label');
                    label.setAttribute('for', 'layer_' + item.id);
                    label.textContent = item.ticketstatus;
                    label.style.backgroundColor = item.color;
                    filterGroup.appendChild(label);
    
                    input.addEventListener('change', function(e) {
                        map.setLayoutProperty(
                            'heatheat_' + item.id,
                            'visibility',
                            e.target.checked ? 'visible' : 'none'
                        );
                        map.setLayoutProperty(
                            'point_' + item.id,
                            'visibility',
                            e.target.checked ? 'visible' : 'none'
                        );
                    });
    
                    //click on tree to view dbh in a popup
                    map.on('click', 'point_' + item.id, function(e) {
                        new mapboxgl.Popup()
                            .setLngLat(e.features[0].geometry.coordinates)
                            .setHTML('<b>PATIENT #:</b> ' + e.features[0].properties.name)
                            .addTo(map);
                    });
    
    
    
    
                });
            });
    
        });
    </script>
<?php }} ?>