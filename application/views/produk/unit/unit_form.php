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
    <img src="../assets/img/ds.png" alt="Dashboard Image" class="gambar-dashboard">
    <h3>Data Ukuran</h3>
</div>

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="<?= site_url('unit') ?>" class="btn mb-1 btn-rounded btn-warning">
                    <i class="bi bi-arrow-clockwise"></i> Kembali</i>
                </a>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <?php ?>
                        <form action="<?= site_url('unit/process') ?>" method="post">
                            <div class="form-group">
                                <label class="text-center">Ukuran *</label>
                                <input type="hidden" name="id" value="<?= $row->unit_id ?>">
                                <input type="text" name="unit_name" value="<?= $row->name ?>" class="form-control" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" name="<?= $page ?>" class="btn mb-1 btn-rounded btn-primary">
                                    <i class="bi bi-send-check-fill"></i> Simpan
                                </button>
                                <button type="Reset" class="btn mb-1 btn-rounded btn-secondary"> Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>