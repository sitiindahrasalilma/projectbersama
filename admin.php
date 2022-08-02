<?php 
session_start();
include "../conf/connection.php";
include "../conf/baseurl.php";

if(empty($_SESSION['login']) OR $_SESSION['login']=="" OR !isset($_SESSION['login'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user=scalable=no, initial-scale=1, maximum-scale=1"/>
    <meta name="msapplicationtap-highlight" content="no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="milestone">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black">
    <meta name="apple-mobile-web-app-tittle" content="milestone">
    <meta name="theme-color" content="#4c7ff0">
    <title>siakad MISSPI</title>
    <!-- page styleshets -->
    <!-- end page stylesheets -->

    <!-- main area -->
    <div class="main content">
        <div class="contet-view">
            <div class="row">
                <?php require_once("content_admin.php");?>
            </div>
        </div>
    </div>
</head>
<body>
    <?php 
    $qmn = $db->query("select * from tb_menu where subdari=0 order by urutan ASC");
    while($rmn = $qmn->fetch_array()){
    ?>
        <li>
            <a href="admin.php<?php echo $rmn['link'];?>">
                <i class="material-icons text-primary"><?php echo $rmn['custome_style'];?></i>
                <span><?php echo $rmn['nmmenu'];?></span>
            </a>
        </li>
    <?php
    }
?>
</body>
</html>