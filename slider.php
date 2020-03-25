<section>
<div class="container "style="padding-top:7rem; padding-bottom:7rem;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>


        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <?php

            $sql = $db->prepare("SELECT * FROM hizmetler");
            $sql->execute();
            $yer=1;
            while($row=$sql->fetch(PDO::FETCH_ASSOC)) {

           if ($yer==1){?>

               <div class="item active">
                   <img src="images/<?php $row["resim"] ?>" alt="" style="width:100%;max-width: 50rem">
               </div>
           <?php
           $yer++;
           }


           else{?>



               <div class="item ">
                   <img src="images/<?php $row["resim"] ?>" alt="" style="width:100%; max-width: 50rem">
               </div>

         <?php  }
            }

            ?>








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
</section>