<?php
include "header.php";
?>




<div class="container-fluid ">

<?php

    include "slider.php";
?>
</div>








    <div id="kurumsal">
        <?php

        include "kurumsal.php";
        ?>

    </div>
    <div id="hizmetlerimiz">
        <?php

        include "hizmetlerimiz.php";
        ?>

    </div>

    </div>
    <div id="iletisim">
        <?php


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


        include "iletisim.php";
        ?>

    </div>
<div id="anasayfa" aria-haspopup="true" >
    <?php

    include "yaptiklarimiz.php";
    ?>

</div>


<div id="iletisima">
<?php
include "footer.php";
?>
    </div>
