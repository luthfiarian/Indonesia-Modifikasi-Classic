<?php
session_start();
if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
    echo 'User resolution: ' . $_SESSION['screen_width'] . 'x' . $_SESSION['screen_height'];
    print_r($_GET);
} else if(isset($_GET['width']) AND isset($_GET['height'])) {
    $_SESSION['screen_width'] = $_GET['width'];
    $_SESSION['screen_height'] = $_GET['height'];
$x=$_SERVER["REQUEST_URI"];    
    $parsed = parse_url($x);
$query = $parsed['query'];
parse_str($query, $params);
unset($params['width']);
unset($params['height']);
$string = http_build_query($params);
$domain=$_SERVER['PHP_SELF']."?".$string;
        header('Location: ' . $domain);
} else {
$x=$_SERVER["REQUEST_URI"];    
    $parsed = parse_url($x);
$query = $parsed['query'];
parse_str($query, $params);
unset($params['width']);
unset($params['height']);
$string = http_build_query($params);
$domain=$_SERVER['PHP_SELF']."?".$string;
    echo '<script type="text/javascript">window.location = "' . $domain . '&width="+screen.width+"&height="+screen.height;</script>';
}

$width_reso = $_SESSION['screen_width'];
$height_reso = $_SESSION['screen_height'];

    if($width_reso >= 1920){
        $w_reso = 560;
        if($height_reso >= 1080){
            $h_reso = 300;
        }
    }else if($width_reso >= 1280){
        $w_reso = 460;
        if($height_reso >= 720){
            $h_reso = 200;
        }
    }else if($width_reso <= 393){
        $w_reso = 360;
        if($height_reso <= 873){
            $h_reso = 150;
        }
    }

?>