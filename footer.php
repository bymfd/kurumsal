<?php



$resim_ana_url=$sabit->resim_ana_url;
$sabit=new  sabitler();
$resim_ana_url=$sabit->resim_ana_url;
$query = $db->query("SELECT * FROM ayar where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
foreach( $query as $row ){?>

<footer class="footer primary-footer">
    <div class="container">
        <div class="row">
            <a class="navbar-brand" href="<?php $site_url=$sabit->site_url;  echo $site_url; ?>"><img src="<?php echo $resim_ana_url.$row["logo"]; ?>" alt="GÖÇMEZ SIHHİ TESİSAT"></a>

            <div class="col-md-2 col-sm-12"></div>

            <div class="col-md-2 col-sm-2">
                <div class="widget clearfix">
                    <h4 class="widget-title"><?php echo $row["title"]; ?></h4>
                    <ul>
                        <li><a href="kurumsal.php">Kurumsal</a></li>
                        <li><a href="hizmetlerimiz.php">Hizmetlerimiz</a></li>
                        <li><a href="contact.php">İletişim</a></li>
                    </ul>
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-md-2 col-sm-12"></div>

            <div class="col-md-2 col-sm-2">
                <div class="widget clearfix">
                    <h4 class="widget-title">SOSYAL MEDYADA BİZ</h4>
                    <ul>

<?php
                        $querya = $db->query("SELECT * FROM iletisim where id=1", PDO::FETCH_ASSOC);
                        if ( $querya->rowCount() ){
                        foreach( $querya as $aa ){?>
                        <li><a href="https://<?php echo $aa["facebook"];?>">Facebook</a></li>
                        <li><a href="https://<?php echo $aa["instagram"];}}?>">Instagram</a></li>
                    </ul>
                </div><!-- end widget -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end primary-footer -->

<footer class="footer secondary-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p>2020 · <a href=""></a><?php echo $row["title"];  }}?> </p>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <ul class="list-inline">
                    <li>Designed: <a href="https://instagram.com/bugraokcebe">Buğra Okcebe</a></li>
                </ul>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end second footer -->
</div><!-- end wrapper -->

<!-- jQuery Files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/animate.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/custom.js"></script>

</body>
</html>