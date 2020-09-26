<?php

class koneksi
{
    protected $servername = "localhost",
              $username = "Juang666",
              $password = "Juang666";

    public function __construct(){
        $this->connect = new PDO("mysql:host=$this->servername; dbname=Evaluasi", $this->username, $this->password);
    }

    public function getData($Nama,$Nilai){
        $query = "INSERT INTO evaluasi(Nama,Nilai) value(?,?)";
        $show = $this->connect->prepare($query);
        $show->execute([$Nama,$Nilai]);
    }

    public function Batal(){
        echo "--=[ TABLE KESELURUHAN ]=--";
        $query = "SELECT * FROM evaluasi";
        $show = $this->connect->prepare($query);
        $show->execute();
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
        echo "\n";
        echo "\n";
        echo "--=[ TABLE JUMLAH YANG DI INPUT ]=--";
        $QUERY1 =   "SELECT COUNT(id) FROM evaluasi";
        $SHOW1 = $this->connect->prepare($QUERY1);
        $SHOW1->execute();
        $RESULT1 = $SHOW1->fetchAll(pdo::FETCH_ASSOC);
        print_r($RESULT1);
        echo "\n";
        echo "\n";
        echo "--=[ TABLE NILAI RATA-RATA ]=--";
        $QUERY2 =   "SELECT AVG(Nilai) FROM evaluasi";
        $SHOW2 = $this->connect->prepare($QUERY2);
        $SHOW2->execute();
        $RESULT2 = $SHOW2->fetchAll(pdo::FETCH_ASSOC);
        print_r($RESULT2);
        echo "\n";
        echo "\n";
        echo "--=[ TABLE NILAI BERPOTENSI ]=--";
        $QUERY3 =   "SELECT * FROM evaluasi WHERE Nilai > 80";
        $SHOW3 = $this->connect->prepare($QUERY3);
        $SHOW3->execute();
        $RESULT3 = $SHOW3->fetchAll(pdo::FETCH_ASSOC);
        print_r($RESULT3);
        echo "\n";
        echo "\n";
        echo "--=[ TABLE NILAI YANG TIDAK BERPOTENSI ]=--";
        $QUERY3 =   "SELECT * FROM evaluasi WHERE Nilai <= 80";
        $SHOW3 = $this->connect->prepare($QUERY3);
        $SHOW3->execute();
        $RESULT3 = $SHOW3->fetchAll(pdo::FETCH_ASSOC);
        print_r($RESULT3);
    }
}
echo "ingin masukkan berapa nilai = ";
$jumlah = trim(fgets(STDIN));

for ($i=1; $i <= $jumlah; $i++) { 
    $con = new koneksi();
    echo "Masukkan Nama : ";
    $Nama = trim(fgets(STDIN));
    echo "Masukkan Nilai : ";
    $Nilai = trim(fgets(STDIN));

    $con->getData($Nama,$Nilai);
    echo "\n";
    echo "\n";
}
   

$con->Batal();




?>