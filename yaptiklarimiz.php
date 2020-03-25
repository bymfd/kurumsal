
<section class="section bt">
    <div class="container">
        <div class="section-title text-center">

            <h3>Yaptıklarımız</h3>
        </div><!-- end section-title -->




        <div class="owl-carousel owl-theme lightcasestudies withhover">

            <?php

            $sql = $db->prepare("SELECT * FROM yaptiklarimiz");
            $sql->execute();
            $yer=1;
            while($row=$sql->fetch(PDO::FETCH_ASSOC)) {

         ?>

                <!-- Button trigger modal -->





                <div class="item-carousel">


                <div class="case-box ">

                    <img src="images/<?php echo $row["resim"]?>">

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