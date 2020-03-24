<?php
$sabit=new  sabitler();
$anadizin=$sabit->anadizin;
$query = $db->query("SELECT * FROM iletisim where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
foreach( $query as $row ){?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">İletişim Ayarları </h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-6">
            <form action="fankfonk/fankfonk.php" method="post" enctype="multipart/form-data">
                <div class="card border-bottom-info ">
                    <div class="card-body">


                        <input type="hidden" name="sayfa" value="iletisim" >

                        <div class="row p-4" >
                            <i class="text-center">Telefon </i>
                            <input type="tel" value="<?php  echo $row["telefon"]; ?>" minlength="6" maxlength="15" required class="text-box2 btn-block" name="telefon" >
                        </div>


                        <div class="row p-4" >
                            <i class="text-center">Fax</i>
                            <input type="fax" name="fax" minlength="6"  maxlength="20"  required class="text-box-2 btn-block"  value="<?php  echo $row["fax"];?> ">

                        </div>

                        <div class="row p-4" >
                            <i class="text-center">Adres </i>
                            <textarea name="adres" minlength="6" maxlength="500"   required class="text-box-2 btn-block"> <?php  echo $row["adres"]; ?> </textarea>
                        </div>


                        <div class="row p-4" >
                            <i class="text-center">Facebook</i>
                            <input type="text" name="face" minlength="6"  maxlength="50"  required class="text-box-2 btn-block"  value="<?php  echo $row["facebook"];?> ">

                        </div>



                        <div class="row p-4" >
                            <i class="text-center">İnstagram</i>
                            <input type="insta" name="insta" minlength="6"  maxlength="50"  required class="text-box-2 btn-block"  value="<?php  echo $row["instagram"];?> ">

                        </div>


                        <div class="text-center" >
                            <input type=submit class="btn-success rounded-lg " value="kaydet">

                        </div>

                    </div>
                </div>
        </div>



        </form>
        <?php
        }
        }
        else{

            echo "<p>"." garip bir şekilde boş görünüyor bu bir hata olabilir :(";

        }
        $db = null;
        ?>

    </div>


