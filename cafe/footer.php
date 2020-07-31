<footer id="iletisim" class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">

        <?php
        $sabit=new  sabitler();
        $anadizin=$sabit->anadizin;
        $query = $db->query("SELECT * FROM iletisim where id=1", PDO::FETCH_ASSOC);
        if ( $query->rowCount() ){
        foreach( $query as $row ){?>

        <div class="row mb-5">
            <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Hakkımızda</h2>
                    <?php

                    $query = $db->query("SELECT * FROM kurumsal where id=1", PDO::FETCH_ASSOC);
                    if ( $query->rowCount() ){
                    foreach( $query as $row2 ){?>
                    <p><?php echo substr($row2["yazi"],0,100)."..."; ?></p>
                   <?php }}?>

                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="<?php echo $row["facebook"] ?>"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="<?php echo $row["instagram"] ?>"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-md-5">

            </div>
            <div class="col-lg-2 col-md-6 mb-5 mb-md-5">

            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Bizimle İletişime Geçin</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $row["adres"] ?></span></li>
                            <li><a href="tel:<?php echo $row["telefon"] ?>"><span class="icon icon-phone"></span><span class="text"><?php echo $row["telefon"] ?></span></a></li>
<!--                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Geliştirici  <i class="icon-github" aria-hidden="true"></i>  <a href="https://github.com/bymfd" target="_blank">bymfd</a><br>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Tasarım <i class="icon-heart" aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></p>
            </div>
        </div>
    </div>
</footer>

<?php  }} ?>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>

<script src="js/main.js"></script>

<script>
$(document).ready(function(){

$(".filter-button").click(function(){
var value = $(this).attr('data-filter');

if(value == "all")
{
//$('.filter').removeClass('hidden');
$('.filter').show('1000');
}
else
{
//$('.filter[filter-item="'+value+'"]').removeClass('hidden');
//$(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
$(".filter").not('.'+value).hide('3000');
$('.filter').filter('.'+value).show('3000');

}
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

</script>



<script>
    $(document).ready(function(){

        $(".filter-button2").click(function(){
             var value = $(this).attr('data-filter2');


            if(value === "all")
            {
//$('.filter').removeClass('hidden');
                $('.filter2').show('1000');
            }
            else
            {
//$('.filter[filter-item="'+value+'"]').removeClass('hidden');
//$(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter2").not('.'+value).hide('3000');
                $('.filter2').filter('.'+value).show('3000');

            }
        });

        if ($(".filter-button2").removeClass("active")) {
            $(this).removeClass("active");
        }


        $(this).addClass("active");

    });

</script>









</body>
</html>