
<?php

$query = $db->query("SELECT * FROM iletisim where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
foreach( $query as $row ){?>

<section class="section">
    <div class="container">
        <div class="section-title text-center">

            <h3>İletişim</h3>
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
                <form role="form" class="contactform">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="İSİM" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="E-MAIL" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="TELEFON" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="KONU" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" placeholder="MESAJ" maxlength="140" rows="7"></textarea>
                    </div>
                    <button type="button" id="submit" name="submit" class="btn btn-primary"> GÖNDER </button>
                </form>
            </div><!-- end col -->

            <div class="col-md-3 mb30">
                <div class="contact-details">
                    <ul>
                        <li><i class="fa fa-phone"></i> <span><?php echo $row["telefon"]?></span></li>
                        <li><i class="fa fa-fax"></i> <span><?php echo $row["fax"]?></span></li>
                        <li><i class="fa fa-facebook"></i> <span><a href="https://<?php echo $row["facebook"]?>"><?php echo $row["facebook"]?></a></span></li>
                        <li><i class="fa fa-instagram"></i> <span><a href="https://<?php echo $row["instagram"]?>"><?php echo $row["instagram"]?></a></span></li>

                    </ul>
                </div><!-- end contact details -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->
    <?php
}
}

?>
