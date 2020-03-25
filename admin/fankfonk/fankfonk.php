<?php
include "db.php";



if (isset($_POST["sayfa"])) {
    $don = "../index.php?sayfa=" . $_POST["sayfa"];
//ayar sayfası güncelleme başla
    if ($_POST["sayfa"] == "ayar") {
        if ($_FILES["fileToUpload"]["error"] == 4) {

            $query = $db->query("SELECT logo from ayar")->fetch(PDO::FETCH_ASSOC);
            if ($query) {
                $logook = [1, $query["logo"]];
            }


        } else {
            $logook = resim_upload();


        }
        if ($logook[0] == 0) {

            echo $logook[1];
            header("location:" . $don . "&durum=" . $logook[1]);

        } else {
            try {
                $query = "UPDATE ayar SET  keywords=?, logo=? , aciklama=?, title=? WHERE id=1";
                $db->prepare($query)->execute([$_POST["keywords"], $logook[1], $_POST["aciklama"], $_POST["title"]]);
            } catch (PDOException $e) {
                header("Location:" . $don . "&durum=güncelleme hatası veritabanına yazılamadı birazdan tekrar deneyin");
            }


            header("Location:" . $don . "&durum=işlem başarılı bir şekilde tamamlandı");


        }
    } //ayar sayfası güncelleme bit


    elseif ($_POST["sayfa"] == "user") {

        try {
            $query = "UPDATE user SET  name=?, pass=? WHERE id=1";
            $db->prepare($query)->execute([$_POST["name"], $_POST["pass"]]);
        } catch (PDOException $e) {
            header("Location:" . $don . "&durum=güncelleme hatası veritabanına yazılamadı birazdan tekrar deneyin");
        }


        header("Location:" . $don . "&durum=işlem başarılı bir şekilde tamamlandı");


    }
    //user sayfası güncelleme bit


    //iletişim sayfa güncelle başla
    elseif ($_POST["sayfa"] == "iletisim") {

        try {
            $query = "UPDATE iletisim SET  telefon=?, adres=? , instagram=?, facebook=?, fax=? WHERE id=1";
            $db->prepare($query)->execute([$_POST["telefon"], $_POST["adres"], $_POST["insta"], $_POST["face"], $_POST["fax"]]);
        } catch (PDOException $e) {
            header("Location:" . $don . "&durum=güncelleme hatası veritabanına yazılamadı birazdan tekrar deneyin");
        }


        header("Location:" . $don . "&durum=işlem başarılı bir şekilde tamamlandı");


    }
    //iletişim sayfası güncelleme bit


    //kurumsalllsayfa güncelle başla
    elseif ($_POST["sayfa"] == "kurumsal") {

        echo "kurumsal";
        echo $_POST["baslik"], $_POST["slogan"], $_POST["yazi"];
        try {
            $query = "UPDATE kurumsal SET   baslik=?,slogan=?, yazi=? WHERE id=1";
            $db->prepare($query)->execute([$_POST["baslik"], $_POST["slogan"], $_POST["yazi"]]);
        } catch (PDOException $e) {
            header("Location:" . $don . "&durum=güncelleme hatası veritabanına yazılamadı birazdan tekrar deneyin");
        }


        header("Location:" . $don . "&durum=işlem başarılı bir şekilde tamamlandı");


    }
    //kurumsalsayfası güncelleme bit


    // yaptiklarımız güncellem başla
    elseif ($_POST["sayfa"] == "yaptiklarimiz" and !empty($_POST["id"])) {
        echo "yaptiklarimöiz";
        if ($_FILES["fileToUpload"]["error"] == 4) {

            $query = $db->query("SELECT resim from yaptiklarimiz where id='{$_POST["id"]}'")->fetch(PDO::FETCH_ASSOC);
            if ($query) {
                $resimok = [1, $query["resim"]];
            }


        } else {
            $resimok = resim_upload();


        }
        if ($resimok[0] == 0) {

            echo $resimok[1];
            header("location:" . $don . "&durum=" . $resimok[1]);

        } else {
            try {
                $query = "UPDATE yaptiklarimiz SET  resim=?, baslik=? , aciklama=? WHERE id='{$_POST["id"]}'";
                $db->prepare($query)->execute([$resimok[1], $_POST["baslik"], $_POST["aciklama"]]);
            } catch (PDOException $e) {
                header("Location:" . $don . "&durum=güncelleme hatası veritabanına yazılamadı birazdan tekrar deneyin");
            }


            header("Location:" . $don . "&durum=işlem başarılı bir şekilde tamamlandı");


        }
    } //yaptıklarımız insert

    elseif ($_POST["sayfa"] == "yaptiklarimiz") {
//yaptiklarimiz bit

        $resimok = resim_upload();

        if ($resimok[0] == 0) {

            echo $resimok[1];
            header("location:" . $don . "&durum=" . $resimok[1]);

        } else {
            $query = $db->prepare("INSERT INTO yaptiklarimiz SET
resim = ?,
baslik = ?,
aciklama = ?");
            $insert = $query->execute([$resimok[1], $_POST["baslik"], $_POST["aciklama"]]);
            if ($insert) {
                $last_id = $db->lastInsertId();
                header("Location:" . $don . "&durum=işlem başarılı bir şekilde tamamlandı");
            }else{

                header("Location:" . $don . "&durum=güncelleme hatası veritabanına yazılamadı birazdan tekrar deneyin");

            }


        }

    }
    // yaptiklarimiz bit



///hizmetlerimiz başla
///
///
    elseif ($_POST["sayfa"] == "hizmetler" and !empty($_POST["id"])) {
        echo "yaptiklarimöiz";
        if ($_FILES["fileToUpload"]["error"] == 4) {

            $query = $db->query("SELECT resim from hizmetler where id='{$_POST["id"]}'")->fetch(PDO::FETCH_ASSOC);
            if ($query) {
                $resimok = [1, $query["resim"]];
            }


        } else {
            $resimok = resim_upload();


        }
        if ($resimok[0] == 0) {

            echo $resimok[1];
            header("location:" . $don . "&durum=" . $resimok[1]);

        } else {
            try {
                $query = "UPDATE hizmetler SET  resim=?, baslik=? , aciklama=? WHERE id='{$_POST["id"]}'";
                $db->prepare($query)->execute([$resimok[1], $_POST["baslik"], $_POST["aciklama"]]);
            } catch (PDOException $e) {
                header("Location:" . $don . "&durum=güncelleme hatası veritabanına yazılamadı birazdan tekrar deneyin");
            }


            header("Location:" . $don . "&durum=işlem başarılı bir şekilde tamamlandı");


        }
    } //hi<metler insert

    elseif ($_POST["sayfa"] == "hizmetler") {


        $resimok = resim_upload();

        if ($resimok[0] == 0) {

            echo $resimok[1];
            header("location:" . $don . "&durum=" . $resimok[1]);

        } else {
            $query = $db->prepare("INSERT INTO hizmetler SET
resim = ?,
baslik = ?,
aciklama = ?");
            $insert = $query->execute([$resimok[1], $_POST["baslik"], $_POST["aciklama"]]);
            if ($insert) {
                $last_id = $db->lastInsertId();
                header("Location:" . $don . "&durum=işlem başarılı bir şekilde tamamlandı");
            }else{

                header("Location:" . $don . "&durum=güncelleme hatası veritabanına yazılamadı birazdan tekrar deneyin");

            }


        }

    }


//hizmetler bit








}
else{


    echo  "Post yok";
}


if(isset($_GET["sayfa"])) {

    $don= "http://localhost/gocmeztesisat/admin/index.php?sayfa=".$_GET["sayfa"];

    //yaptılarımız başla
    if ($_GET["sayfa"] == "yaptiklarimiz" and !empty($_GET["id"])) {


        {
            try {

                $query = $db->prepare("DELETE FROM yaptiklarimiz WHERE id =?");
                $delete = $query->execute([$_GET["id"]]);
            } catch (PDOException $e) {
                header("Location:" . $don . "&durum=güncelleme hatası veritabanına yazılamadı birazdan tekrar deneyin");
            }

            header("Location:" . $don . "&durum=işlem başarılı bir şekilde tamamlandı");
        }


    }
//yaptılarımız bit

    //hizmetler silme başla

    elseif ($_GET["sayfa"] == "hizmetler" and !empty($_GET["id"])) {


        {
            try {

                $query = $db->prepare("DELETE FROM hizmetler WHERE id =?");
                $delete = $query->execute([$_GET["id"]]);
            } catch (PDOException $e) {
                header("Location:" . $don . "&durum=güncelleme hatası veritabanına yazılamadı birazdan tekrar deneyin");
            }

            header("Location:" . $don . "&durum=işlem başarılı bir şekilde tamamlandı");
        }


    }

    //hizmetler silme bit


}

function resim_upload()
{

    $sabit = new sabitler();
    $rootfiledir=$sabit->anadizin;
    $target_dir = $rootfiledir."images/";

    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if (isset($_POST["fileToUpload"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {

            $uploadOk = 0;
        }
    }
// Check if file already exists
//    if (file_exists($target_file)) {
//        $uploadOk = 0;
//        return [$uploadOk,"Aynı isimde dosya zaten var "];
//
//    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 10000000) {
        $uploadOk = 0;
        return [$uploadOk,"Resim 10 mb sınrını aşıyor"];

    }
// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        $uploadOk = 0;
        return [$uploadOk,"Sadece JPG, JPEG, PNG & GIF Dosyaları kabul edilebilir ."];

    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        return [$uploadOk,"Resim yüklenirken hata"];
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            return [$uploadOk, basename($_FILES["fileToUpload"]["name"]) ];
        } else {
            return [$uploadOk,"Resim klosöre yazılırken hata"];
        }
    }


}





