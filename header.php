<?php
    include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Tugas PHP - Genta Swara</title>
</head>
<body style="margin: 0; padding: 0;">
    <h1 align="center">Web Tugas 4 PHP</h1>

    <!-- navbar start -->
    <div style="text-align: center; background-color: cyan; color: snow;">
        <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
        <?php
            // looping foreach dari webmenu.php
            foreach ($menu_atas as $key => $value) {
                //echo $key . $value . '<br>';
                echo "<a href='index.php?hal=$key'>$value</a> | ";
            }
        ?>
    </div>
    <!-- navbar end -->