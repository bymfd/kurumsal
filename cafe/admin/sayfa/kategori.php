
<?php
$sabit=new  sabitler();
$resim_ana_url=$sabit->resim_ana_url;
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori Ayarları </h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-6">
            <form action="fankfonk/fankfonk.php" method="post" enctype="multipart/form-data">
                <div class="card border-bottom-info ">
                    <div class="card-body">




                        <input type="hidden" name="sayfa" value="kategori" >

                        <div class="row p-4" >
                            <i class="text-center">Kategori İsmi </i>
                            <input type="text"  maxlength="50" required class="text-box2 btn-block" name="isim" >
                        </div>
                        <div class="row p-4" >
                            <i class="text-center">Ana Kategori </i>

                            <select class="select-wrap" name="main" id="kategori">
                                <option value="0">YOK</option>
                                <?php
                                $query = $db->query("SELECT * FROM kategori where main=0", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                    foreach( $query as $row2 ){?>

                                        <option value="<?php echo $row2["id"] ?>"><?php echo $row2["isim"] ?></option>
                                    <?php }}?>
                            </select>
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
                        <h6 class="m-0 font-weight-bold text-primary">Mevcut tablosu (açıklama ve başlıklar kısaltılmış gösterilir)</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>İşlem</th>

                                    <th>isim</th>
                                    <th>Ana Kategori</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>İşlem</th>
                                    <th>İsim</th>
                                    <th>Ana Kategori</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                <?php
                                $query = $db->query("SELECT * FROM kategori", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                foreach( $query as $row ){?>

                                <tr>
                                    <td>

                                        <a href="fankfonk/fankfonk.php/?durum=sil&id=<?php echo $row["id"];?>&sayfa=kategori" class="fa fa-trash "> </a>


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



                                                            <input type="hidden" name="sayfa" value="kategori" >
                                                            <input type="hidden" name="id" value="<?php echo $row["id"];?>" >


                                                            <div class="row p-4" >
                                                                <i class="text-center">İsim</i>
                                                                <input type="text" value="<?php  echo $row["isim"]; ?>" maxlength="50" required class="text-box2 btn-block" name="isim" >
                                                            </div>
                                                            <div class="row p-4" >
                                                                <i class="text-center">Ana Kategori </i>

                                                                <select class="select-wrap" name="main" id="kategori">
                                                                    <option value="0">YOK</option>
                                                                    <?php
                                                                    $query = $db->query("SELECT * FROM kategori where main=0", PDO::FETCH_ASSOC);
                                                                    if ( $query->rowCount() ){
                                                                        foreach( $query as $row2 ){?>

                                                                            <option value="<?php echo $row2["id"] ?>"><?php echo $row2["isim"] ?></option>
                                                                        <?php }}?>
                                                                </select>
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


                        <td><p  class="overflow-hidden" > <?php  echo substr($row["isim"],0,20); ?></p></td>
                        <td><p  class="overflow-hidden" > <?php $query = $db->query("SELECT isim FROM kategori WHERE id = '{$row["main"]}'")->fetch(PDO::FETCH_ASSOC);
                                if ( $query ){
                                    echo substr( $query["isim"],0,20);
                                }   ?> </p></td>


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









