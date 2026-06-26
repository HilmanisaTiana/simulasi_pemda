<!DOCTYPE html>
<html>
<head><title>Simulasi CSP</title></head>
<body>
    <h3>Simulasi Pencarian Data</h3>
    <form method="GET">
        Cari: <input type="text" name="q" size="50"> <button type="submit">Cari</button>
    </form>
    <br>
    <?php
    if (isset($_GET['q'])) {
        // Kode rentan tanpa sanitasi
        echo "Hasil pencarian: " . $_GET['q'];
    }
    ?>
</body>
</html>