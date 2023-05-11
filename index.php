<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WULAN SHOP</title>
    <!-- font -->
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
    <!-- CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <!-- Image and text -->
            <nav class="navbar navbar-light bg-dark w-100">
                <a class="navbar-brand text-white" href="#">
                    <img src="img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Wulan Shop
                </a>
                <ul class="nav justify-content-right">
                    <li class="nav-item">
                        <a class="nav-link active bg-success text-white" href="register.php">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <ul class="nav justify-content-center ">
                    <li class="nav-item bg-dark text-white">
                        <a class="nav-link active" href="halaman_belakan/">Home</a>
                    </li>
                    <li class="nav-item bg-dark text-white">
                        <a class="nav-link" href="halaman_belakang/produk_table.php">produk</a>
                    </li>
                    <li class="nav-item bg-dark text-white">
                        <a class="nav-link" href="halaman_belakang/restock.php">Restock</a>
                    </li>
                    <li class="nav-item bg-dark text-white">
                        <a class="nav-link" href="halaman_belakang/order.php">Order</a>
                    </li>
                    <li class="nav-item bg-dark text-white">
                        <a class="nav-link" href="halaman_belakang/card.php">Card</a>
                    </li>
                    <li class="nav-item bg-dark text-white">
                        <a class="nav-link" href="halaman_belakang/customer.php">Customer</a>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <form class="form-inline my-2 my-lg-0 ">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-10">
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="jumbotron w-100 h-100">
                            <h2>
                                Selamat Datang di Wulan Shop
                            </h2>
                            <p>
                                 Punya Budget terbatas tapi lagi butuh perabotan dapur? Kami solusinya ,dengan budget terbatas anda tetap bisa tetap bisa mendapatkan perabotan dapur dengan kualitas bagus dan super baik .informasi konsultasi dan pemesanan silahkan klik dan cek di toko kami Shop Wulan 
                            </p>
                            <p>
                                <a class="btn btn-primary btn-large" href="#">Learn more</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- foto -->
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/1.jpg" class="d-block w-100 h-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/4.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-12 ">
                        <h3 class="text-center shadow-lg p-3 mb-5 bg-dark text-white">KATEGORI PRODUK</h3>
                    </div>
                </div>
                <!-- Kategori -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="shadow-lg p-3 mb-5 bg-white rounded text-center">
                            <i class="fa fa-coffee fa-2x" aria-hidden="true"></i><br>
                            Cookware <br>
                            <a href="halaman_depan/cookware.php" class="btn btn-dark text-white">Kunjungi</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shadow-lg p-3 mb-5 bg-white rounded text-center">
                            <i class="fa fa-map-pin fa-2x" aria-hidden="true"></i><br>
                            Cooking Appliances <br>
                            <a href="halaman_depan/cooking.php" class="btn btn-dark text-white">Kunjungi</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shadow-lg p-3 mb-5 bg-white rounded text-center">
                            <i class="fa fa-tasks fa-2x" aria-hidden="true"></i><br>
                            Serving Utensils <br>
                            <a href="halaman_depan/serving.php" class="btn btn-dark text-white">Kunjungi</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="shadow-lg p-3 mb-5 bg-white rounded text-center">
                            <i class="fa fa-square fa-2x" aria-hidden="true"></i><br>
                            Food Preparation Tools <br>
                            <a href="halaman_depan/food.php" class="btn btn-dark text-white">Kunjungi</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shadow-lg p-3 mb-5 bg-white rounded text-center">
                            <i class="fa fa-square-o fa-2x" aria-hidden="true"></i><br>
                            Baking Tools <br>
                            <a href="halaman_depan/baking.php" class="btn btn-dark text-white">Kunjungi</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <h3 class="text-center shadow-lg p-3 mb-5 bg-dark text-white">PRODUK</h3>
                    </div>
                </div>

                <!-- produk -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" alt="Bootstrap Thumbnail First" src="img/5.jpeg" />
                            <div class="card-block">
                                <h5 class="card-title">
                                    Panci
                                </h5>
                                <p class="card-text">
                                    Alat masak yang terbuat dari logam alumunium dan baja dan berbentuk silinder atau mengecil pada bagian bawahannya
                                </p>
                                <p>
                                    <a class="btn btn-dark" href="halaman_belakang/tambah_cus/tambah_cus.php">Beli</a> <a class="btn btn-info" href="#">Keranjang</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" alt="Bootstrap Thumbnail Second" src="img/4.jpg" />
                            <div class="card-block">
                                <h5 class="card-title">
                                    Wajan anti karat
                                </h5>
                                <p class="card-text">
                                    Alat penggorengan dengan dasar bulat cocok untuk membuat beraneka ragam masakan
                                </p>
                                <p>
                                    <a class="btn btn-dark" href="halaman_belakang/tambah_cus/tambah_cus.php">Beli</a> <a class="btn btn-info" href="#">Keranjang</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" alt="Bootstrap Thumbnail Third" src="img/3.jpg" />
                            <div class="card-block">
                                <h5 class="card-title">
                                    Panci Small
                                </h5>
                                <p class="card-text">
                                     Dengan bnetuk yang tidak terlalu besar cocok untuk membuat aneka Sop ataupun olahan masakan berkuah lainnya
                                </p>
                                <p>
                                    <a class="btn btn-dark" href="halaman_belakang/tambah_cus/tambah_cus.php">Beli</a> <a class="btn btn-info" href="#">Keranjang</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bg-dark">
            <h5 class="text-white">@wulanshop</h5>
        </div>
    </div>

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>