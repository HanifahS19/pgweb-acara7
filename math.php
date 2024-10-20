<!DOCTYPE html>
<html>
<body>

<h1>MATH</h1>

<h3>Penjumlahan akar</h3>

<?php
echo(sqrt(100) . "<br>"); //digunakan sebagai penjumlahan akar
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(49.999));
?>
<br><br>

<h3>Nilai Phi</h3>

<?php
echo(pi()); // menampilkan nilai phi, yaitu 3,14
?>

<br><br>

<h3>Nilai maksimum minumum</h3>

<?php
echo(min(5, 10, 15, 20, 25, 40) . "<br>"); // menampilkan nilai maksimum
echo(max(-10, -5, 0, 5, 10, 15)); // menampilkan nilai minimum
?>

<br><br>

<h3>Pengubahan nilai negatif ke positif</h3>

<?php
echo(abs(-200)); //menjadikan yang muinus menjadi plus
?>
<br><br>

<h3>Pembulatan angka</h3>
<?php
echo(round(2.50) . "<br>"); //pembulatan angka 
echo(round(7.80) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-2.37) . "<br>");
echo(round(-5.98));
?>

</body>
</html>