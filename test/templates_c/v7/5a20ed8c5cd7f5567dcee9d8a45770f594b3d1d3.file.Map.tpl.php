<?php /* Smarty version Smarty-3.1.7, created on 2021-02-15 01:29:12
         compiled from "C:\xampp\htdocs\bayan911demo\includes\runtime/../../layouts/v7\modules\Home\Map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13177007696029ce6894c642-80778815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a20ed8c5cd7f5567dcee9d8a45770f594b3d1d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bayan911demo\\includes\\runtime/../../layouts/v7\\modules\\Home\\Map.tpl',
      1 => 1612764724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13177007696029ce6894c642-80778815',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6029ce689e499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6029ce689e499')) {function content_6029ce689e499($_smarty_tpl) {?><style>
    #map {
        width: 100%;
        height: 600px;
    }

    .mapboxgl-popup {
        max-width: 573px;
        font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
    }
    
    .mapboxgl-popup-content{
        width: 425px
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
        center: [120.27795218458459,14.821511544003869],
        zoom: 12
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
   
   /// CCTV
    var cctv = "api/cctv/get.php"

    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", cctv, false);
    xmlHttp.send(null);
    var cctvJson = JSON.parse(xmlHttp.responseText);

    cctvJson.forEach(function (marker) {

        var popup = new mapboxgl.Popup({
                offset: 25
            })
            .setHTML('CCTV');

        var el2 = document.createElement('div');
        el2.className = 'cctv';
        el2.title = marker['cctvid'];
        el2.style.backgroundImage = 'url(test/images/cctvicon.png)';
        el2.style.backgroundSize = 'contain';
        el2.style.backgroundRepeat = 'no-repeat';
        el2.style.width = '32px';
        el2.style.height = '32px';
        el2.addEventListener('click', function (e) {
            //var desc = '<a target="_blank" href="http://82.77.16.188:8080/cam_1.cgi"><img style="-webkit-user-select: none;margin: auto;" src="//http://82.77.16.188:8080/cam_1.cgi" width="210" height="203"></a>';
			var desc = '<video width="400px" controls autoplay><source src="cctvsample.mp4" type="video/mp4" style="width: 400px"></video>';
            popup.setHTML(desc);
        });

        new mapboxgl.Marker(el2)
            .setLngLat([Number(marker['longtitude']), Number(marker['latitude'])])
            .setPopup(popup)
            .addTo(map);

    });
</script>
<?php }} ?>