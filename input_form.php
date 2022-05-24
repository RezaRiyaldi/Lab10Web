<?php
include "Form.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php
        $form = new Form("", "Submit Form");
        $form->add_field('nim', 'Nim');
        $form->add_field('nama', 'Nama');
        $form->add_field('alamat', 'Alamat');
        ?>

        <h3>Silahkan isi form berikut ini:</h3>
        <?php $form->display_form() ?>
    </div>
</body>

</html>