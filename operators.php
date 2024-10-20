<!DOCTYPE html>
<html>
<body>

<h1>Operators</h1>

<h1>Arithmetic Operators</h1>
<h3>Penjumlahan</h3>
<?php
$x = 7.5;  
$y = 0.5;

echo $x + $y;
?>  

</body>
</html>

<br><br>

<h3>Pengurangan</h3>
<?php
$x = 8;  
$y = 0.7;

echo $x - $y;
?>  

<br><br>
<h3>Perkalian</h3>

<?php
$x = 8;  
$y = 0.5;

echo $x * $y;
?>  

<br><br>

<h3>Pembagian</h3>
<?php
$x = 100;  
$y = 5.5;

echo $x / $y;
?>  
<br><br>

<h3>Pembagian bersisa</h3>
<?php
$x = 10; //hasilnya adalah 1 karena sisa drai pembagiannya adalah 1
$y = 3;

echo $x % $y;
?>  

<br><br>
<h3>Pemangkatan bilangan ke bilangan lainnya</h3>
<?php
$x = 9;  
$y = 2;

echo $x ** $y;
?>  

<h1>Assigmnet Operators</h1>

<h3>Mengembalikan nilai</h3>
<?php
$x = 0.5;  //mengembalikan nilai dengan utuh
echo $x;
?>  
<br><br>
<h3>Penambahan</h3>
<?php
$x = 13;  
$x += 40;

echo $x;
?>  

<h1> Comparison Operators</h1>
<h3>Equal</h3>
<?php
$x = 5;  // fungsinya sebagai pendeteksi kedua nilainya sama atau berbeda
$y = "5";

var_dump($x == $y); // returns true because values are equal
?>  

<br><br>
<h3>Identical</h3>
<?php
$x = 7;  //membandingkan dua nilai dan type data. Jika salah satu tidak terpenuhi maka akan false
$y = 7;

var_dump($x === $y); // returns false because types are not equal
?>  

</body>
</html>
