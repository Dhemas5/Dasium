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
    <h3>Data Stock In</h3>
</div>

<!-- Main content -->
<section class="section">
    <?php //$this->view('messages') 
    ?>
    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>">
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="<?= site_url('stock/in/add/') ?>" class="btn btn-primary btn-flat">
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
                                    <td><?= $data->item_name ?></td>
                                    <td><span class="text-center badge bg-green"><?= $data->qty ?></span></td>
                                    <td class="text-center"><?= indo_date($data->date) ?></td>
                                    <td class="text-center" width="160px">
                                        <a type="button" id="set_detail" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-detail" data-barcode="<?= $data->barcode ?>" data-itemname="<?= $data->item_name ?>" data-detail="<?= $data->detail ?>" data-suppliername="<?= $data->supplier_name ?>" data-qty="<?= $data->qty ?>" data-date="<?= indo_date($data->date) ?>">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="<?= site_url('stock/in/del/' . $data->stock_id . '/' . $data->item_id) ?>" onclick="return confirm('Yakin Hapus Data?')" class="btn btn-danger btn-sm">
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

<div class="modal fade" id="modal-detail">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
                <h4 class="modal-title">Stock In Details</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th>Barcode</th>
                            <td><span id="barcode"></span></td>
                        </tr>
                        <tr>
                            <th>Item Name</th>
                            <td><span id="item_name"></span></td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td><span id="detail"></span></td>
                        </tr>
                        <tr>
                            <th>Supplier Name</th>
                            <td><span id="supplier_name"></span></td>
                        </tr>
                        <tr>
                            <th>Qty</th>
                            <td><span id="qty"></span></td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td><span id="date"></span></td>
                        </tr>
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
        $(document).on('click', '#set_detail', function() {
            var barcode = $(this).data('barcode');
            var itemname = $(this).data('itemname');
            var detail = $(this).data('detail');
            var suppliername = $(this).data('suppliername');
            var qty = $(this).data('qty');
            var date = $(this).data('date');
            $('#barcode').text(barcode);
            $('#item_name').text(itemname);
            $('#detail').text(detail);
            $('#supplier_name').text(suppliername);
            $('#qty').text(qty);
            $('#date').text(date);
            $('#detail').modal(detail);
        })
    })
</script>