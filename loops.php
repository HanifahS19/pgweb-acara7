<!DOCTYPE html>
<html>

<body>
    <h1>Loops (Perulangan)</h1>
    <h3>Penambahan 10 nomr</h3>
    <?php
    for ($x = -10; $x <= 50; $x += 10) { // merupakan perulangan
        echo "Nomor ini adalah : $x <br>";
    }
    ?>

    <br><br>
    <h3>Berurutan</h3>
    <?php
    for ($x = 10; $x <= 20; $x++) { // merupakan perulangan
        echo "Nomor ini adalah : $x <br>";
    }
    ?>

    <br><br>
    <h3>Berhenti</h3>
    <?php
    for ($x = 1; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
    }
    ?>
</body>

</html>