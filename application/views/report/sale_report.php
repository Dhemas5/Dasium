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

    .flex-container {
        display: flex;
        align-items: center;
    }

    .gambar-dashboard {
        max-width: 50px;
        /* Sesuaikan ukuran gambar sesuai kebutuhan Anda */
    }
</style>
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<!-- Main content -->
<section class="section">
    <div class="card">
        <div class="card-header">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="date1" value="<?= @$post['date1'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>s/d</label>
                            <input type="date" name="date2" value="<?= @$post['date2'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Member</label>
                            <select name="member" class="form-control">
                                <option value="">- All -</option>
                                <option value="null" <?= @$post['member'] == 'null' ? 'selected' : '' ?>>Umum</option>
                                <?php foreach ($member as $mbr => $data) { ?>
                                    <option value="<?= $data->member_id ?>" <?= @$post['member'] == $data->member_id ? 'selected' : '' ?>><?= $data->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No.Nota</label>
                            <input type="text" name="invoice" value="<?= @$post['invoice'] ?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-right">
                            <button type="submit" name="reset" class="btn btn-flat btn-secondary">Reset</button>
                            <button type="submit" name="filter" class="btn btn-info btn-flat">
                                Filter
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="flex-container">
                    <img src="../assets/img/ds.png" alt="Dashboard Image" class="gambar-dashboard">
                    <h3>Data Penjualan</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No.Nota</th>
                            <th>Date</th>
                            <th>Member</th>
                            <th>Total</th>
                            <th>Discount</th>
                            <th>Grand Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?= $no++ ?>.</td>
                                <td><?= $data->invoice ?></td>
                                <td><?= indo_date($data->date) ?></td>
                                <td><?= $data->member_id == null ? "Umum" : $data->member_name ?></td>
                                <td class="text-right"><?= indo_currency($data->total_price) ?></td>
                                <td class="text-right"><?= $data->discount ?>%</td>
                                <td class="text-right"><?= indo_currency($data->final_price) ?></td>
                                <td class="text-center" width="200px">
                                    <button type="button" id="detail" data-bs-target="#modal-detail" data-bs-toggle="modal" class="btn btn-warning btn-sm" data-invoice="<?= $data->invoice ?>" data-date="<?= indo_date($data->date) ?>" data-time="<?= substr($data->sale_created, 11, 5) ?>" data-member="<?= $data->member_id == null ? "Umum" : $data->member_name ?>" data-total="<?= indo_currency($data->total_price) ?>" data-discount="<?= indo_currency($data->discount) ?>" data-grandtotal="<?= indo_currency($data->final_price) ?>" data-cash="<?= indo_currency($data->cash) ?>" data-remaining="<?= indo_currency($data->remaining) ?>" data-note="<?= $data->note ?>" data-kasir="<?= ucfirst($data->user_name) ?>" data-saleid="<?= $data->sale_id ?>">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <a href="<?= site_url('sale/cetak/' . $data->sale_id) ?>" target="_blank" class="btn btn-info btn-sm">
                                        <i class="bi bi-printer"></i>
                                    </a>
                                    <a href="<?= site_url('sale/del/' . $data->sale_id) ?>" id="btn-hapus" class="btn btn-danger btn-sm">
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
</section>
<div class="modal fade" id="modal-detail">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
                <h4 class="modal-title">Laporan Penjualan Detail</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th style="width:20%">No.Nota</th>
                            <td style="width:30%"><span id="invoice"></span></td>
                            <th style="width:20%">Member</th>
                            <td style="width:30%"><span id="member"></span></td>
                        </tr>
                        <tr>
                            <th>Date Time</th>
                            <td><span id="datetime"></span></td>
                            <th>Kasir</th>
                            <td><span id="kasir"></span></td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td><span id="total"></alspan>
                            </td>
                            <th>Cash</th>
                            <td><span id="cash"></span></td>
                        </tr>
                        <tr>
                            <th>Discount</th>
                            <td><span id="discount"></span></td>
                            <th>Kembalian</th>
                            <td><span id="change"></span></td>
                        </tr>
                        <tr>
                            <th>Grand Total</th>
                            <td><span id="grandtotal"></span></td>
                            <th>Catatan</th>
                            <td><span id="note"></span></td>
                        </tr>
                        <tr>
                            <th>Product</th>
                            <td colspan="3"><span id="product"></span></td>
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
    $(document).on('click', '#detail', function() {
        $('#invoice').text($(this).data('invoice'))
        $('#member').text($(this).data('member'))
        $('#datetime').text($(this).data('date') + ' ' + $(this).data('time'))
        $('#total').text($(this).data('total'));
        $('#discount').text($(this).data('discount') + '%');
        $('#cash').text($(this).data('cash'))
        $('#change').text($(this).data('remaining'))
        $('#grandtotal').text($(this).data('grandtotal'))
        $('#note').text($(this).data('note'))
        $('#kasir').text($(this).data('kasir'))

        var product = '<table class="table no-margin">'
        product += '<tr><th>Item</th><th>Price</th><th>Qty</th><th>Disc</th><th>Total</th></tr>'
        $.getJSON('<?= site_url('report/sale_product/') ?>' + $(this).data('saleid'), function(data) {
            $.each(data, function(key, val) {
                product += '<tr><td>' + val.name + '</td><td>' + val.detail_price + '</td><td>' + val.qty + '</td><td>' + val.discount_item + '</td><td>' + val.total + '</td></tr>'
            })
            product += '</table>'
            $('#product').html(product)
        })
    })
</script>