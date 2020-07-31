<?php
$sabit=new  sabitler();
$anadizin=$sabit->anadizin;
$query = $db->query("SELECT * FROM kurumsal where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
foreach( $query as $row ){?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kurumsal Ayarları </h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-6">
            <form action="fankfonk/fankfonk.php" method="post" enctype="multipart/form-data">
                <div class="card border-bottom-info ">
                    <div class="card-body">


                        <input type="hidden" name="sayfa" value="kurumsal" >

                        <div class="row p-4" >
                            <i class="text-center">Baslik </i>
                            <input type="text" value="<?php  echo $row["baslik"]; ?>" minlength="6" maxlength="50" required class="text-box2 btn-block" name="baslik" >
                        </div>


                        <div class="row p-4" >
                            <i class="text-center">Slogan</i>
                            <input type="text" name="slogan" minlength="6"  maxlength="50"  required class="text-box-2 btn-block"  value="<?php  echo $row["slogan"];?> ">

                        </div>

                        <div class="row p-4" >
                            <i class="text-center">Yazı </i>
                            <textarea name="yazi" minlength="6"   required class="text-box-2 btn-block"> <?php  echo $row["yazi"]; ?> </textarea>
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


