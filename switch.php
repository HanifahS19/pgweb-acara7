<!DOCTYPE html>
<html>

<body>
    <h1>switch</h1>
    <h3>Pilih warna kesukaanmu</h3>
    <?php
    $favcolor = "DodgerBlue"; // Ubah warna favorit di sini

    switch ($favcolor) {
        case "merah":
            echo "<span style='color:red;'>Warna favoritmu merah!</span>";
            break;
        case "Oren":
            echo "<span style='color:orange;'>Warna favoritmu oren!</span>";
            break;
        case "pink":
            echo "<span style='color:pink;'>Warna favoritmu pink!</span>";
            break;
        case "hijau":
            echo "<span style='color:hijau;'>Warna favoritmu hijau!</span>";
            break;
        case "darkcyan":
            echo "<span style='color:darkcyan;'>Warna favoritmu darkcyan!</span>";
            break;
        case "DodgerBlue":
            echo "<span style='color:DodgerBlue;'>Warna favoritmu DodgerBlue!</span>";
            break;
        default:
            echo "<span>Jika warna favoritmu bukan yang disebutkank</span>";
    }
    ?>

</body>

</html>