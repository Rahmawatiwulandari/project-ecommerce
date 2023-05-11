<?php
include '../../databases/koneksi.php';

if (isset($_GET['view'])) {
    $id = $_GET['view'];
    $query = "SELECT * FROM product_type WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</head>

<body>

    <div class="continuer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 bg-dark text-white">
                    <h2>Type Produk</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h2>View Produk</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-border">
                                <tr>
                                    <td class="bg-dark text-white">Nama Type Produk</td>
                                    <td><?= $result['name'] ?></td>
                                </tr>

                            </table>
                        </div>
                        <div class="card-footer text-muted">
                            type produk
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
    </div>
</body>

</html>