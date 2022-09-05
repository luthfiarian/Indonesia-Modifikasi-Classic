<?php
session_start();
if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
    $width_reso = $_SESSION['screen_width'];

    if($width_reso <= 486){
        $w_reso = 360;
        $h_reso = 150;
    } else if($width_reso <= 596){
        $w_reso = 400;
        $h_reso = 175;
    } else if($width_reso <= 720){
        $w_reso = 460;
        $h_reso = 200;
    } else if($width_reso <= 995){
        $w_reso = 500;
        $h_reso = 260;
    } else if($width_reso >= 1100){
        $w_reso = 560;
        $h_reso = 300;
    }
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
    $width_reso = $_SESSION['screen_width'];

    if($width_reso <= 486){
        $w_reso = 360;
        $h_reso = 150;
    } else if($width_reso <= 596){
        $w_reso = 400;
        $h_reso = 175;
    } else if($width_reso <= 720){
        $w_reso = 460;
        $h_reso = 200;
    } else if($width_reso <= 995){
        $w_reso = 500;
        $h_reso = 260;
    } else if($width_reso >= 1100){
        $w_reso = 560;
        $h_reso = 300;
    }
} else {
    $x=$_SERVER["REQUEST_URI"];    
    $parsed = parse_url($x);
    $undefined_variable = isset($parsed['query']);
    if($undefined_variable != TRUE){
        echo "<script>alert('Kami mendeteksi adanya kejanggalan pada peramban web Anda, membuat website tidak berjalan sempurna');alert('Gunakan peramban web yang mendukung Seperti Chrome, Mozilla, Edge, Safari dan lainnya');</script>";
    }
}




    // Salinan
//     session_start();
// if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
//     echo 'User resolution: ' . $_SESSION['screen_width'] . 'x' . $_SESSION['screen_height'];
//     print_r($_GET);
// } else if(isset($_GET['width']) AND isset($_GET['height'])) {
//     $_SESSION['screen_width'] = $_GET['width'];
//     $_SESSION['screen_height'] = $_GET['height'];
// $x=$_SERVER["REQUEST_URI"];    
//     $parsed = parse_url($x);
// $query = $parsed['query'];
// parse_str($query, $params);
// unset($params['width']);
// unset($params['height']);
// $string = http_build_query($params);
// $domain=$_SERVER['PHP_SELF']."?".$string;
//         header('Location: ' . $domain);
// } else {
// $x=$_SERVER["REQUEST_URI"];    
//     $parsed = parse_url($x);
// $query = $parsed['query'];
// parse_str($query, $params);
// unset($params['width']);
// unset($params['height']);
// $string = http_build_query($params);
// $domain=$_SERVER['PHP_SELF']."?".$string;
//     echo '<script type="text/javascript">window.location = "' . $domain . '&width="+screen.width+"&height="+screen.height;</script>';
// }
?>