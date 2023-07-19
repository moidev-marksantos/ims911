<?php      
        // make session read-only
        session_start();
        session_write_close();

        // disable default disconnect checks
        ignore_user_abort(true);

        // set headers for stream
        header("Content-Type: text/event-stream");
        header("Cache-Control: no-cache");
        header("Access-Control-Allow-Origin: *");

        // Is this a new stream or an existing one?
        $lastEventId = floatval(isset($_SERVER["HTTP_LAST_EVENT_ID"]) ? $_SERVER["HTTP_LAST_EVENT_ID"] : 0);
        if ($lastEventId == 0) {
            $lastEventId = floatval(isset($_GET["lastEventId"]) ? $_GET["lastEventId"] : 0);
        }

        echo ":" . str_repeat(" ", 2048) . "\n"; // 2 kB padding for IE
        echo "retry: 2000\n";

        // start stream
        while(true){

            if(connection_aborted()){
                exit();
            }
            else{
                // here you will want to get the latest event id you have created on the server, but for now we will increment and force an update
                $latestEventId = $lastEventId+1;
              
                $result = array(
                    "is_popup" => true,
                    "link" => true,
                    "extension" => true
                );
				
                echo "id: " . $latestEventId . "\n";
                echo "data: ".json_encode($result)."\n\n";
                ob_flush();
                flush();
                
            }
            // 2 second sleep then carry on
            sleep(2);
        }
            
?>