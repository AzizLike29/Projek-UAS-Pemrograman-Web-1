<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOTSTRAP UAS</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <h3 class="text-center">
        UNIVERSITAS PELITA BANGSA<br />
        <small class="text-muted">Pemrograman Web 1</small>
    </h3>
    <hr class="d-block d-sm-none" />

    <!-- Navbar Atas -->
    <nav class="navbar navbar-expand navbar-dark bg-dark d-none d-sm-block">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=awalan">UAS-16</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=home"><i class="bi bi-house-fill"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=galeri"><i class="bi bi-file-person-fill"></i> Galeri</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Bawah -->
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-bottom d-block d-sm-none">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=home"><i class="bi bi-house-fill"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=galeri"><i class="bi bi-file-person-fill"></i> Galeri</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php

    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'home':
                include "home.php";
                break;

            case 'galeri':
                include "galeri.php";
                break;
            default:
                echo "<h1 class=\"text-center\">PAGE NOT FOUND</h1>";
                break;
        }
    } else {
        include "home.php";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>