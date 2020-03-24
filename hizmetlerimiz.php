

<section class="section">
    <div class="container">
        <div class="section-title text-center ">

            <h3>Hizmetlerimiz</h3>
        </div><!-- end section-title -->
        <div class="row service-list">
<?php
$sql = $db->prepare("SELECT * FROM hizmetler");
$sql->execute();
$yer=1;
while($row=$sql->fetch(PDO::FETCH_ASSOC)) {

    if ($yer==1){?>

            <div class="col-md-4 col-sm-12 col-xs-12 first">
                <div class="service-wrapper">
                    <img src="images/<?php echo $row["resim"];?>" alt="" class="img-responsive">
                    <div class="service-details">
                        <h4><a href="service-01.html" title=""><?php echo $row["baslik"];?></a></h4>
                        <p><?php echo $row["aciklama"];?></p>
                        <a href="#" class="readmore">Dahası...</a>
                    </div>
                </div><!-- end service-wrapper -->
            </div><!-- end col -->


   <?php
    $yer++;
    }


    else if ($yer==2){?>

        <div class="col-md-4 col-sm-12 col-xs-12 ">
            <div class="service-wrapper">
                <img src="images/<?php echo $row["resim"];?>" alt="" class="img-responsive">
                <div class="service-details">
                    <h4><a href="service-01.html" title=""><?php echo $row["baslik"];?></a></h4>
                    <p><?php echo $row["aciklama"];?></p>
                    <a href="#" class="readmore">Dahası...</a>
                </div>
            </div><!-- end service-wrapper -->
        </div><!-- end col -->


        <?php
        $yer++;
    }
    else {?>


                <div class="col-md-4 col-sm-12 col-xs-12 last ">
            <div class="service-wrapper">
                <img src="images/<?php echo $row["resim"];?>" alt="" class="img-responsive">
                <div class="service-details">
                    <h4><a href="service-01.html" title=""><?php echo $row["baslik"];?></a></h4>
            <p><?php echo $row["aciklama"];?></p>
            <a href="#" class="readmore">Dahası...</a>
        </div>
    </div><!-- end service-wrapper -->
    </div><!-- end col -->


 <?php $yer=0;   }


}

?>



        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->