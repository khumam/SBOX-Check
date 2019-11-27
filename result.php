<?php
session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <title>Result S-BOX</title>
</head>

<body>

    <div class="container">
        <div class="baymax"></div>
        <div class="row mt-5 text-center">
            <div class=" col-sm-3"></div>
            <div class="col-sm-6">
                <h6 style="color:#b0b0b0;">Hasil S-Box nya</h6>
                <h2 style="color:#b0b0b0;"><?php echo $_SESSION['result'] ?></h2>
                <p>Waktu eksekusi <?php echo $_SESSION['time']; ?> s</p>
                <a href="index.php" class="btn btn-danger">Kembali</a>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>