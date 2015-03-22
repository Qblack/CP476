<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Quinton Black</title>
    <link href="static/css/darkly.css" rel="stylesheet">
    <link href="static/css/styles.css" rel="stylesheet">
    <?php
        require_once('Mobile_Detect.php');
        require_once("cgi-bin/IPstorage.php");
        update_visitor((string)$_SERVER["REMOTE_ADDR"]);
    ?>


</head>
<?php
    $detect = new Mobile_Detect();
    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    if ($deviceType == "computer" and !isset($_GET["mobile"])) {
        include_once("computer_index.php");
    } else {
        include_once("badgerphone.php");
    }
?>


</html>