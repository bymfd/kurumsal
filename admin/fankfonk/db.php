<?php
class sabitler{
    public $anadizin="/opt/lampp/htdocs/gocmeztesisat/";

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
