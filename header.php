<?php
include "admin/fankfonk/db.php";
$sabit=new  sabitler();
$resim_ana_url=$sabit->resim_ana_url;
$query = $db->query("SELECT * FROM ayar where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
foreach( $query as $row ){?>




<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Meta -->
    <title><?php  echo $row["title"]; ?></title>
    <meta name="keywords" content="<?php  echo $row["keywords"]; ?>">
    <meta name="description" content="<?php  echo $row["aciklama"]; ?>">
    <meta name="author" content="mfd">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet">




    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>



<header class="header site-header">
    <div class="container">

        <nav class="navbar navbar-default  navbar-fixed-top ">
            <div class="container site-header">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand about-img" href="index.php"><img src="<?php  echo $resim_ana_url.$row["logo"]; ?>" alt="<?php  echo $row["title"]; ?>"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Ana Sayfa</a></li>
                        <li><a href="#kurumsal">Kurumsal</a></li>
                        <li><a href="#hizmetlerimiz">Hizmetlerimiz</a></li>
                        <li><a href="#iletisim">İletişim</a></li>
                       <?php
                       $query = $db->query("SELECT telefon from iletisim WHERE id =1")->fetch(PDO::FETCH_ASSOC);
                       if ( $query ){
                          $tel=$query["telefon"];
                       }

                       ?>
                        <li class="lastlink hidden-xs hidden-sm"><a class="btn btn-primary" href="tel:<?php  echo $tel; ?>"><i class="fa fa-phone"></i> <?php  echo $tel; ?></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav><!-- end nav -->
    </div><!-- end container -->
</header><!-- end header -->
<?php
}
}

?>
