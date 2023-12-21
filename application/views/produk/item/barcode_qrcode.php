<style>
    .page-heading {
        display: flex;
        align-items: center;
    }

    .gambar-dashboard {
        width: 50px;
        /* Sesuaikan ukuran gambar sesuai kebutuhan Anda */
        height: auto;
        /* Sesuaikan margin sesuai kebutuhan Anda */
    }
</style>
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <img src="../../assets/img/ds.png" alt="Dashboard Image" class="gambar-dashboard">
    <h3>Barcode Items</h3>
</div>

<!-- Main content -->
<section class="section">
    <?php $this->view('messages') ?>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="<?= site_url('item') ?>" class="btn mb-1 btn-rounded btn-warning">
                    <i class="bi bi-arrow-clockwise"></i> Kembali</i>
                </a>
            </div>
            <div class="card-body">
                <div class="barcode-container">
                    <?php
                    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                    echo $generator->getBarcode($row->barcode, $generator::TYPE_CODE_128);
                    ?>
                </div>
                <br>
                <?= $row->barcode ?>
                <br><br>
                <a href="<?= site_url('item/barcode_print/' . $row->item_id) ?>" class="btn mb-1 btn-primary">
                    <i class="bi bi-printer"></i> Print
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    .barcode-container {
        background-color: white;
        padding: 10px;
        /* Adjust as needed */
        display: inline-block;
    }
</style>