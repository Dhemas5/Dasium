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
    <h3>Data Member</h3>
</div>

<!-- Main content -->
<section class="section">
    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="<?= site_url('member/add') ?>" class="btn mb-1 btn-rounded btn-primary">
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
                                <th>Gender</th>
                                <th>No.hp</th>
                                <th>Alamat</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($row->result() as $key => $data) { ?>
                                <tr>
                                    <td style="width:5%;"><?= $no++ ?>.</td>
                                    <td><?= $data->name ?></td>
                                    <td><?= $data->gender ?></td>
                                    <td><?= $data->phone ?></td>
                                    <td><?= $data->address ?></td>
                                    <td class="text-center" width="160px">
                                        <a href="<?= site_url('member/edit/' . $data->member_id) ?>" class="btn btn-sm mb-1 btn-rounded btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="<?= site_url('member/del/' . $data->member_id) ?>" id="btn-hapus" class="btn btn-sm mb-1 btn-rounded btn-danger">
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

<!-- <script>
    $("#table-member").DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?= site_url('member/get_json') ?>",
            "type": "POST"
        },
        "columns": [{
                "data": "no",
                width: 40
            },
            {
                "data": "name",
                width: 150
            },
            {
                "data": "gender",
                width: 70
            },
            {
                "data": "phone",
                width: 120
            },
            {
                "data": "address",
                width: 150
            },
            {
                "data": "action",
                width: 100
            },
        ],
        "columnDefs": [{
                "target": [0, 5],
                "orderable": false
            },
            {
                "targets": [2, -1],
                "className": "text-center"
            },
        ]
    })
</script> -->