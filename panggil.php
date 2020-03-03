XR2-13<br>
<?php
$angka1 = $_POST["angka1"];
$angka2 = $_POST["angka2"];

if ($_POST["submit"] == "penjumlahan"){
    $hasil = $angka1 + $angka2;
    echo "$angka1 + $angka2 = $hasil";
}
else if($_POST["submit"] == "pengurangan"){
    $hasil = $angka1 - $angka2;
    echo "$angka1 - $angka2 = $hasil";
}
else if($_POST["submit"] == "pengalian"){
    $hasil = $angka1 * $angka2;
    echo "$angka1 * $angka2 = $hasil";
}
else if($_POST["submit"] == "pembagian"){
    $hasil = $angka1 /$angka2;
    echo "$angka1 / $angka2 = $hasil";
}
?>