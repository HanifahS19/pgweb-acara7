<!DOCTYPE html>
<html>

<body>
    <h1>If else</h1>
<h3>Menampilkan logika salah dan benar</h3>
    <?php
    $t = 10;

    if ($t < 20) {
        echo "BETUL-BETUL-BETUL!";
    } else {
        echo "SALAH BWANG!";
    }
    ?>
</body>
</html>
<h3>Menampilkan logika salah, benar, dan jika salah</h3>
    <?php
    $t = date("20.00");
    echo "<p>Jam menunjukkan pukul " . $t;
    echo ", Akan terdapat pemberitahuan yang akan keluar terkait dengan sarapan:</p>";

    if ($t < "10") {
        echo "Breakfast";
    } elseif ($t < "20") {
        echo "Lunchtime!";
    } else {
        echo "Dinner";
    }
    ?>

</body>