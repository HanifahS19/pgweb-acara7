<!DOCTYPE html>
<html>
<body>

<h1>Casting</h1>
<pre>
<?php
$a = "wkwk";       
$b = 0.1;    
$c = "hello"; 
$d = NULL;   
$e = false; 
$f = true;     

// type data diubah maka hasilnya akan ikut berubah
$a = (integer) $a; //string ke int nggak bisa sehingga tidak ada nilainya
$b = (string) $b;
$c = (float) $c;
$d = (integer) $d;
$e = (string) $e;
$f = (float) $f;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
?> 
</pre>

</body>
</html>
