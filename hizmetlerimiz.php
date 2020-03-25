

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
                <img src="images/<?php echo $row["resim"];?>" alt="" class="img-responsive">
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
                <img src="images/<?php echo $row["resim"];?>" alt="" class="img-responsive">
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


                    <img src="images/<?php echo $row["resim"]?>">
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