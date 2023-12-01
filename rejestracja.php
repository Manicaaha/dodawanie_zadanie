<?php
$nick = $_POST["nick"];
$hobby = $_POST["hobby"];
$zaw = $_POST["zaw"];
$pl =$_POST["plec"];
$lo = $_POST["login"];
$pass = $_POST["pass"];
$lacz = mysqli_connect('localhost','root','','forum');
$pyt = "INSERT INTO `uzytkownicy` (`nick`,`zainteresowania`,`zawod`,`plec`) VALUES ('$nick','$hobby','$zaw','$pl')";
$pyt2 = "INSERT INTO `konta` (`login`,`haslo`) VALUES ('$lo','$pass')";
$wyn = mysqli_query($lacz, $pyt);
$wyn2 = mysqli_query($lacz, $pyt2);
if($wyn)
{
    echo "Konto ".$nick." zostało zarejstrowane w forum hobbystycznym";
}
else{
    echo "nie dodano";
}
mysqli_close($lacz);
?>