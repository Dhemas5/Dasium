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
    <img src="assets/img/ds.png" alt="Dashboard Image" class="gambar-dashboard"> <!-- Ganti url_gambar_anda.jpg dengan URL gambar yang Anda inginkan -->
    <h3>Dashboard</h3>
</div>


<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-4">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldbi bi-cart-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-extrabold">Items</h6>
                                    <h6 class="font-extrabold mb-0"><?= $this->fungsi->count_item() ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-4">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldbi bi-truck"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-extrabold">Supplier</h6>
                                    <h6 class="font-extrabold mb-0"><?= $this->fungsi->count_supplier() ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-4">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldbi bi-people-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-extrabold">Member</h6>
                                    <h6 class="font-extrabold mb-0"><?= $this->fungsi->count_member() ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-4">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-extrabold">User</h6>
                                    <h6 class="font-extrabold mb-0"><?= $this->fungsi->count_user() ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                            <div class="avatar avatar-xl">
                                <img src="<?= base_url() ?>assets/assets/compiled/jpg/1.jpg" alt="Face 1">
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <div class="ms-3 name">
                                <br>
                                <h6 class="font-extrabold mb-0">
                                    <?= $this->fungsi->user_login()->username ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile Visit</h4>
                    </div>
                    <div class="card-body">
                        <div id="sales-bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include ApexCharts library -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    // Wrap your script inside a document ready function
    $(document).ready(function() {
        // Data for testing
        var data = <?= json_encode(array_map(function ($item) {
                        return $item->sold;
                    }, $row)); ?>;
        var categories = <?= json_encode(array_map(function ($item) {
                                return $item->name;
                            }, $row)); ?>;
        // Options for ApexCharts
        var options = {
            chart: {
                type: 'bar',
                height: 350,
                stacked: true,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                },
                dataLabels: {
                    style: {
                        fontSize: '14px', // Adjust the font size as needed
                    },
                },
            },
            series: [{
                name: 'Sold',
                data: data,
            }],
            xaxis: {
                categories: categories,
            },
            colors: ['#00BFFF', '#f56954'],
        };

        // Initialize ApexCharts
        var chart = new ApexCharts(document.querySelector("#sales-bar"), options);

        // Render the chart
        chart.render();
    });
</script>