<?php /* Smarty version Smarty-3.1.7, created on 2022-09-30 10:55:23
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Home/IncidentMap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2031207448619ddf56d24d79-10705969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3668f4507b511b7ba56242269c8568fa0057c5be' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Home/IncidentMap.tpl',
      1 => 1664506519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2031207448619ddf56d24d79-10705969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_619ddf56d2603',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_619ddf56d2603')) {function content_619ddf56d2603($_smarty_tpl) {?><style>
    #map {
        width: 100%;
        height: 910px;
    }

    .mapboxgl-popup {
        max-width: 573px;
        font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
    }

    .mapboxgl-popup-content {
        width: 500px;
    }

    .warning_signal_blue {
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
	
	.mapboxgl-ctrl-logo {
		display: none !important;
	}
	
	.mapboxgl-ctrl.mapboxgl-ctrl-attrib {
		display: none !important;
	}
</style>
<div id='map'></div>

    <script>
        mapboxgl.accessToken =
            'pk.eyJ1IjoibWFyay1zYW50b3MiLCJhIjoiY2s2cmsxbWNmMDY2aTNsbWxlMHcwOWxoYSJ9.9XSLjIs78DSaauPk2Fa_6Q';

        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/outdoors-v11',
            center: [120.28223069987126,14.822317845035712],
            zoom: 16
        });
        map.addControl(new mapboxgl.FullscreenControl());


        const size = 200;

        // This implements `StyleImageInterface`
        // to draw a pulsing dot icon on the map.
        const pulsingDot = {
            width: size,
            height: size,
            data: new Uint8Array(size * size * 4),

            // When the layer is added to the map,
            // get the rendering context for the map canvas.
            onAdd: function() {
                const canvas = document.createElement('canvas');
                canvas.width = this.width;
                canvas.height = this.height;
                this.context = canvas.getContext('2d');
            },

            // Call once before every frame where the icon will be used.
            render: function() {
                const duration = 1000;
                const t = (performance.now() % duration) / duration;

                const radius = (size / 2) * 0.3;
                const outerRadius = (size / 2) * 0.7 * t + radius;
                const context = this.context;

                // Draw the outer circle.
                context.clearRect(0, 0, this.width, this.height);
                context.beginPath();
                context.arc(
                    this.width / 2,
                    this.height / 2,
                    outerRadius,
                    0,
                    Math.PI * 2
                );
                //color of pulsing
                context.fillStyle = `rgba(255, 100, 100, ${1 - t})`;
                context.fill();

                // Draw the inner circle.
                context.beginPath();
                context.arc(
                    this.width / 2,
                    this.height / 2,
                    radius,
                    0,
                    Math.PI * 2
                );
                //main color
                context.fillStyle = 'rgba(255, 20, 20, 1)';
                context.strokeStyle = 'white';
                context.lineWidth = 2 + 4 * (1 - t);
                context.fill();
                context.stroke();

                // Update this image's data with data from the canvas.
            this.data = context.getImageData(
                0,
                0,
                this.width,
                this.height
            ).data;

            // Continuously repaint the map, resulting
            // in the smooth animation of the dot.
            map.triggerRepaint();

            // Return `true` to let the map know that the image was updated.
            return true;
        }
    };

    var incident_url    = 'api/maps/incidents/incidentmap.php';
    //var responder_url   = 'api/maps/responder/incidentmap_responderlocation.php';
	
    var fire_url   = 'api/maps/responder/firelocation.php';
    var led_url   = 'api/maps/responder/ledlocation.php';
    var publicsafety_url   = 'api/maps/responder/publicsafetylocation.php';
    //var radio_url       = 'api/maps/radio/incidentmap_radiolocation.php';
    
    map.on('load', () => {

        window.setInterval(function() {            
            map.getSource('incidents_source').setData(incident_url);
            //map.getSource('responder_source').setData(responder_url);
            //map.getSource('radiolocation_source').setData(radio_url);
            map.getSource('fire_source').setData(fire_url);
            map.getSource('led_source').setData(led_url);
            map.getSource('publicsafety_source').setData(publicsafety_url);
        }, 2000);


        //START: INCIDENT LIST
        map.addSource('incidents_source', {
            type: 'geojson',
            data: incident_url
        });

        map.addImage('pulsing-dot', pulsingDot, { pixelRatio: 2 });

        map.addLayer({
            "id": "incident_points",
            "type": "symbol",
            "source": "incidents_source",
            "layout": {
				'text-field': ['get', 'title'],
				'text-variable-anchor': ['top', 'bottom', 'left', 'right'],
                'text-radial-offset': 1,
                'text-justify': 'auto',
                "icon-image": 'pulsing-dot',
                "icon-size": 1
            },
        });

        map.on('click', 'incident_points', function(e) {
            var coordinates = e.features[0].geometry.coordinates.slice();
            var desc = 'Incident:';
            desc += '<br/>';
            desc += '<a target="_blank"  href="index.php?module=HelpDesk&view=Detail&record='+ e.features[0].properties.id +'"><b style="font-size:13px; color: blue; text-decoration: underline;">' + e.features[0].properties.ticket_no + '</b></a><br>';
            desc += '<b style="font-size:15px;">' + e.features[0].properties.title + '</b>';
            desc += '<p>Status: <b>' + e.features[0].properties.status + '</b></br>';
            desc += 'Location: <b>' + e.features[0].properties.location + '</b></p>';

            new mapboxgl.Popup()
                .setLngLat(coordinates)
                .setHTML(desc)
                .addTo(map);
        });
        //END: INCIDENT LIST

        //START: RESPONDER LIST
        //map.addSource('responder_source', {
        //    type: 'geojson',
        //    data: responder_url
        //});
		
		map.addSource('fire_source', {
            type: 'geojson',
            data: fire_url
        });
		
		map.addSource('led_source', {
            type: 'geojson',
            data: led_url
        });
		
		map.addSource('publicsafety_source', {
            type: 'geojson',
            data: publicsafety_url
        });

        //map.loadImage('test/images/phone-bayan911.png', function(error, image2) {            
        //    map.addImage('responder_image', image2);
        //});
		
		//PUBLIC SAFETY
		map.loadImage('test/images/icons/publicsafety.png', function(error, publicsafety) {            
            map.addImage('publicsafety_image', publicsafety);
        });
		
		//FIRE DEPARTMENT
		map.loadImage('test/images/icons/fire.png', function(error, fire) {            
            map.addImage('fire_image', fire);
        });
		
		//LED
		map.loadImage('test/images/icons/led.png', function(error, led) {            
            map.addImage('led_image', led);
        });

        /*
		map.addLayer({
            "id": "responder_points",
            "type": "symbol",
            "source": "responder_source",
            "layout": {
                "icon-image": 'responder_image',
                "icon-size": 1
            }
        });
		*/
		
		map.addLayer({
            "id": "fire_points",
            "type": "symbol",
            "source": "fire_source",
            "layout": {
				'text-field': ['get', 'name'],
				'text-variable-anchor': ['top', 'bottom', 'left', 'right'],
                'text-radial-offset': 1,
                'text-justify': 'auto',
                "icon-image": 'fire_image',
                "icon-size": 1.3
            }
        });
		
		map.addLayer({
            "id": "led_points",
            "type": "symbol",
            "source": "led_source",
            "layout": {
				'text-field': ['get', 'name'],
				'text-variable-anchor': ['top', 'bottom', 'left', 'right'],
                'text-radial-offset': 1,
                'text-justify': 'auto',
                "icon-image": 'led_image',
                "icon-size": 1.3
            }
        });
		
		map.addLayer({
            "id": "publicsafety_points",
            "type": "symbol",
            "source": "publicsafety_source",
            "layout": {
				'text-field': ['get', 'name'],
				'text-variable-anchor': ['top', 'bottom', 'left', 'right'],
                'text-radial-offset': 1,
                'text-justify': 'auto',
                "icon-image": 'publicsafety_image',
                "icon-size": 1.3
            }
        });
		
		
        map.on('click', 'fire_points', function(e) {
            var coordinates = e.features[0].geometry.coordinates.slice();
            var desc = 'Responder:';
            desc += '<br/>';
            desc += '<a style="font-size:15px; font-weight: bold;" href="tel:'+e.features[0].properties.contactno+'"' + '<b>' + e.features[0].properties.name + '</b></a><br>';
            desc += '<p style="font-size:12px;">' + e.features[0].properties.type + '<br>';
            desc += '<a href="tel:'+e.features[0].properties.contactno+'">'+e.features[0].properties.contactno+'</a>' + '</p>';
            new mapboxgl.Popup()
                .setLngLat(coordinates)
                .setHTML(desc)
                .addTo(map);
        });
		
		map.on('click', 'led_points', function(e) {
            var coordinates = e.features[0].geometry.coordinates.slice();
            var desc = 'Responder:';
            desc += '<br/>';
            desc += '<a style="font-size:15px; font-weight: bold;" href="tel:'+e.features[0].properties.contactno+'"' + '<b>' + e.features[0].properties.name + '</b></a><br>';
            desc += '<p style="font-size:12px;">' + e.features[0].properties.type + '<br>';
            desc += '<a href="tel:'+e.features[0].properties.contactno+'">'+e.features[0].properties.contactno+'</a>' + '</p>';
            new mapboxgl.Popup()
                .setLngLat(coordinates)
                .setHTML(desc)
                .addTo(map);
        });
		
		map.on('click', 'publicsafety_points', function(e) {
            var coordinates = e.features[0].geometry.coordinates.slice();
            var desc = 'Responder:';
            desc += '<br/>';
            desc += '<a style="font-size:15px; font-weight: bold;" href="tel:'+e.features[0].properties.contactno+'"' + '<b>' + e.features[0].properties.name + '</b></a><br>';
            desc += '<p style="font-size:12px;">' + e.features[0].properties.type + '<br>';
            desc += '<a href="tel:'+e.features[0].properties.contactno+'">'+e.features[0].properties.contactno+'</a>' + '</p>';
            new mapboxgl.Popup()
                .setLngLat(coordinates)
                .setHTML(desc)
                .addTo(map);
        });
        //END: RESPONDER LIST


        //START: RADIO LIST
        //map.addSource('radiolocation_source', {
        //    type: 'geojson',
        //    data: radio_url
        //});

        //var xmlHttp = new XMLHttpRequest();
        //xmlHttp.open("GET", radio_url, false);
        //xmlHttp.send(null);
        //var radiolocationJSON = JSON.parse(xmlHttp.responseText);

        /*
        /// FOR SMARTPTT MOTOROLA ///
        for (const { geometry, properties } of radiolocationJSON.features) {
            map.loadImage('api/image/icon.php?id=' + properties.id, function(error, image) {
                //if (error) throw error;
                map.addImage('icon_radio_' + properties.id, image);
            });
        }

        map.addLayer({
            "id": "radiolocation_points",
            "type": "symbol",
            "source": "radiolocation_source",
            "layout": {
                "icon-image": ['get', 'icon'],
                "icon-size": 1
            }
        });
        */

        /// FOR SMART DISPATCH HYTERA ///
        //map.loadImage('test/images/walkie-talkie.png', function(error, image) {
        //    map.addImage('icon_radio_1', image);
        //});
        //map.addLayer({
        //    "id": "radiolocation_points",
        //    "type": "symbol",
        //    "source": "radiolocation_source",
        //    "layout": {
        //       "icon-image": "icon_radio_1",
        //        "icon-size": 0.12
        //    }
        //});

        //map.on('click', 'radiolocation_points', function(e) {
        //    var coordinates = e.features[0].geometry.coordinates.slice();
        //    var desc = 'Radio:';
        //    desc += '<br/>';
        //    desc += '<b style="font-size:15px;">' + e.features[0].properties.description + '</b>';
        //    new mapboxgl.Popup()
        //        .setLngLat(coordinates)
        //        .setHTML(desc)
        //        .addTo(map);
        //});
        //END: RADIO LIST
    });

    //START: CCTV LIST
    var cctv = "api/maps/cctv/incidentmap_cctv.php"
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", cctv, false);
    xmlHttp.send(null);
    var cctvJson = JSON.parse(xmlHttp.responseText);
    cctvJson.forEach(function(marker) {

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
        el2.addEventListener('click', function(e) {           
            var desc = `<div style="height:360px;width:480px;"><img src="` + marker['ipaddress'] + `" height="360" width="480">
                ` + marker['name'] + `
                </div>`;
            var cctvpopup = `<div><a target="_blank" href="`+marker['ipaddress']+`">`+marker['ipaddress']+`</a></div>`
            var iframe1 = `<iframe src="http://98.173.8.28:2000/" height="360" width="480" title="Iframe Example"></iframe>`
            popup.setHTML(cctvpopup);
        });

        new mapboxgl.Marker(el2)
            .setLngLat([Number(marker['longitude']), Number(marker['latitude'])])
                .setPopup(popup)
                .addTo(map);

        });
        //END: CCTV LIST
    </script>

<?php }} ?>