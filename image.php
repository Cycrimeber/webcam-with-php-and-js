<?php

require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Database</title>
</head>
<style media="screen">
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 20px;
    }

    a button {
        padding: 12px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        font-size: 16px;
        background: #F0AD4E;
        color: white;
    }
</style>

<body>
    <table border=1 cellspacing=0 cellpadding=10>
        <tr>
            <td>#</td>
            <td>Data & Time</td>
            <td>Image</td>
        </tr>
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM tb_image ORDER BY id DESC");

        ?>
        <?php foreach ($rows as $row) : ?>
            <tr>
                <td><?= $i++; ?> </td>
                <td><?= $row["date"]; ?></td>
                <td> <img src="uploads/<?= $row["image"]; ?>" width=200 title="<?= $row['image']; ?>">
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="./index.php"> <button type="button" name="button">&#x2190; Go to Webcam Page</button></a>
</body>

</html>