<?php
$sabit=new  sabitler();
$anadizin=$sabit->anadizin;
$query = $db->query("SELECT * FROM ayar where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
    foreach( $query as $row ){?>



<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Site Ayar </h1>

          </div>

          <!-- Content Row -->
          <div class="row">

              <div class="col-lg-6">
<form action="fankfonk/fankfonk.php" method="post" enctype="multipart/form-data">
                  <div class="card border-bottom-info ">
                      <div class="card-body">
                          <i class="text-center">Site Logo </i><br>
                          <i class="text-center">Mevcut </i>

                          <img class="img-thumbnail " src=<?php //echo $anadizin?>/gocmeztesisat/images/<?php  echo $row["logo"]; ?>>

                          <input type="file" class="custom-file" name="fileToUpload" id="fileToUpload" value="gocmez.png" >

                            <input type="hidden" name="sayfa" value="ayar" >

                          <div class="row p-4" >
                          <i class="text-center">Site İsmi </i>
                          <input type="text" value="<?php  echo $row["title"]; ?>" maxlength="50" required class="text-box2 btn-block" name="title" >
                           </div>

                          <div class="row p-4" >
                              <i class="text-center">Keywords </i>
                              <input type="text" value="<?php  echo $row["keywords"]; ?>"  maxlength="255" required class="text-box2 btn-block" name="keywords" >
                          </div>


                          <div class="row p-4" >
                              <i class="text-center">Açıklama </i>
                              <input type="" value="<?php  echo $row["aciklama"]; ?>" maxlength="158" required class="text-box2 btn-block" name="aciklama" >
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
$db = null;
              ?>

      </div>


