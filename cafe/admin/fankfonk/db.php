<?php
class sabitler{
    public $anadizin="/opt/lampp/htdocs/cafe/";
    public $site_url="http://localhost/cafe/";
    public $admin_url="http://localhost/cafe/admin/";
    public $resim_ana_url="http://localhost/cafe/images/";
    public $resim_ana_dizin="/opt/lampp/htdocs/cafe/images/";


}
$mysqlsunucu = "localhost";
$mysqlkullanici = "root";
$mysqlparola = "";
$dbname="cafe";
try {
    $db = new PDO("mysql:host=$mysqlsunucu;dbname=$dbname;charset=utf8", $mysqlkullanici, $mysqlparola);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  echo "Bağlantı başarılı";
}
catch(PDOException $e)
{
    echo "Bağlantı hatası: ";
}
