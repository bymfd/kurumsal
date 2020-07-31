
<?php
if(isset($_POST["rez"])){
include "admin/fankfonk/db.php";
$query = $db->prepare("INSERT INTO mesaj SET
isim = ?,
telefon= ?,
tarih = ?,
saat = ?,
mesaj = ?
");
$insert = $query->execute([$_POST["isim"]." ".$_POST["soyisim"], $_POST["telefon"], $_POST["tarih"], $_POST["saat"], $_POST["mesaj"]]);
if ($insert) {
$last_id = $db->lastInsertId();
$tamam=true;


}
else{

$tamam=false;

}
    header("location:http://localhost/cafe/#rez?durum=".$tamam);

}



?>




<section id="rez" class="ftco-appointment ftco-section img" id="ftco-testimony" >
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <span class="subheading">Rezervasyon</span>
                        <div class="row" style="padding-bottom:3rem"></div>
                        <h2 class="mb-4">Emin olun</h2>
                        <p>Eğlencenin durmadan devam etmesi önemlidir </p>
                    </div>
                </div>
            </div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div class="embed-responsive" > <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.710012746188!2d32.46194305677775!3d37.867075147786146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d0853e76f1d4f3%3A0xd48b69d950ff9874!2sCafe%20RUMORS!5e0!3m2!1str!2str!4v1595441759333!5m2!1str!2str" width="1000" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3"></h3>
	    			<form action="rez.php" method="post" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" required class="form-control" name="isim" placeholder="İsim">
                                <input type="hidden" name="rez">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" required class="form-control" name="soyisim" placeholder="Soyisim">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" required class="form-control appointment_date"  name="tarih" placeholder="Tarih">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time"  name="saat" placeholder="Saat">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="number" required maxlength="15" name="telefon" class="form-control" placeholder="Telefon">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea  id="" cols="30" rows="2" class="form-control" name="mesaj" placeholder="Mesajınız..."></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Gönder" class="btn btn-primary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
	    		</div>
    		</div>
    	</div>
    </section>