<!DOCTYPE html>
<html>

<body>

    <?php
    $cars = array("Volvo", "BMW", "Toyota", "Mustang", "LCGC", "HRV", "Ferrari", "Rubicon", "Mercedes");
    $colors = array("red", "green", "yellow", "pink", "Blue", "Sage", "Black", "White", "Brown");
    $month = array("Jan", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sep", "Okt");
    $pemilik = array("NANA", "NINI", "NUNU", "YAYA", "Geri", "Aya", "May", "Angel", "myla");
    $alamat = array("Jawa tengah", "Jawa timur", "Jawa barat", "Jakarta", "Bali", "Jakarta", "Madura", "medan", "NTT");

    echo "<table border='1'>";
    echo "<tr><th>Car</th><th>Color</th><th>Month</th><th>Pemilik</th><th>Alamat</th></tr>";
    for ($i = 0; $i < count($cars); $i++) {
        // Menampilkan setiap baris dengan warna background sesuai kolom "Color"
        echo "<tr>
            <td>" . $cars[$i] . "</td>
            <td style='background-color: " . strtolower($colors[$i]) . ";'>" . $colors[$i] . "</td>
            <td>" . $month[$i] . "</td>
            <td>" . $pemilik[$i] . "</td>
            <td>" . $alamat[$i] . "</td>
          </tr>";
    }
    echo "</table>";
    ?>

</body>

</html>