<html>
    <head>
        <title>Penjualan Gas</title>
        <link href="<?= base_url('public/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <script type="text/javascript" src="<?= base_url('public/bootstrap/js/bootstrap.min.js') ?>"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= site_url()?>">Penjualan Gas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="<?= site_url()?>">Home</a>
                <a class="nav-link" href="<?= site_url('Produk')?>">Produk</a>
                <a class="nav-link" href="<?= site_url('Transaksi')?>">Transaksi</a>
                <a class="nav-link" href="<?= site_url('form')?>">Transaksi</a>
            </div>
            </div>
        </div>
    </nav>
    </body>
</html>