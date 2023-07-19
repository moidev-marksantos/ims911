<?php 

include_once 'modules/API/Mobile/API.php';

class Dropdown{

    public function get($name)
    {
        switch($name){
            case 'department'   :   $this->department(); break;
            case 'status'       :   $this->status();     break;
            default: 
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "Invalid dropdown parameter name. Please try again!"
            )));
            break;
        }
    }

    private function status(){

        global $adb;
        $result = $adb->pquery("SELECT * FROM vtiger_ticketstatus", array());
        $dropdown_arr = array();
        if($adb->num_rows($result) > 0){          
            for($index = 0; $index < $adb->num_rows($result); $index++){
                array_push($dropdown_arr,
                    array(
                        "id" => $adb->query_result($result,$index,"ticketstatus_id"),
                        "name" => $adb->query_result($result,$index,"ticketstatus"),
                    )
                );
            }
            print_r(json_encode(array(
                "status"    => "Success",
                "result"    => $dropdown_arr                
            )));
        }
        else{
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "Getting dropdown data failed. Please try again."
            )));
        }

       
    }

    private function department(){

        global $adb;
        $result = $adb->pquery("SELECT * FROM vtiger_cf_937", array());
        $dropdown_arr = array();
        if($adb->num_rows($result) > 0){          
            for($index = 0; $index < $adb->num_rows($result); $index++){
                array_push($dropdown_arr,
                    array(
                        "id" => $adb->query_result($result,$index,"cf_937id"),
                        "name" => $adb->query_result($result,$index,"cf_937"),
                    )
                );
            }
            print_r(json_encode(array(
                "status"    => "Success",
                "result"    => $dropdown_arr                
            )));
        }
        else{
            http_response_code(400);
            print_r(json_encode(array(
                "status"    => "Error",
                "result"    => "Getting dropdown data failed. Please try again."
            )));
        }

       
    }
}

?>