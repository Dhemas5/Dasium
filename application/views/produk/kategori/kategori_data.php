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
    <img src="assets/img/ds.png" alt="Dashboard Image" class="gambar-dashboard">
    <h3>Data Kategori</h3>
</div>

<!-- Main content -->
<section class="section">
    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="<?= site_url('kategori/add') ?>" class="btn mb-1 btn-rounded btn-primary">
                    <i class="bi bi-plus-circle"></i> Tambah
                </a>
            </div>
            <!-- Table Section -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($row->result() as $key => $data) { ?>
                                <tr>
                                    <td style="width:5%;"><?= $no++ ?>.</td>
                                    <td><?= $data->name ?></td>
                                    <td class="text-center" width="160px">
                                        <a href="<?= site_url('kategori/edit/' . $data->kategori_id) ?>" class="btn btn-sm mb-1 btn-rounded btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="<?= site_url('kategori/del/' . $data->kategori_id) ?>" id="btn-hapus" class="btn btn-sm mb-1 btn-rounded btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>