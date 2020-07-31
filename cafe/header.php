<!DOCTYPE html>
<?php
include "admin/fankfonk/db.php";
$sabit=new  sabitler();
$resim_ana_url=$sabit->resim_ana_url;
$site_url=$sabit->site_url;
$query = $db->query("SELECT * FROM ayar where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
foreach( $query as $row0 ){?>

<html lang="tr">
<head>

    <title><?php echo $row0["title"]?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Description" content="<?php echo $row0["aciklama"]?>">
    <meta name="Keywords" content="<?php echo $row0["keywords"]?>">
    <meta name ="Author" content="https://github.com/bymfd">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand image mr-3 align-self-center "  href="<?php $site_url ?>">
                <img style="max-height: 120px;max-width: 120px; " src="images/<?php echo $row0["logo"]?>" alt="rumors">
            </a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Anasayfa</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">Hakkımızda</a></li>
                <li class="nav-item"><a href="#menu" class="nav-link">Menü</a></li>
                <li class="nav-item"><a href="#rez" class="nav-link">Rezervasyon</a></li>


                <li class="nav-item"><a href="#iletisim" class="nav-link">İletişim</a></li>

            </ul>
        </div>
    </div>
</nav>
<?php }} ?>