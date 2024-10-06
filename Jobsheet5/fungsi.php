<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>"; //Tulis sesuai nama kalian
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Hmdana", "Hallo");
echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

//memanggil lagi
perkenalan($saya);
?>