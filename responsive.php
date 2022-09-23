<html style='display: none';></html>
<?php
    include 'admin/database/system_detail.php';
    session_start();
if (isset($_SESSION['screen_width']) and isset($_SESSION['screen_height'])) {
    echo "<script>history.back();</script>";
} else if (isset($_GET['width']) and isset($_GET['height'])) {
    $_SESSION['screen_width'] = $_GET['width'];
    $_SESSION['screen_height'] = $_GET['height'];
    $x = $_SERVER["REQUEST_URI"];
    $parsed = parse_url($x);
    $query = $parsed['query'];
    parse_str($query, $params);
    unset($params['width']);
    unset($params['height']);
    $string = http_build_query($params);
    $domain = $_SERVER['PHP_SELF'] . "?" . $string;
    header('Location: ' . $domain);
} else {
    $x = $_SERVER["REQUEST_URI"];
    $parsed = parse_url($x);
    $query = $parsed['query'];
    parse_str($query, $params);
    unset($params['width']);
    unset($params['height']);
    $string = http_build_query($params);
    $domain = $_SERVER['PHP_SELF'] . "?" . $string;
    echo '<script type="text/javascript">window.location = "' . $domain . '&width="+screen.width+"&height="+screen.height;</script>';
}
echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 250);</script>";
?>
<script>document.getElementById(html).style.display = 'none';</script>