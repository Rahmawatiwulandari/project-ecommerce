<?php
include '../../databases/koneksi.php';

if (isset($_GET['view'])) {
    $id = $_GET['view'];
    $query = "SELECT * FROM customer WHERE id = '$id';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);



    // var_dump($result);
    // die();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Produk</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

<body>
    <!-- CARD -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
                <div class="card text-center">
                    <div class="card-header">
                        <h2>View Produk</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-border">
                            <tr>
                                <td class="bg-dark text-white">Code</td>
                                <td><?= $result['name'] ?></td>
                            </tr><br>
                            <tr>
                                <td class="bg-dark text-white">Nama</td>
                                <td><?= $result['gender'] ?></td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-white">Purchase</td>
                                <td><?= $result['phone'] ?></td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-white">Sell Price</td>
                                <td><?= $result['email'] ?></td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-white">Stock</td>
                                <td><?= $result['address'] ?></td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-white">Min Stok</td>
                                <td><?= $result['card_id'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>


    <body>

    </body>

</html>