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
    <h3>Data Stock Out</h3>
</div>

<section class="section">
    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="<?= site_url('stock/out/add') ?>" class="btn btn-primary btn-flat">
                    <i class="bi bi-plus-circle"></i> Tambah
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Barcode</th>
                                <th>Product Item</th>
                                <th>Qty</th>
                                <th>Info</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($row as $key => $data) { ?>
                                <tr>
                                    <td style="width:5%;"><?= $no++ ?>.</td>
                                    <td><?= $data->barcode ?></td>
                                    <td><?= $data->name ?></td>
                                    <td><span class="text-center badge bg-red"><?= $data->qty ?></span></td>
                                    <td><?= $data->detail ?></td>
                                    <td class="text-center"><?= indo_date($data->date) ?></td>
                                    <td class="text-center" width="160px">
                                        <a href="<?= site_url('stock/out/del/' . $data->stock_id . '/' . $data->item_id) ?>" id="btn-hapus" class="btn btn-sm mb-1 btn-rounded btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>