<?php


include "header.php";
include "slider.php";

if (isset($_GET["durum"])){
    if($_GET["durum"]){?>

        <script type="text/javascript">
            alert("Rezervasyonunuz alındı iyi günler... :)");

        </script>
    <?php }
    else
    {?>


        <script type="text/javascript">
        alert("Rezervasyonunuz alınamadı, Tekrar deneyebilirsiniz eğer bu durum ilk kez yaşanmıyorsa bunu bize bildirmenizden memnun oluruz.");

        </script>

 <?php   }


}

?>
    <!-- END nav -->




<?php

$query = $db->query("SELECT * FROM kurumsal where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
    foreach( $query as $row2 ){?>


    <section id="about" class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading"><?php echo $row2["baslik"] ?></span>
	          <h2 class="mb-4"><?php echo $row2["slogan"]; ?></h2>
	        </div>
	        <div>
	  				<p><?php echo $row2["yazi"]; ?></p>
	  			</div>
  			</div>
    	</div>
    </section>

    <?php }}?>


<?php include "menu2.php"?>


<!--kullancı yorumları-->
    <section  class="ftco-section img" id="ftco-testimony" style="background-image: url(images/bg_1.jpg);"  data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
	    <div class="container">
	      <div class="row justify-content-center mb-5">
	        <div class="col-md-7 heading-section text-center ftco-animate">
	        	<span class="subheading">Keşfet</span>
	          <h2 class="mb-4">Hakkımızda Söylenenler</h2>
	          <p>Bizi tercih eden ve değerli yorumlarını bizimle paylaşan müşterilerimize kulak verelim.</p>
	        </div>
	      </div>
	    </div>
	    <div class="container-wrap">
	      <div class="row d-flex no-gutters">


              <?php

              $query = $db->query("SELECT * FROM hizmetler", PDO::FETCH_ASSOC);
              if ( $query->rowCount() ){
              foreach( $query as $row3 ){?>

	        <div class="col-lg align-self-sm-end ftco-animate">
	          <div class="testimony">
	            <blockquote>
	              <p><?php echo $row3["aciklama"] ?></p>
	            </blockquote>
	            <div class="author d-flex mt-5">
	              <div class="image mr-3 align-self-center">
	                <img src="images/<?php echo $row3["resim"] ?>" alt="">
	              </div>
	              <div class="name align-self-center"><?php echo $row3["baslik"] ?> </div>
	            </div>
	          </div>
	        </div>
<?php }} ?>


	      </div>
	    </div>
	  </section>

<?php
include "rez.php";

?>



<?php
include "footer.php";
    ?>
