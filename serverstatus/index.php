<?php


class CheckDevice
{

    public function myOS()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === (chr(87) . chr(73) . chr(78)))
            return true;

        return false;
    }

    public function ping($ip_addr)
    {
        if ($this->myOS()) {
            if (!exec("ping -n 1 -w 1 " . $ip_addr . " 2>NUL > NUL && (echo 0) || (echo 1)"))
                return true;
        } else {
            if (!exec("ping -q -c1 " . $ip_addr . " >/dev/null 2>&1 ; echo $?"))
                return true;
        }

        return false;
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Microbiz One Inc/">
    <title>Bayan911 Server/System Status</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        <blade media|%20(min-width%3A%20768px)%20%7B%0D>.bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        #loading {
            display: flex;
            position: fixed;
            z-index: 100;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            background-image: url("https://forums.gameex.com/forums/uploads/monthly_2019_12/FG_Dark.gif.17eb66ffee5037406b1b0cfeadcd79d6.gif");
            background-repeat: no-repeat;
            background-position: center;
        }
		
		#page    { display: none; }
    </style>


    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <link rel="shortcut icon" href="bayan911-logo.png">
	
</head>

<body>
    <div id="loading"></div>

    <div class="col-lg-8 mx-auto p-4 py-md-5" id="page">
        <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <img src="bayan911-logo.png" style="width: 35px; height: 35px;" />&nbsp;&nbsp;
                <span class="fs-4">Bayan911 Server/System Status</span>
            </a>
        </header>

        <main>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">IP</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="bayan911.png" style="width: 80px; height: 40px;" /> IMS Server</td>
                        <td><a href="http://124.105.63.203:8080/" target="_blank">http://124.105.63.203:8080/</a></td>
                        <td>
                            <?php
                            $url = "http://124.105.63.203:8080/";
                            $result =  (get_headers($url))[0] == 'HTTP/1.1 200 OK' ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="3cx.png" style="width: 80px; height: 40px;" /> 3CX Server</td>
                        <td><a href="https://sbma911.3cx.ph:5001/" target="_blank">https://sbma911.3cx.ph:5001/</a></td>
                        <td>
                            <?php
                            $url = "https://sbma911.3cx.ph:5001/";
                            $result =  (get_headers($url))[0] == 'HTTP/1.1 200 OK' ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><img src="avaya.png" style="width: 80px; height: 40px;" /> AVAYA SIP Trunk 911</td>
                        <td>172.16.19.88</td>
                        <td>
                            <?php
                            $ip_addr = "172.16.19.88";
                            $result = ((new CheckDevice())->ping($ip_addr)) ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><img src="globe.png" style="width: 80px; height: 40px;" /> Globe 911 SIP</td>
                        <td>10.91.52.124</td>
                        <td>
                            <?php
                            $ip_addr = "10.91.52.124";
                            $result = ((new CheckDevice())->ping($ip_addr)) ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td><img src="yealink.png" style="width: 80px; height: 40px;" /> IP Phone 1 (Agent 1)</td>
                        <td>172.16.1.107</td>
                        <td>
                            <?php
                            $ip_addr = "172.16.1.107";
                            $result = ((new CheckDevice())->ping($ip_addr)) ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td><img src="yealink.png" style="width: 80px; height: 40px;" /> IP Phone 2 (Agent 2)</td>
                        <td>172.16.1.108</td>
                        <td>
                            <?php
                            $ip_addr = "172.16.1.108";
                            $result = ((new CheckDevice())->ping($ip_addr)) ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td><img src="yealink.png" style="width: 80px; height: 40px;" /> IP Phone 3 (Agent 3)</td>
                        <td>172.16.1.109</td>
                        <td>
                            <?php
                            $ip_addr = "172.16.1.109";
                            $result = ((new CheckDevice())->ping($ip_addr)) ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td><img src="dell.png" style="width: 80px; height: 40px;" /> Workstation 1</td>
                        <td>172.16.1.101</td>
                        <td>
                            <?php
                            $ip_addr = "172.16.1.101";
                            $result = ((new CheckDevice())->ping($ip_addr)) ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td><img src="dell.png" style="width: 80px; height: 40px;" /> Workstation 2</td>
                        <td>172.16.1.102</td>
                        <td>
                            <?php
                            $ip_addr = "172.16.1.102";
                            $result = ((new CheckDevice())->ping($ip_addr)) ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td><img src="dell.png" style="width: 80px; height: 40px;" /> Workstation 3</td>
                        <td>172.16.1.103</td>
                        <td>
                            <?php
                            $ip_addr = "172.16.1.103";
                            $result = ((new CheckDevice())->ping($ip_addr)) ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td><img src="yeastar.png" style="width: 80px; height: 40px;" /> GSM Gateway 1</td>
                        <td>172.16.1.114</td>
                        <td>
                            <?php
                            $ip_addr = "172.16.1.114";
                            $result = ((new CheckDevice())->ping($ip_addr)) ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td><img src="yeastar.png" style="width: 80px; height: 40px;" /> GSM Gateway 2</td>
                        <td>172.16.1.115</td>
                        <td>
                            <?php
                            $ip_addr = "172.16.1.115";
                            $result = ((new CheckDevice())->ping($ip_addr)) ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td><img src="dinstar.png" style="width: 80px; height: 40px;" /> Trunk Gateway 1</td>
                        <td>172.16.1.112</td>
                        <td>
                            <?php
                            $ip_addr = "172.16.1.112";
                            $result = ((new CheckDevice())->ping($ip_addr)) ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td><img src="dinstar.png" style="width: 80px; height: 40px;" /> Trunk Gateway 2</td>
                        <td>172.16.1.113</td>
                        <td>
                            <?php
                            $ip_addr = "172.16.1.113";
                            $result = ((new CheckDevice())->ping($ip_addr)) ? "<span class='badge bg-success'>Online</span>" : "<span class='badge bg-danger'>Offline</span>";
                            echo $result;
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
			
			<br>
			
			<table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Limit</th>
                        <th scope="col">Current</th>
                        <th scope="col">Available</th>
                    </tr>
                </thead>
                <tbody>                    
                    <tr>
						<th scope="row">1</th>
						<td>Mobile App Users License</td>
						<td  class="text-info">20</td>
						<td  class="text-secondary">
						<?php 
							$limit = json_decode(file_get_contents("http://172.16.1.111:8080/api/serverstatus/getlimit.php"));
							echo $limit->responder;
						?>
						</td>
						<td  class="text-success"><?php echo (20-$limit->responder) ?></td>
                    </tr>
					<tr>
						<th scope="row">2</th>
						<td>Web Client/User License</td>
						<td  class="text-info">20</td>
						<td  class="text-secondary">
						<?php 
							$limit = json_decode(file_get_contents("http://172.16.1.111:8080/api/serverstatus/getlimit.php"));
							echo ($limit->user-1);
						?>
						</td>
						<td  class="text-success"><?php echo (20-($limit->user-1)) ?></td>
                    </tr>
                </tbody>
            </table>
        </main>
        <footer class="pt-5 my-5 text-muted border-top">
            Created by Microbiz One Inc &copy; 2022
        </footer>
    </div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        const wait = (delay = 0) => new Promise(resolve => setTimeout(resolve, delay));
        const setVisible = (elementOrSelector, visible) => (typeof elementOrSelector === 'string' ? document.querySelector(elementOrSelector) : elementOrSelector).style.display = visible ? 'block' : 'none';

        setVisible('#page', false);
        setVisible('#loading', true);

        document.addEventListener('DOMContentLoaded', () =>
            wait(1000).then(() => {
                setVisible('#page', true);
                setVisible('#loading', false);
            }));
    </script>
</body>

</html>