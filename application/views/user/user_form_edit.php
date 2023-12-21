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
    <h3>Data User</h3>
</div>

<!-- Main content -->
<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="<?= site_url('user/user_data') ?>" class="btn btn-warning btn-flat">
                    <i class="bi bi-arrow-clockwise"></i> Kembali</i>
                </a>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <?php ?>
                        <form action="" method="post">
                            <div class="form-group <?= form_error('fullname') ? 'has-error' : null ?>">
                                <label>Name *</label>
                                <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                                <input type="text" name="fullname" value="<?= $this->input->post('fullname') ?? $row->name ?>" class="form-control">
                                <?php if (form_error('fullname')) : ?>
                                    <span class="help-block text-danger"><?= form_error('fullname') ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
                                <label>Username *</label>
                                <input type="text" name="username" value="<?= $this->input->post('username') ?? $row->username ?>" class="form-control">
                                <?php if (form_error('username')) : ?>
                                    <span class="help-block text-danger"><?= form_error('username') ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                                <label>Password</label> <small>(Biarkan Kosong Jika Tidak Diganti)</small>
                                <input type="password" name="password" value="<?= $this->input->post('password') ?>" class="form-control">
                                <?php if (form_error('password')) : ?>
                                    <span class="help-block text-danger"><?= form_error('password') ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group <?= form_error('passconf') ? 'has-error' : '' ?>">
                                <label>Password Confirmation</label>
                                <input type="password" name="passconf" value="<?= $this->input->post('passconf') ?>" class="form-control">
                                <?php if (form_error('passconf')) : ?>
                                    <span class="help-block text-danger"><?= form_error('passconf') ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="address" class="form-control"><?= $this->input->post('address') ?? $row->address ?></textarea>
                                <?= form_error('address') ?>
                            </div>
                            <div class="form-group <?= form_error('level') ? 'has-error' : null ?>">
                                <label>Level *</label>
                                <select name="level" class="form-control">
                                    <?php $level = $this->input->post('level') ? $this->input->post('level') :  $row->level ?>
                                    <option value="1">Admin</option>
                                    <option value="2" <?= $level == 2 ? 'selected' : null ?>>Kasir</option>
                                </select>
                                <?php if (form_error('level')) : ?>
                                    <span class="help-block text-danger"><?= form_error('level') ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-flat">
                                    <i class="bi bi-send-check-fill"></i> Save
                                </button>
                                <button type="Reset" class="btn btn-secondary btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>