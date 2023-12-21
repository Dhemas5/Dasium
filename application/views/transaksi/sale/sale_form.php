<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <!-- First Column -->
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <!-- Row 1: Invoice Number -->
                                <div class="row">
                                    <div class="col-md-12 text-center"><br>
                                        <h1><b><span id="grand_total2" style="font-size: 57pt"><span>0</span></span></b></h1>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Column -->
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <!-- Row 1: Cashier/User -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="user">Kasir</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="position-relative">
                                            <input type="text" id="user" value="<?= $this->fungsi->user_login()->name ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 2: Member Selection -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="member">Member</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="position-relative">
                                            <select id="member" class="form-control">
                                                <option value="">Umum</option>
                                                <?php foreach ($member as $mbr => $value) {
                                                    echo '<option value="' . $value->member_id . '">' . $value->name . '</option>';
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="date">Date</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="date" id="date" value="<?= date('Y-m-d') ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <!-- Row 1: Barcode and Grand Total -->
                                <div class="row">
                                    <div class="col-md-1 form-group">
                                        <label for="invoice">No.Nota</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input id="invoice" type="text" value="<?= $invoice ?>" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-1">
                                        <label for="barcode">Barcode</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <div class="position-relative">
                                            <div class="input-group">
                                                <input type="hidden" id="item_id">
                                                <input type="hidden" id="price">
                                                <input type="hidden" id="stock">
                                                <input type="hidden" id="qty_cart">
                                                <input type="text" id="barcode" class="form-control" autofocus>
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-item">
                                                        <i class="bi bi-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <div class="position-relative">
                                            <label for="qty">Qty</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <div class="position-relative">
                                            <div class="input-group">
                                                <input type="number" id="qty" value="1" min="1" class="form-control">
                                                <button type="button" id="add_cart" class="btn btn-primary">
                                                    <i class="bi bi-cart-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <!-- Row 1: Cashier/User -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Barcode</th>
                                                        <th>Product Item</th>
                                                        <th>Harga</th>
                                                        <th>Qty</th>
                                                        <th width="10%">Discount Item</th>
                                                        <th width="15%">Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="cart_table">
                                                    <?php $this->view('transaksi/sale/cart_data') ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <!-- Row 1: Cashier/User -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="sub_total">Sub Total</label>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <div class="position-relative">
                                            <input type="number" id="sub_total" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 2: Member Selection -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="discount">Discount (%)</label>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <div class="input-group">
                                            <input type="number" id="discount" value="0" min="0" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <!-- Row 1: Cashier/User -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="cash">Bayar</label>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <div class="position-relative">
                                            <input type="number" id="cash" value="0" min="0" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 2: Member Selection -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="kembalian">Kembalian</label>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <input type="number" id="change" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <!-- Row 1: Cashier/User -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="note">Catatan</label>
                                    </div>
                                    <div class="col-md-7 form-group">
                                        <div class="position-relative"><textarea id="note" rows="1" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 2: Member Selection -->
                                <div class="row">
                                    <div class="col-md-12 form-group d-flex justify-content-end">
                                        <button id="cancel_payment" class="btn btn-flat btn-xs btn-warning">
                                            <i class="bi bi-arrow-clockwise"></i> Refresh
                                        </button>

                                        <button id="process_payment" class="btn btn-flat btn-xs btn-success">
                                            <i class="bi bi-cash-coin"></i> Payment
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal Add Product Item -->
<div class="modal fade" id="modal-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
                <h4 class="modal-title">Add Product Item</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Size</th>
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
                                    <button class="btn btn-sm btn-primary" id="select" data-id="<?= $data->item_id ?>" data-barcode="<?= $data->barcode ?>" data-price="<?= $data->price ?>" data-stock="<?= $data->stock ?>">
                                        <i class="bi bi-check-lg"></i>
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

<!-- Modal Edit Cart Item -->
<div class="modal fade" id="modal-item-edit">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
                <h4 class="modal-title text-center">Update Product Item</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" id="cartid_item">

                <div class="form-group">
                    <label for="product_item">Product Item</label>
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" id="barcode_item" class="form-control" readonly>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="product_item" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="price_item">Price</label>
                    <input type="number" id="price_item" min="0" class="form-control">
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-7">
                            <label for="qty_item">Qty</label>
                            <input type="number" id="qty_item" min="1" class="form-control">
                        </div>
                        <div class="col-md-5">
                            <label>Stock Item</label>
                            <input type="number" id="stock_item" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="total_before">Total before discount</label>
                    <input type="number" id="total_before" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="discount_item">Discount per item (%)</label>
                    <div class="input-group">
                        <input type="number" id="discount_item" min="0" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="total_item">Total after discount</label>
                    <input type="number" id="total_item" class="form-control" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <div class="pull-right">
                    <button type="button" id="edit_cart" class="btn btn-flat btn-success">
                        <i class="fa fa-paper-plane"></i> Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Data Tables -->
<script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).on('click', '#select', function() {
        var barcode = $(this).data('barcode');

        $('#item_id').val($(this).data('id'));
        $('#barcode').val(barcode);
        $('#price').val($(this).data('price'));
        $('#stock').val($(this).data('stock'));
        $('#modal-item').modal('hide');

        get_cart_qty(barcode)
    })

    function get_cart_qty(barcode) {
        $('#cart_table tr').each(function() {
            var qty_cart = $("#cart_table td.barcode:contains('" + barcode + "')").parent().find("td").eq(4).html()
            if (qty_cart != null) {
                $('#qty_cart').val(qty_cart)
            } else {
                $('#qty_cart').val(0)
            }
        });
    }

    $(document).on('click', '#add_cart', function() {
        var item_id = $('#item_id').val()
        var price = $('#price').val()
        var stock = $('#stock').val()
        var qty = $('#qty').val()
        if (item_id == '') {
            alert('Product belum dipilih')
            $('#barcode').focus()
        } else if (stock < 1 || parseInt(stock) > (parseInt(qty_cart) + parseInt(qty))) {
            alert('Stock tidak mencukupi')
            $('#qty').focus()
        } else {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('index.php/sale/process') ?>',
                data: {
                    'add_cart': true,
                    'item_id': item_id,
                    'price': price,
                    'qty': qty
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success == true) {
                        $('#cart_table').load('<?= site_url('index.php/sale/cart_data') ?>', function() {
                            calculate()
                        })
                        $('#item_id').val('')
                        $('#barcode').val('')
                        $('#qty').val(1)
                        $('#barcode').focus()
                    } else {
                        alert('Gagal tambah item cart')
                    }
                }
            })
        }
    })

    $(document).on('click', '#del_cart', function() {
        if (confirm('Apakah Anda Yakin?')) {
            var cart_id = $(this).data('cartid')
            $.ajax({
                type: 'POST',
                url: '<?= site_url('index.php/sale/cart_del') ?>',
                dataType: 'json',
                data: {
                    'cart_id': cart_id
                },
                success: function(result) {
                    if (result.success == true) {
                        $('#cart_table').load('<?= site_url('index.php/sale/cart_data') ?>', function() {
                            calculate()
                        })
                    } else {
                        alert('Gagal hapus item cart');
                    }
                }
            })
        }
    })

    $(document).on('click', '#update_cart', function() {
        $('#cartid_item').val($(this).data('cartid'));
        $('#barcode_item').val($(this).data('barcode'));
        $('#product_item').val($(this).data('product'));
        $('#stock_item').val($(this).data('stock'));
        $('#price_item').val($(this).data('price'));
        $('#qty_item').val($(this).data('qty'));
        $('#total_before').val($(this).data('price') * $(this).data('qty'));
        $('#discount_item').val($(this).data('discount'));
        $('#total_item').val($(this).data('total'));
    })

    function count_edit_modal() {
        var price = $('#price_item').val();
        var qty = $('#qty_item').val();
        var discount = $('#discount_item').val();

        var total_before = price * qty;
        $('#total_before').val(total_before);

        var total = (price - (price * discount / 100)) * qty;
        $('#total_item').val(total);

        if (discount == '') {
            $('#discount_item').val(0);
        }
    }

    $(document).on('keyup mouseup', '#price_item, #qty_item, #discount_item', function() {
        count_edit_modal();
    });

    $(document).on('click', '#edit_cart', function() {
        var cart_id = $('#cartid_item').val();
        var price = $('#price_item').val();
        var qty = $('#qty_item').val();
        var discount = $('#discount_item').val();
        var total = $('#total_item').val();
        var stock = $('#stock_item').val();

        if (price == '' || price < 1) {
            alert('Harga tidak boleh kosong');
            $('#price_item').focus();
        } else if (qty == '' || qty < 1) {
            alert('Qty tidak boleh kosong');
            $('#qty_item').focus();
        } else if (parseInt(qty) > parseInt(stock)) {
            alert('Stock tidak mencukupi');
            $('#qty_item').focus();
        } else if (discount < 0 || discount > 100) {
            alert('Diskon harus dalam rentang 0 hingga 100');
            $('#discount_item').focus();
        } else {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('index.php/sale/process') ?>',
                data: {
                    'edit_cart': true,
                    'cart_id': cart_id,
                    'price': price,
                    'qty': qty,
                    'discount': discount,
                    'total': total
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success == true) {
                        $('#cart_table').load('<?= site_url('index.php/sale/cart_data') ?>', function() {
                            calculate()
                        })
                        alert('Data item cart berhasil ter-update');
                        $('#modal-item-edit').modal('hide');
                    } else {
                        alert('Data item cart tidak ter-update');
                        $('#modal-item-edit').modal('hide');
                    }
                }
            })
        }
    })

    function calculate() {
        var subtotal = 0;
        $('#cart_table tr').each(function() {
            subtotal += parseInt($(this).find('#total').text())
        })
        isNaN(subtotal) ? $('#sub_total').val(0) : $('#sub_total').val(subtotal)

        var discount = $('#discount').val()
        var grand_total = subtotal - (subtotal * discount / 100)

        function indo_currency(nominal) {
            return 'Rp' + numeral(nominal).format('0,0');
        }

        if (isNaN(grand_total)) {
            $('#grand_total').val(0);
            $('#grand_total2').text('Rp0');
        } else {
            $('#grand_total').val(grand_total);
            $('#grand_total2').text(indo_currency(grand_total));
        }

        var cash = $('#cash').val();
        cash != 0 ? $('#change').val(cash - grand_total) : $('#change').val(0)

        if (discount == '') {
            $('#discount').val(0)
        }
    }

    $(document).on('keyup mouseup', '#discount, #cash', function() {
        calculate();
    });

    $(document).ready(function() {
        calculate()
    })

    //process payment
    $(document).on('click', '#process_payment', function() {
        var member_id = $('#member').val()
        var subtotal = $('#sub_total').val()
        var discount = $('#discount').val()
        var grandtotal = $('#grand_total').val()
        var cash = $('#cash').val()
        var change = $('#change').val()
        var note = $('#note').val()
        var date = $('#date').val()
        if (subtotal < 1) {
            alert('Belum ada product item yang dipilih')
            $('#barcode').focus()
        } else if (cash < 1) {
            alert('Jumlah uang cash belum diinput')
            $('#cash').focus()
        } else {
            if (confirm('Yakin proses transaksi ini?')) {
                $.ajax({
                    type: 'POST',
                    url: '<?= site_url('index.php/sale/process') ?>',
                    data: {
                        'process_payment': true,
                        'member_id': member_id,
                        'subtotal': subtotal,
                        'discount': discount,
                        'grandtotal': grandtotal,
                        'cash': cash,
                        'change': change,
                        'note': note,
                        'date': date
                    },
                    dataType: 'json',
                    success: function(result) {
                        if (result.success) {
                            alert('Transaksi berhasil');
                            window.open('<?= site_url('index.php/sale/cetak/') ?>' + result.sale_id, '_blank')
                        } else {
                            alert('Transaksi gagal');
                        }
                        location.href = '<?= site_url('index.php/sale') ?>'
                    }
                })
            }
        }
    })

    $(document).on('click', '#cancel_payment', function() {
        if (confirm('Apakah anda yakin?')) {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('index.php/sale/cart_del') ?>',
                data: {
                    'cancel_payment': true
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success == true) {
                        $('#cart_table').load('<?= site_url('index.php/sale/cart_data') ?>', function() {
                            calculate()
                        })
                    }
                }
            })
            $('#discount').val(0)
            $('#cash').val(0)
            $('#member').val('').change()
            $('#barcode').val('')
            $('#barcode').focus()
        }
    })

    $('#barcode').keypress(function(e) {
        var key = e.which;
        var barcode = $(this).val();
        if (key == 13) {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('index.php/sale/get_item') ?>',
                data: {
                    'barcode': barcode
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success == true) {
                        $('#item_id').val(result.item.item_id);
                        $('#barcode').val(barcode);
                        $('#price').val(result.item.price);
                        $('#stock').val(result.item.stock);

                        $('#add_cart').click();
                    } else {
                        alert('Product tidak ditemukan');
                        $('#barcode').val('');
                    }
                }
            });
        }
    });
</script>