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
    <title>S-BOX</title>
</head>

<body>

    <div class="container">
        <div class="baymax"></div>
        <div class="row mt-5 text-center">
            <div class=" col-sm-3"></div>
            <div class="col-sm-6">
                <form action="process.php" method="post">
                    <div class="form-group">
                        <label for="hex">Masukkan ireducible polynomial (hex)</label>
                        <input type="text" name="hex" id="hex" class="form-control" placeholder="Misal: 2C">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger" type="submit">Proses</button>
                    </div>
                </form>
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