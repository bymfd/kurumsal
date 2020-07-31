
<section id="menu" class="ftco-menu">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Keşfet</span>
            <h2 class="mb-4">Menü</h2>
            <p>Her zaman taze ve yüksek kaliteli ürünler ile sizlere unutulmaz tatlar sunuyoruz.</p>
          </div>
        </div>

	    		<div class="col-lg-12 ftco-animate p-md-5">


		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">


                            <button class="btn btn-default nav-link bg-dark filter-button" data-filter="all">Hepsi</button>

                            <?php
                            $resim_ana_url=$sabit->resim_ana_url;
                            $yer=1;
                            // include "admin/fankfonk/db.php";
                            $query = $db->query("SELECT * FROM kategori", PDO::FETCH_ASSOC);
                            if ( $query->rowCount() ){
                            foreach( $query as $row ){ ?>

                            <button class="btn btn-default nav-link bg-dark filter-button" data-filter="<?php echo "kat".$row["id"] ?>"> <?php echo $row["isim"] ?></button>
                    <?php }} ?>






                    </div>



		          </div>


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row">


                    <?php
                    $resim_ana_url=$sabit->resim_ana_url;
                    $yer=1;
                    // include "admin/fankfonk/db.php";
                    $query = $db->query("SELECT * FROM menu", PDO::FETCH_ASSOC);
                    if ( $query->rowCount() ){
                    foreach( $query as $ro2w ){ ?>
                        <div class="col-md-3 filter <?php echo "kat".$ro2w["kategori"] ?> " >
                            <div class="menu-entry filter <?php echo "kat".$ro2w["kategori"] ?> ">
                                <a href="#menu" class="img filter <?php echo "kat".$ro2w["kategori"] ?>" style="background-image: url(<?php echo $resim_ana_url."/".$ro2w["resim"]  ?>);"></a>
                                <div class="text text-center pt-4 filter <?php echo "kat".$ro2w["kategori"] ?> ">
                                    <h3><a href="#menu"><?php echo $ro2w["isim"] ?></a></h3>
                                    <p><?php echo $ro2w["aciklma"] ?></p>
                                    <p class="price"><span><?php echo $ro2w["fiyat"] ?>₺</span></p>
                                    <p></p>
                                </div>
                            </div>
                        </div>



<?php }} ?>









                        </div>
                    </div>
                </div>
            </div>















		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>