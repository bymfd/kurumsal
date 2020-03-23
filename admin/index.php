<?php
include "header.php";
?>



<?php
if (isset($_GET["durum"])) { ?>

<div class="card mb-4 py-3 border-left-danger">
    <div class="card-body">
      <?php  echo $_GET["durum"]; ?>
    </div>
</div>



<?php }


if (isset($_GET["sayfa"])) {
    $sayfa = $_GET["sayfa"];
}

else{
    $sayfa="ayar";

}
include "sayfa/".$sayfa.".php";


?>
      <!-- End of Main Content -->

                  <?php include "footer.php";?>


