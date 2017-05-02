<?
if (!function_exists("debugmessage")){
    function debugmessage($data, $header='', $color='', $ip='', $die=false) {
     if($color==null) $color='#008000';
         if(strlen($ip)<=0 || $_SERVER['REMOTE_ADDR']==$ip) {
              echo "<table border='0' style='color: ${color}; font-size: 8pt; border: 1px solid ${color};'><tr><td>";
              if(strlen($header)>0) { echo "[${header}]</td></tr><tr><td>"; }
              if(is_array($data) || is_object($data)) {
                echo "<pre>";
                print_r($data);
                echo "</pre>";
              }else{
                echo $data;
              }
              echo "</td></tr></table>";
              if ($die===true){die();}
        }
    }
}
if (!function_exists("itdbg")){
    function itdbg($data,$die=false,$param=array()){
        if (function_exists("debugmessage")){
            $color=$msg=$cookie=null;
            
            if (is_array($param)){
                if (isset($param['color'])){$color=$param['color'];}
                if (isset($param['msg'])){$msg=$param['msg'];}
                if (isset($param['cookie'])){$msg=$param['cookie'];}
            }else if(is_integer($param)){
                $color=$param;
            }
            
            if (!empty($color)){
                switch($color){
                    case "1":
                        $color='#008000';
                    break;
                    case "2":
                        $color='#0D2AFF';
                    break;
                    case "3":
                        $color='#FF0000';
                    break;
                    case "4":
                        $color='#FF5D00';
                    break;
                }
            }
            $arrIPs=array('109.195.52.141');
            if (in_array($_SERVER['REMOTE_ADDR'],$arrIPs)){
                if (!empty($cookie)){
                    if (isset($_COOKIE['dev'])){
                        debugmessage($data,(!empty($msg)?$msg:NULL),$color,$_SERVER['REMOTE_ADDR'],$die);
                    }
                }else{
                    debugmessage($data,(!empty($msg)?$msg:NULL),$color,$_SERVER['REMOTE_ADDR'],$die);
                }
            }
        }
    }
}