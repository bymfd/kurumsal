<?php
class sabitler{
    public $anadizin="/opt/lampp/htdocs/gocmeztesisat/";
    public $site_url="http://localhost/gocmeztesisat/";
    public $admin_url="http://localhost/gocmeztesisat/admin/";
    public $resim_ana_url="http://localhost/gocmeztesisat/images/";
    public $resim_ana_dizin="/opt/lampp/htdocs/gocmeztesisat/images/";


}
$mysqlsunucu = "localhost";
$mysqlkullanici = "root";
$mysqlparola = "";
$dbname="okcebe";
try {
    $db = new PDO("mysql:host=$mysqlsunucu;dbname=$dbname;charset=utf8", $mysqlkullanici, $mysqlparola);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  echo "Bağlantı başarılı";
}
catch(PDOException $e)
{
    echo "Bağlantı hatası: ";
}
