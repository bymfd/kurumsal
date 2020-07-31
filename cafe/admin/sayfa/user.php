<?php
$sabit=new  sabitler();
$anadizin=$sabit->anadizin;
$query = $db->query("SELECT * FROM user where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
foreach( $query as $row ){?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Yönetici Ayarları </h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-6">
            <form action="fankfonk/fankfonk.php" method="post" enctype="multipart/form-data">
                <div class="card border-bottom-info ">
                    <div class="card-body">


                        <input type="hidden" name="sayfa" value="user" >

                        <div class="row p-4" >
                            <i class="text-center">Yönetici Giriş ismi </i>
                            <input type="text" value="<?php  echo $row["name"]; ?>" minlength="6" maxlength="50" required class="text-box2 btn-block" name="name" >
                        </div>

                        <div class="row p-4" >
                            <i class="text-center">Yönetici Giriş Parolası </i>
                            <input type="password" value="<?php  echo $row["pass"]; ?>" minlength="6" maxlength="15" required class="text-box2 btn-block" name="pass" >
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


