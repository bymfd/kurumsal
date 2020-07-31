


<?php

$degisken = $_SERVER['REQUEST_URI'];
if($degisken[(strlen($degisken)-1)]=="/"){

  //  header("location:".$degisken[strlen($degisken)-1]);
}
include "header.php";
if(@$_POST["mesaj"]){
    $query = $db->prepare("INSERT INTO mesaj SET
isim = ?,
telefon= ?,
mail = ?,
konu = ?,
mesaj = ?
");
    $insert = $query->execute([$_POST["isim"], $_POST["telefon"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]]);
    if ($insert) {
        $last_id = $db->lastInsertId();
        echo "okkay";
    }else{
        echo "olmadı";

    }



}



?>











<?php


$query = $db->query("SELECT * FROM iletisim where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
foreach( $query as $row ){?>

<section class="section">
    <div class="container">
        <div class="section-title text-center">

            <h3>İletişim </h3>
        </div><!-- end section-title -->
        <div class="row">
            <div class="col-md-4">
                <div class="contact-details">
                    <h3>HOŞGELDİNİZ</h3>
                    <p>Sormak istediğiniz sorularınızı burada ki formdan yönlendirebilirsiniz.</p>
                    <p><?php echo  $row["adres"] ?></p>
                </div>
            </div>

            <div class="col-md-5">
                <form class="contactform" action="iletisim.php" method="post">
                    <div class="form-group" >
                        <input type="text" class="form-control" id="name" name="isim" MAXLENGTH="45" minlength="6" placeholder="İSİM" required>
                        <input type="hidden" name="mesaj">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" MAXLENGTH="100" minlength="6" name="mail" placeholder="E-MAIL" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" MAXLENGTH="12" minlength="12" name="telefon" placeholder="5420000000" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" MAXLENGTH="50" minlength="6" name="konu" placeholder="KONU" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" name="mesaj" minlength="50" placeholder="MESAJ" MAXLENGTH="200" rows="7"></textarea>
                    </div>
                    <button type="submit" id="submit"  class="btn btn-primary"> GÖNDER </button>
                </form>
            </div><!-- end col -->

            <div class="col-md-3 mb30">
                <div class="contact-details">
                    <ul>
                        <li><i class="fa fa-phone"></i> <span><?php echo $row["telefon"]?></span></li>
                        <li><i class="fa fa-fax"></i> <span><?php echo $row["fax"]?></span></li>
                        <li><i class="fa fa-facebook"></i> <span><a href="https://<?php echo $row["facebook"];?>"><?php echo $row["facebook"]?></a></span></li>
                        <li><i class="fa fa-instagram"></i> <span><a href="https://<?php echo $row["instagram"];?>"><?php echo $row["instagram"]?></a></span></li>

                    </ul>
                </div><!-- end contact details -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->
    <?php
}
}
include "footer.php";
?>
