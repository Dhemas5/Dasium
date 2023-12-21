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
    <h3>Data Item</h3>
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
                <div class="row justify-content-center">
                    <div class="col-md-4 col-md-offset-4">
                        <?php echo form_open_multipart('item/process') ?>
                        <div class="form-group">
                            <label>Barcode *</label>
                            <input type="hidden" name="id" value="<?= $row->item_id ?>">
                            <input type="text" name="barcode" value="<?= $row->barcode ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="product_name">Nama Product*</label>
                            <input type="text" name="product_name" value="<?= $row->name ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Kategori *</label>
                            <select name="kategori" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach ($kategori->result() as $key => $data) { ?>
                                    <option value="<?= $data->kategori_id ?>" <?= $data->kategori_id == $row->kategori_id ? "selected" : null ?>><?= $data->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ukuran *</label>
                            <?php echo form_dropdown(
                                'unit',
                                $unit,
                                $selectedunit,
                                ['class' => 'form-control', 'required' => 'required']
                            ) ?>
                        </div>
                        <div class="form-group">
                            <label>Warna *</label>
                            <select name="colour" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach ($colour->result() as $key => $data) { ?>
                                    <option value="<?= $data->colour_id ?>" <?= $data->colour_id == $row->colour_id ? "selected" : null ?>><?= $data->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga *</label>
                            <input type="number" name="price" value="<?= $row->price ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <?php if ($page == 'edit') {
                                if ($row->image != null) { ?>
                                    <div style="margin-bottom:5px">
                                        <img src="<?= base_url('uploads/product/' . $row->image) ?>" style="width:80%">
                                    </div>
                            <?php
                                }
                            } ?>
                            <input type="file" name="image" class="form-control">
                            <small>(Biarkan Kosong Jika Tidak <?= $page == 'edit' ? 'diganti' : 'ada' ?>)</small>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="<?= $page ?>" class="btn mb-1 btn-rounded btn-primary">
                                <i class="bi bi-send-check-fill"></i> Simpan
                            </button>
                            <button type="Reset" class="btn mb-1 btn-rounded btn-secondary"> Reset</button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>