<!DOCTYPE html>

<!-- edit -->
<?php
include '../../databases/koneksi.php';

// tambah data
$id = '';
$nama = '';


// edit data
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = "SELECT * FROM product_type WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);


    $nama = $result['name'];



    // var_dump($result);
    // die();

}

?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from_tambah</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    if (isset($_GET['tambah'])) {
    ?>
        <div class="row">
            <div class="col-12 bg-dark text-white">
                <h3>Tambah Produk</h3>
            </div>
        </div>
    <?php
    } else {
    ?>

        <div class="row">
            <div class="col-12 bg-dark text-white">
                <h3>Update Produk</h3>
            </div>
        </div>
    <?php
    }
    ?>


    <div class="container mt-4">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <form method="POST" action="proses_type.php">
                            <input type="hidden" value="<?= $id ?>" name="id">
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Nama</label>
                                <div class="col-8">
                                    <input id="name" name="name" type="text" class="form-control" value="<?=$nama?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <?php
                                    if (isset($_GET['edit'])) {

                                    ?>
                                        <button name="update" value="edit" type="submit" class="btn btn-success">
                                            <i class="fa fa-plus" aria-hidden="true"></i>UPDATE DATE
                                        </button>
                                    <?php
                                    } else {
                                    ?>
                                        <button name="update" value="add" type="submit" class="btn btn-success">
                                            <i class="fa fa-plus" aria-hidden="true"></i>Tambah
                                        </button>
                                    <?php
                                    }
                                    ?>
                                    <button name="reset" type="submit" class="btn btn-danger">
                                        <i class="fa fa-refresh" aria-hidden="true"></i>Reset
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>

    </div>
</body>

</html>