<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 02:39:15
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Home\Map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20776622206008dc528676f7-32168201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c70ff95468fc160a9283b7264f6bc38d3a36a17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Home\\Map.tpl',
      1 => 1611627851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20776622206008dc528676f7-32168201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6008dc5289eb4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6008dc5289eb4')) {function content_6008dc5289eb4($_smarty_tpl) {?><style>
    #map {
        width: 100%;
        height: 600px;
    }

    .mapboxgl-popup {
        max-width: 573px;
        font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
    }

    .warning_signal_blue {
        /* margin: -10px -10px; */
        width: 32px;
        height: 32px;
        border: 1px solid #fff;
        border-radius: 50%;
        cursor: pointer;
        box-shadow: 0 0 0 #c7161666;
        animation: pulse_blue_sender 3s infinite;
    }

    @-webkit-keyframes pulse_blue_sender {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(199, 22, 22, 0.4);
        }

        50% {
            -webkit-box-shadow: 0 0 0 10px rgba(199, 22, 22, 0);
        }

        70% {
            -webkit-box-shadow: 0 0 0 30px rgba(199, 22, 22, 0);
        }

        100% {
            -webkit-box-shadow: 0 0 0 50px rgba(199, 22, 22, 0);
        }
    }
</style>

<div id='map'></div>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibWFyay1zYW50b3MiLCJhIjoiY2s2cmsxbWNmMDY2aTNsbWxlMHcwOWxoYSJ9.9XSLjIs78DSaauPk2Fa_6Q';

    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/outdoors-v11',
        center: [121.13464970095424,16.481330387280195],
        zoom: 8
    });   
    map.addControl(new mapboxgl.FullscreenControl());

    ///INCIDENT 
    window.setInterval(function () {
        var url = 'api/tickets/get.php';
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", url, false);
        xmlHttp.send(null);
        var incidentJSON = JSON.parse(xmlHttp.responseText);

        incidentJSON.forEach(function (marker) {
            var popup = new mapboxgl.Popup({
                    offset: 25
                })
                .setHTML('POPUP');

            //console.log(marker.longtitude);
            var el = document.createElement('div');
            el.setAttribute('id', 'incident_' + marker.id);
            el.className = 'warning_signal_blue';
            el.title = marker.title; //incident;
            el.style.backgroundSize = 'contain';
            el.style.backgroundRepeat = 'no-repeat';
            el.style.backgroundColor = marker.color;

            el.addEventListener('click', function (e) {
                var incidentdetails = "<h6 style='text-transform: uppercase;'><b> " + marker.title + " </b></h6>";
                incidentdetails += "Status : <b style='background: "+marker.color+";color:#fff;'>" + marker.status + "</b><br/>";
                incidentdetails += "Location : <b style='text-transform: uppercase;'>" + marker.location + "</b>";
                incidentdetails += "<br/><br/>";
                incidentdetails += "<a class='btn btn-success btn-sm' href='?module=HelpDesk&view=Detail&record="+marker.id+"&app=SUPPORT'>View</a>";
                popup.setHTML(incidentdetails);
            });

            el.style.width = '32px';
            el.style.height = '32px';
            if(typeof(el) != 'undefined' && el != null){
            new mapboxgl.Marker(el)
                .setLngLat([marker.longtitude, marker.latitude])
                .setPopup(popup)
                .addTo(map);
             }
        });
    }, 5000);
   
</script>
<?php }} ?>