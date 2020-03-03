<?php
$arrNilai = array  ("Ani" => 80,"Otim"=> 90,"Ana"=>75,"Budi"=>85);

echo "Menampikan Isi Array Dengan Foreach:<br>";
foreach($arrNilai as $nama=>$nilai){
    echo "Nilai $nama= $nama<br>";
}
reset($arrNilai);
echo"<br>Menampilkan isi array dengan whiledan list:<br>";
while(list($nama,$nilai)=each($arrNilai)){
    echo "Nilai $nama=$nilai<br>";
}
?>