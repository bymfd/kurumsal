<section class="home-slider owl-carousel">


<?php
$resim_ana_url=$sabit->resim_ana_url;
$yer=1;
//  include "admin/fankfonk/db.php";
$query = $db->query("SELECT * FROM slider", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
    foreach( $query as $row ){?>



    <div class="slider-item" style="background-image: url(<?php echo $resim_ana_url.$row["resim"];?>);"><!--  iamge -->
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading"><?php echo$row["baslik"];?></span>
                    <h1 class="mb-4"><?php echo $row["baslik2"];?></h1>
                    <p class="mb-4 mb-md-5">
                        <?php echo $row["aciklama"];?></p>
                    <p>  <a href="#about" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Daha Fazla</a></p>
                </div>

            </div>
        </div>
    </div>



    <?php }} ?>



</section>

<?php
$query = $db->query("SELECT * from iletisim WHERE id =1")->fetch(PDO::FETCH_ASSOC);
if ( $query ){
?>
<!-- slider alt bilgilendirme  -->

<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>   <a  href="tel:000 (123) 456 7890"><?php echo $query["telefon"] ?></a></h3>

                        </div>
                    </div>



                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>Adres</h3>
                            <p><?php echo $query["adres"] ?></p>
                        </div>
                    </div>



                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Çalışma Saatlerimiz</h3>
                            <p><?php echo $query["saatler"] ?></p>
                        </div>
                    </div>
                </div>
            </div>

           <?php }

            ?>
        </div>
    </div>
</section>