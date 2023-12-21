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
    <h3>Data User</h3>
</div>

<!-- Main content -->
<section class="section">
    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>">
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="<?= site_url('user/add') ?>" class="btn mb-1 btn-rounded btn-primary">
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
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Level</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($row->result() as $key => $data) { ?>
                                <tr>
                                    <td style="width:5%;"><?= $no++ ?>.</td>
                                    <td><?= $data->username ?></td>
                                    <td><?= $data->name ?></td>
                                    <td><?= $data->address ?></td>
                                    <td><?= $data->level == 1 ? "Admin" : "Kasir" ?></td>
                                    <td class="text-center" width="160px">
                                        <form action="<?= site_url('user/del/') ?>" method="post">
                                            <a href="<?= site_url('user/edit/' . $data->user_id) ?>" class="btn btn-success btn-sm">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                            <button id="btn-hapus" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </form>
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