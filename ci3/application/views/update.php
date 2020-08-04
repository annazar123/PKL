<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Siswa</title>
</head>

<body>
    <div class="container">

        <form action="<?= base_url() . 'pages/update'; ?>" method="post">
            <?php foreach ($siswa as $a) : ?>
                <div class="form-group">
                    <b>Nama Siswa</b>
                    <input type="hidden" name="id" value="<?= $a->id; ?> ">
                    <input type="text" name="name" class="form-control" value="<?= $a->nama; ?> ">
                </div>
                <div class="form-group">
                    <b>No Telp</b>
                    <input type="text" name="no" class="form-control" value="<?= $a->no; ?> ">
                </div>
                <div class="form-group">
                    <b>Alamat</b>
                    <input type="text" name="alamat" class="form-control" value="<?= $a->alamat; ?> ">
                </div>
            <?php endforeach; ?>
            <!-- <div type="reset" class="btn btn-danger">Reset</div> -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>