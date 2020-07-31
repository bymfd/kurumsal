<?php
include ("db.php");
$sabit=new  sabitler();
$adminpanel=$sabit->admin_url;
class yetki{
 public function yetkisor(){
     session_start();
     if ($_SESSION["yetki"]!="mfd"){
         $_SESSION = [];
        session_destroy();

        return "";
     }else{
        return "mfd";
     }
 }


}

if (isset($_POST["name"]) and isset($_POST["pass"])){
    session_start();
    $_SESSION = [];
    session_destroy();


    $query  = $db->query("SELECT * FROM user WHERE name='{$_POST["name"]}' && pass='{$_POST["pass"]}'",PDO::FETCH_ASSOC);
    if ( $say = $query -> rowCount() ){

        if( $say > 0 ){
            session_start();
            $_SESSION['yetki']="mfd";
            header("Location:".$adminpanel."?durum=Hoş geldiniz");
        }

    }else{
        $_SESSION = [];
        session_destroy();
        header("Location:".$adminpanel."login.php"."?durum=Kullanıcı adı yada parola hatalı !" );

    }

}










