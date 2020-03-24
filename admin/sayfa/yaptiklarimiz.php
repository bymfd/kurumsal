<?php
$sabit=new  sabitler();
$anadizin=$sabit->anadizin;
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Yaptıklarımız </h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-6">
            <form action="fankfonk/fankfonk.php" method="post" enctype="multipart/form-data">
                <div class="card border-bottom-info ">
                    <div class="card-body">
                        <i class="text-center">Resim </i><br>

                        <input type="file" class="custom-file" name="fileToUpload" id="fileToUpload" value="gocmez.png" >

                        <input type="hidden" name="sayfa" value="yaptiklarimiz" >

                        <div class="row p-4" >
                            <i class="text-center">Başlık </i>
                            <input type="text"  maxlength="50" required class="text-box2 btn-block" name="baslik" >
                        </div>


                        <div class="row p-4" >
                            <i class="text-center">Açıklama </i>
                            <input type="" maxlength="158" required class="text-box2 btn-block" name="aciklama" >
                        </div>



                        <div class="text-center" >
                            <input type=submit class="btn-success rounded-lg " value="kaydet">

                        </div>

                    </div>
                </div>

        </div>


        </form>
        <div class="col-lg-6">

            <div class="card mb-4 py-3 border-bottom-primary">

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- DataTales Example -->

                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Mevcut tablosu</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-lg">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>İşlem</th>
                                            <th>Baslik</th>
                                            <th>Aciklama</th>
                                            <th>Resim</th>

                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>İşlem</th>
                                            <th>Baslik</th>
                                            <th>Aciklama</th>
                                            <th>Resim</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>

<?php
$query = $db->query("SELECT * FROM yaptiklarimiz", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
foreach( $query as $row ){?>

                                        <tr>
                                            <td>

                                                <a href="fankfonk/fankfonk.php/?durum=sil&id=<?php echo $row["id"];?>&sayfa=yaptiklarimiz" class="fa fa-trash "> </a>


                                                <!-- Button trigger modal -->
                                                <button type="button" class=" btn-circle btn-sm fa fa-pen" data-toggle="modal" data-backdrop="static" data-target="#exampleModal<?php echo $row["id"];?>">

                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal<?php echo $row["id"];?>" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Düzenle</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="fankfonk/fankfonk.php" method="post" name="f<?php echo $row["id"];?>" enctype="multipart/form-data">
                                                                <i class="text-center">Resim </i><br>
                                                                <i class="text-center">Mevcut </i>

                                                                <img class="img-thumbnail " src=<?php //echo $anadizin?>/gocmeztesisat/images/<?php  echo $row["resim"]; ?>>

                                                                <input type="file" class="custom-file" name="fileToUpload" id="fileToUpload" value="gocmez.png" >

                                                                <input type="hidden" name="sayfa" value="yaptiklarimiz" >
                                                                <input type="hidden" name="id" value="<?php echo $row["id"];?>" >


                                                                <div class="row p-4" >
                                                                    <i class="text-center">Baslik </i>
                                                                    <input type="text" value="<?php  echo $row["baslik"]; ?>" maxlength="50" required class="text-box2 btn-block" name="baslik" >
                                                                </div>


                                                                <div class="row p-4" >
                                                                    <i class="text-center">Açıklama </i>
                                                                    <input type="text" value="<?php  echo $row["aciklama"]; ?>" maxlength="158" required class="text-box2 btn-block" name="aciklama" >
                                                                </div>




                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                                                                <button type="submit" class="btn btn-primary">Kaydet</button>
                                                                </form>
                                                            </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>


                                            <td><p  class="overflow-hidden" > <?php  echo $row["baslik"]; ?>
                                                     </p></td>
                                            <td><p  class="overflow-hidden" > <?php  echo $row["aciklama"]; ?> </p></td>
                                            <td><img src="http://localhost/gocmeztesisat/images/<?php  echo $row["resim"]; ?>" class="image img-responsive" width="100"  /> </td>

                                        </tr>
    <?php
}
}

?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                    </div>
                    <!-- /.container-fluid -->


                <!-- End of Main Content -->
                </div>
            </div>


        </div>
    </div></div>









