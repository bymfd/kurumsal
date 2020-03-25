<section>
<div class="container "style="padding-top:7rem; padding-bottom:7rem;">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">


            <!-- Wrapper for slides -->
            <div class="carousel-inner">


                <?php
                $yer=1;
              //  include "admin/fankfonk/db.php";
                $query = $db->query("SELECT * FROM slider", PDO::FETCH_ASSOC);
                if ( $query->rowCount() ){
                foreach( $query as $row ){

                    if ($yer==1){?>


                        <div class="item active">
                            <img src="images/<?php echo $row["resim"];?>" alt="Los Angeles" style="width:100%;">
                        </div>
                            <?php  $yer++; }else{?>



                <div class="item">
                    <img src="images/<?php echo $row["resim"];?>" alt="Chicago" style="width:100%">
                </div>

                        <?php }}} ?>






                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
</div>
</section>