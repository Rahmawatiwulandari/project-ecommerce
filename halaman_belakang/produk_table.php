<?php
include '../databases/koneksi.php';

$query = "SELECT * FROM product";
$sql = mysqli_query($koneksi, $query);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="produk_type.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-cube" aria-hidden="true"></i></div>

                            Produk Type
                        </a>
                        <a class="nav-link" href="produk_table.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
                            Produk
                        </a>
                        <a class="nav-link" href="restock.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-barcode" aria-hidden="true"></i></div>
                            Restock
                        </a>
                        <a class="nav-link" href="supplier.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-cubes" aria-hidden="true"></i></div>
                            Sepplier
                        </a>
                        <a class="nav-link" href="order.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                            Order
                        </a>
                        <a class="nav-link" href="customer.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                            Customer
                        </a>
                        <a class="nav-link" href="card.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></div>
                            Card
                        </a>

                        <!-- akhir -->
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Table Produk</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Produk</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <a href="tambah/tambah_produk.php?tambah=1" class="btn btn-success"><i class="fas fa-table me-1"></i>
                                TAMBAH TABLE</a>
                        </div>
                        <div class="card-body">
                            <!-- wulan taruh kodinan php produk.php di sini -->
                            <table class="table table-border table-hover">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Name</th>
                                        <th>Purchase price</th>
                                        <th>Sell price</th>
                                        <th>Stock </th>
                                        <th>Min stock </th>
                                        <th>Product type id </th>
                                        <th>Restock id </th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    while ($tabel = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $nomor ?></td>
                                            <td><?= $tabel['sku'] ?></td>
                                            <td><?= $tabel['name'] ?></td>
                                            <td><?= $tabel['purchase_price'] ?></td>
                                            <td><?= $tabel['sell_price'] ?></td>
                                            <td><?= $tabel['stock'] ?></td>
                                            <td><?= $tabel['min_stock'] ?></td>
                                            <td><?= $tabel['product_type_id'] ?></td>
                                            <td><?= $tabel['restock_id'] ?></td>
                                            <td>
                                                <a href="tambah/view.php?view=<?= $tabel['id'] ?>"" type=" button" class="btn btn-success btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    View
                                                </a>
                                                <a href="tambah/tambah_produk.php?edit=<?= $tabel['id'] ?>"" type=" button" class="btn btn-success btn-sm">
                                                    <i class="fa fa-paint-brush" aria-hidden="true"></i>
                                                    EDIT
                                                </a>
                                                <a href="tambah/proses_produk.php?hapus=<?= $tabel['id'] ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('apakah anda yakin ingin menghapus data???')">
                                                    <i class="fa fa-trash"></i>
                                                    HAPUS
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                        $nomor++;
                                    }

                                    ?>
                                </tbody>





                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>