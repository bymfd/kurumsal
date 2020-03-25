

    <div class="card mb-4 py-3 border-bottom-primary">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Mesajlar (mesajlar ve bazı ksımlar kısaltılmış gösterilir)</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive-lg">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>İşlem</th>
                            <th>isim</th>
                            <th>Telefon</th>
                            <th>Mail</th>
                            <th>Konu</th>
                            <th>Mesaj</th>
                            <th>tarih</th>


                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>İşlem</th>
                            <th>isim</th>
                            <th>Telefon</th>
                            <th>Mail</th>
                            <th>Konu</th>
                            <th>Mesaj</th>
                            <th>tarih</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        <?php
                        $query = $db->query("SELECT * FROM mesaj", PDO::FETCH_ASSOC);
                        if ( $query->rowCount() ){
                        foreach( $query as $row ){?>

                        <tr>
                            <td>

                                <a href="fankfonk/fankfonk.php/?durum=sil&id=<?php echo $row["id"];?>&sayfa=mesaj" class="fa fa-trash "> </a>


                                <!-- Button trigger modal -->
                                <?php if($row["oku"]) {?>
                                <button type="button" class=" btn-circle btn-sm fa fa-eye" data-toggle="modal" data-backdrop="static" data-target="#exampleModal<?php echo $row["id"];?>">

                                </button>
                                <?php }
                                else{?>

                                    <button type="button" class=" btn-circle btn-sm btn-danger fa fa-eye-slash " data-toggle="modal" data-backdrop="static" data-target="#exampleModal<?php echo $row["id"];?>">

                                </button>


                               <?php } ?>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?php echo $row["id"];?>" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tarih :<?php echo $row["tarih"];?>  </h5>
                                            </div>
                                            <div class="modal-body">
                                                <form action="fankfonk/fankfonk.php" method="post" name="f<?php echo $row["id"];?>" enctype="multipart/form-data">


                                                    <input type="hidden" name="sayfa" value="mesaj" >
                                                    <input type="hidden" name="id" value="<?php echo $row["id"];?>" >


                                                    <div class="row p-4" >
                                                        <i class="text-center  ">İsim : </i>
                                                     <p> <?php  echo $row["isim"]; ?></p>
                                                    </div>


                                                    <div class="row p-4" >
                                                        <i class="text-center">Telefon :</i>
                                                     <p>  <?php  echo $row["telefon"]; ?></p>
                                                    </div>


                                                    <div class="row p-4" >
                                                        <i class="text-center">Konu :  </i>
                                                        <p><?php  echo $row["konu"]; ?></p>
                                                    </div>



                                                    <div class="row p-4" >
                                                        <i class="text-center">Mesaj :</i>
                                                        <p> <?php  echo $row["mesaj"];?></p>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">

                                                <button type="submit" class="btn btn-primary">Kaydet</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                </div>

                </td>


                <td><p  class="overflow-hidden" > <?php  echo substr($row["isim"],0,45); ?>
                    </p></td>
                <td><p  class="overflow-hidden" > <?php  echo substr($row["telefon"],0,12); ?> </p></td>
                <td> <p  class="overflow-hidden" > <?php  echo substr($row["mail"],0,20); ?> </p> </td>
                <td> <p  class="overflow-hidden" > <?php  echo substr($row["konu"],0,20); ?> </p> </td>
                <td> <p  class="overflow-hidden" > <?php  echo substr($row["mesaj"],0,50); ?> </p> </td>
                <td> <p  class="overflow-hidden" > <?php  echo substr($row["tarih"],0,20); ?> </p> </td>

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