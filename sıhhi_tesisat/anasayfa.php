


<div class="container-fluid ">

    <?php

    include "slider.php";
    ?>
</div>


<section class="section">
    <div class="container">
        <div class="section-title text-center ">

            <h3>Hizmetlerimiz</h3>
        </div><!-- end section-title -->
        <div class="row service-list">
            <?php

            $resim_ana_url=$sabit->resim_ana_url;

            $sql = $db->prepare("SELECT * FROM hizmetler");
            $sql->execute();
            $yer=1;
            while($row=$sql->fetch(PDO::FETCH_ASSOC)) {

                if ($yer==1){?>

                    <div class="col-md-4 col-sm-12 col-xs-12 first">
                        <div class="service-wrapper">
                            <img src="<?php echo $resim_ana_url.$row["resim"];?>" alt="" class="img-responsive">
                            <div class="service-details">
                                <h4><a  title=""><?php echo $row["baslik"];?></a></h4>
                                <p><?php echo $row["aciklama"];?></p>
                                <a href="#hizmetler" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row["id"]?>" class="readmore">Dahası...</a>
                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->


                    <?php
                    $yer++;
                }


                else if ($yer==2){?>

                    <div class="col-md-4 col-sm-12 col-xs-12 ">
                        <div class="service-wrapper">
                            <img src="<?php echo $resim_ana_url.$row["resim"];?>" alt="" class="img-responsive">
                            <div class="service-details">
                                <h4><a title=""><?php echo $row["baslik"];?></a></h4>
                                <p><?php echo substr($row["aciklama"],0,150);?></p>
                                <a href="#hizmetler" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row["id"]?>" class="readmore">Dahası...</a>





                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->


                    <?php
                    $yer++;
                }
                else {?>


                    <div class="col-md-4 col-sm-12 col-xs-12 last ">
                        <div class="service-wrapper">
                            <img src="<?php echo $resim_ana_url.$row["resim"];?>" alt="" class="img-responsive">
                            <div class="service-details">
                                <h4><a title=""><?php echo $row["baslik"];?></a></h4>
                                <p><?php echo $row["aciklama"];?></p>
                                <a href="#hizmetler" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row["id"]?>" class="readmore">Dahası...</a>
                            </div>
                        </div><!-- end service-wrapper -->
                    </div><!-- end col -->


                    <?php $yer=0;   }


            }

            ?>



        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<?php

$sql = $db->prepare("SELECT * FROM hizmetler");
$sql->execute();
$yer=1;
while($row=$sql->fetch(PDO::FETCH_ASSOC)) {

    ?>

    <!-- Modal -->
    <div style="position: fixed;margin: auto; padding: 10rem "
    <div class="modal fade " id="exampleModalCenter<?php echo $row["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $row["baslik"] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <img src="<?php echo $resim_ana_url.$row["resim"]?>">
                    <p>

                        <?php echo $row["aciklama"] ?>
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>


    <?php
}?>



<section class="section bt">
    <div class="container">
        <div class="section-title text-center">

            <h3>Yaptıklarımız</h3>
        </div><!-- end section-title -->




        <div class="owl-carousel owl-theme lightcasestudies withhover">

            <?php
            $resim_ana_url=$sabit->resim_ana_url;
            $sql = $db->prepare("SELECT * FROM yaptiklarimiz");
            $sql->execute();
            $yer=1;
            while($row=$sql->fetch(PDO::FETCH_ASSOC)) {

                ?>

                <!-- Button trigger modal -->





                <div class="item-carousel">


                    <div class="case-box ">

                        <img src="<?php echo $resim_ana_url.$row["resim"]?>">

                        <div class="magnifier ">


                            <a  href="#yaptiklarimiz"  data-toggle="modal" data-target="#exampleModalCenter<?php echo $row["id"]?>"   ><i class="fa fa-eye" > </i> </a>


                        </div>
                    </div><!-- end case-box -->
                </div><!-- end col -->

            <?php }?>










        </div>
    </div>
</section>
<?php

$sql = $db->prepare("SELECT * FROM yaptiklarimiz");
$sql->execute();
$yer=1;
while($row=$sql->fetch(PDO::FETCH_ASSOC)) {

    ?>

    <!-- Modal -->
    <div style="position: fixed;margin: auto; padding: 10rem "
    <div class="modal fade " id="exampleModalCenter<?php echo $row["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $row["baslik"] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <img src="<?php echo $resim_ana_url.$row["resim"]?>">
                    <p>

                        <?php echo $row["aciklama"] ?>
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>


    <?php
}?>



<?php


$query = $db->query("SELECT * FROM iletisim where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
    foreach( $query as $row ){?>

        <section class="section">
            <div class="container">
                <div class="section-title text-center">

                    <h3>İletişim</h3>
                </div><!-- end section-title -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-details">
                            <h3>HOŞGELDİNİZ</h3>
                            <p>Sormak istediğiniz sorularınızı burada ki formdan yönlendirebilirsiniz.</p>
                            <p><?php echo  $row["adres"] ?></p>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <form class="contactform" action="iletisim.php" method="post">
                            <div class="form-group" >
                                <input type="text" class="form-control" id="name" name="isim" MAXLENGTH="45" minlength="6" placeholder="İSİM" required>
                                <input type="hidden" name="mesaj">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" MAXLENGTH="100" minlength="6" name="mail" placeholder="E-MAIL" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" MAXLENGTH="12" minlength="12" name="telefon" placeholder="5420000000" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" MAXLENGTH="50" minlength="6" name="konu" placeholder="KONU" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="mesaj" minlength="50" placeholder="MESAJ" MAXLENGTH="200" rows="7"></textarea>
                            </div>
                            <button type="submit" id="submit"  class="btn btn-primary"> GÖNDER </button>
                        </form>
                    </div><!-- end col -->

                    <div class="col-md-3 mb30">
                        <div class="contact-details">
                            <ul>
                                <li><i class="fa fa-phone"></i> <span><?php echo $row["telefon"]?></span></li>
                                <li><i class="fa fa-fax"></i> <span><?php echo $row["fax"]?></span></li>
                                <li><i class="fa fa-facebook"></i> <span><a href="https://<?php echo $row["facebook"];?>"><?php echo $row["facebook"]?></a></span></li>
                                <li><i class="fa fa-instagram"></i> <span><a href="https://<?php echo $row["instagram"];?>"><?php echo $row["instagram"]?></a></span></li>

                            </ul>
                        </div><!-- end contact details -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
        <?php
    }
}

?>
