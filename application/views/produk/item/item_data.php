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
    <h3>Data Item</h3>
</div>

<!-- Main content -->
<section class="section">
    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="<?= site_url('item/add') ?>" class="btn mb-1 btn-rounded btn-primary">
                    <i class="bi bi-plus-circle"></i> Tambah
                </a>
            </div>
            <!-- Table Section -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="tbl_1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Barcode</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Ukuran</th>
                                <th>Warna</th>
                                <th>Harga</th>
                                <th>Stock</th>
                                <th>Gambar</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <?php $no = 1;
                                    foreach ($row->result() as $key => $data) { ?>
                                <tr>
                                    <td style="width:5%;"><?= $no++ ?>.</td>
                                    <td>
                                        <?= $data->barcode ?><br>
                                        <a href="<?= site_url('index.php/item/barcode_qrcode/' . $data->item_id) ?>" class="btn btn-default btn-xs">
                                            Generate <i class="fa fa-barcode"></i>
                                        </a>
                                    </td>
                                    <td><?= $data->name ?></td>
                                    <td><?= $data->kategori_name ?></td>
                                    <td><?= $data->unit_name ?></td>
                                    <td><?= $data->colour_name ?></td>
                                    <td class="text-right"><?= indo_currency($data->price) ?></td>
                                    <td class="text-right"><?= $data->stock ?></td>
                                    <td>
                                        <?php if ($data->image != null) { ?>
                                            <img src="<?= base_url('uploads/product/' . $data->image) ?>" style="width:100px">
                                        <?php } ?>
                                    </td>
                                    <td class="text-center" width="160px">
                                        <a href="<?= site_url('item/edit/' . $data->item_id) ?>" class="btn btn-xs mb-1 btn-rounded btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="<?= site_url('item/del/' . $data->item_id) ?>" id="btn-hapus" class="btn btn-xs mb-1 btn-rounded btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Data Tables -->
<script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Check if DataTable is already initialized
        if ($.fn.DataTable.isDataTable('#tbl_1')) {
            // Destroy the DataTable if already exists
            $('#tbl_1').DataTable().destroy();
        }

        var dataTable = $('#tbl_1').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo site_url('item/get_ajax'); ?>",
                type: "POST"
            },
            "columnDefs": [
                // ... Your existing columnDefs ...
            ],
            "order": [],
            "responsive": true,
            "autoWidth": false
        });
    });
</script>