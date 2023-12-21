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
    <h3>Data Stock Out</h3>
</div>

<section class="section">
    <?php $this->view('messages') ?>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="<?= site_url('stock/out') ?>" class="btn btn-warning btn-flat">
                    <i class="bi bi-arrow-clockwise"></i> Kembali</i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <form action="<?= site_url('stock/process') ?>" method="post">
                        <div class="form-group">
                            <label>Date *</label>
                            <input type="date" name="date" value="<?= date('Y-m-d') ?>" class="form-control" required>
                        </div>
                        <div>
                            <label for="barcode">Barcode *</label>
                        </div>
                        <div class="form-group input-group">
                            <input type="hidden" name="item_id" id="item_id">
                            <input type="text" name="barcode" id="barcode" class="form-control" required autofocus>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat" data-bs-toggle="modal" data-bs-target="#modal-item">
                                    <i class="bi bi-search"></i>
                                </button>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="item_name">Item Name *</label>
                            <input type="text" name="item_name" id="item_name" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="unit_name">Ukuran</label>
                                    <input type="text" name="unit_name" id="unit_name" value="-" class="form-control" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="stock">Initial Stock</label>
                                    <input type="text" name="stock" id="stock" value="-" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Info *</label>
                            <input type="text" name="detail" class="form-control" placeholder="Rusak / hilang / kadaluwarsa / etc" required>
                        </div>
                        <div class="form-group">
                            <label>Qty *</label>
                            <input type="number" name="qty" class="form-control" required>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" name="out_add" class="btn btn-primary btn-flat">
                                <i class="bi bi-send-check-fill"></i> Simpan
                            </button>
                            <button type="Reset" class="btn btn-secondary btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
                <h4 class="modal-title">Select Product Item</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($item as $i => $data) { ?>
                            <tr>
                                <td><?= $data->barcode ?></td>
                                <td><?= $data->name ?></td>
                                <td><?= $data->unit_name ?></td>
                                <td class="text-right"><?= indo_currency($data->price) ?></td>
                                <td class="text-right"><?= $data->stock ?></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary" id="select" data-id="<?= $data->item_id ?>" data-barcode="<?= $data->barcode ?>" data-name="<?= $data->name ?>" data-unit="<?= $data->unit_name ?>" data-stock="<?= $data->stock ?>">
                                        <ii class="bi bi-check-lg"></ii>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Data Tables -->
<script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $(document).on('click', '#select', function() {
            var item_id = $(this).data('id');
            var barcode = $(this).data('barcode');
            var name = $(this).data('name');
            var unit_name = $(this).data('unit');
            var stock = $(this).data('stock');
            $('#item_id').val(item_id);
            $('#barcode').val(barcode);
            $('#item_name').val(name);
            $('#unit_name').val(unit_name);
            $('#stock').val(stock);
            $('#modal-item').modal('hide');
        })
    })
</script>