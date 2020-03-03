<?php
$arrWarna = array ("Blue","Red","Yellow","Green");

echo "Menapilkan isi array dengan for : <br>";
for($i=0; $i<count($arrWarna);$i++){
    echo "do youlike <font color=$arrWarna[$i]>".$arrWarna[$i]
    ."</font>?<br>";
}
echo "<br>Menampilkan Isi Array Dengan Foreach : <br>";
foreach($arrWarna as $warna){
    echo "Do You like <font color=$warna>".$warna."</font>?<br>";

}
?>