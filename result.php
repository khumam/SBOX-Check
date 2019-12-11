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
    <title>Hasil Invers</title>
</head>

<body>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Hasil Invers</h4>
                    <div class="table-responsive">
                        <?php
                        echo "<table class='table table-bordered'>";
                        for ($p = 0; $p < 256; $p++) {
                            if ($p % 16 == 0) {
                                echo "<tr>";
                            }
                            echo "<td>" . $_SESSION['invers'][$p][0] . "</td>";
                        }
                        echo "</table>";
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Hasil Sbox</h4>
                    <div class="table-responsive">
                        <?php
                        echo "<table class='table table-bordered'>";
                        for ($p = 0; $p < 256; $p++) {
                            if ($p % 16 == 0) {
                                echo "<tr>";
                            }
                            echo "<td>" . $_SESSION['sbox'][$p][0] . "</td>";
                        }
                        echo "</table>";
                        ?>
                    </div>
                </div>
            </div>
    </section>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>