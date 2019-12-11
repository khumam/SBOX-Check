<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>SBOX Constructor</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Sbox Construct</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            </div>
        </div>
    </nav>

    <section>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Sbox Construct</h1>
            <p class="lead">Membentuk tabel sbox dengan inputan Irreducible Polynomial dan Tabel Affine</p>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <form action="process.php" method="post">
                        <div class="form-group">
                            <label for="irreducible">Irreducible Polynomial (dalam binner)</label>
                            <input type="text" name="irreducible" id="irreducible" class="form-control" placeholder="ex: 100011011">
                        </div>
                        <div class="form-group">
                            <label for="konstanta">Konstanta Tambahan (dalam binner 8 bit)</label>
                            <input type="text" name="konstanta" id="konstanta" class="form-control" placeholder="ex: 11000110">
                        </div>
                        <div class="form-group">
                            <label for="affine">Table Affine (pisahkan dengan koma)</label>
                            <textarea type="text" name="affine" id="affine" class="form-control" style="min-height:250px" placeholder="10001111,
11000111,
11100011,
11110001,
11111000,
01111100,
00111110,
00011111"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Generate Sbox</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>