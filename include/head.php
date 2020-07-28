<?php
session_start();
if (empty($_SESSION['admin'])) {
   header('../../index.php');
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../Stylesheet/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../Stylesheet/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../stylesheet/css/style.css">
    <title>gest-agent</title>
</head>

<?php
include('../../Class/main.class.php');
$class=new main();

include('../../include/updateportion.php');
?>