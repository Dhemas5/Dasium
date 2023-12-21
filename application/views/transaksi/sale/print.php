<!DOCTYPE html>
<html moznomarginboxes mozdisallowselectionprint>

<head>
    <title>Dasium - Print Nota</title>
    <style type="text/css">
        html {
            font-family: Verdana, Arial;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .content {
            width: 80mm;
            font-size: 12px;
            padding: 5px;
        }

        .title {
            text-align: center;
            font-size: 13px;
            padding-bottom: 5px;
            border-bottom: 1px dashed;
        }

        .head {
            margin-top: 5px;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid;
            display: flex;
            flex-direction: column;
        }

        .logo {
            text-align: center;
            margin-bottom: 10px;
        }

        .logo img {
            max-width: 75%;
            /* Sesuaikan ukuran gambar sesuai kebutuhan Anda */
            height: auto;
            filter: grayscale(200%) bold;
        }

        .divider {
            border-top: 1px dashed;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .section {
            display: flex;
            justify-content: space-between;
        }

        .section span {
            flex: 1;
        }

        .details {
            display: flex;
            justify-content: space-between;
        }

        .details div {
            flex: 1;
            text-align: left;
            font-weight: bold;
        }

        .thanks {
            margin-top: 10px;
            padding-top: 10px;
            text-align: center;
            border-top: 1px dashed;
            font-weight: bold;
        }

        @media print {
            @page {
                width: 80mm;
                margin: 0mm;
            }
        }
    </style>
</head>

<body onload="window.print()">
    <div class="content">
        <div class="logo">
            <img src="<?= base_url() ?>assets/img/ds.png" alt="Store Logo">
        </div>
        <div class="title">
            JL. PB. SUDIRMAN NO.114 TANGGUL-JEMBER
        </div>
        <div class="head">
            <div class="section">
                <span>Date: <?php echo isset($sale->date) ? date("d/m/Y H:i", strtotime($sale->sale_created)) : ''; ?></span>
            </div>

            <div class="section">
                <span>Kasir: <?php echo isset($sale->name) ? ucfirst($sale->name) : ''; ?></span>
            </div>

            <div class="divider"></div>

            <div class="section">
                <span>Invoice: <?php echo isset($sale->invoice) ? $sale->invoice : ''; ?></span>
            </div>

            <div class="section">
                <span>Member:
                    <?php
                    echo isset($sale->member_id) ? ($sale->member_id == null ? "Umum" : $sale->member_name) : 'Umum';
                    ?></span>
            </div>
        </div>
        <div class="transaction">
            <!-- Sale Details -->
            <div class="details">
                <div><b>Item</b></div>
                <?php
                $arr_discount = array();
                foreach ($sale_detail as $key => $value) { ?>
                    <div><?= $value->name ?></div>
                <?php } ?>
            </div>

            <div class="details">
                <div><b>Qty</b></div>
                <?php
                foreach ($sale_detail as $key => $value) { ?>
                    <div><?= $value->qty ?></div>
                <?php } ?>
            </div>

            <div class="details">
                <div><b>Price</b></div>
                <?php
                foreach ($sale_detail as $key => $value) { ?>
                    <div><?= indo_currency($value->detail_price) ?></div>
                <?php } ?>
            </div>

            <div class="details">
                <div><b>Total</b></div>
                <?php
                foreach ($sale_detail as $key => $value) { ?>
                    <div><?= indo_currency(($value->detail_price - $value->discount_item) * $value->qty) ?></div>
                <?php
                    if ($value->discount_item > 0) {
                        $arr_discount[] = $value->discount_item;
                    }
                }
                ?>
            </div>

            <div class="divider"></div>

            <!-- Discounts -->
            <div class="details">
                <div></div>
                <?php foreach ($arr_discount as $key => $value) { ?>
                    <div>Disc. <?= ($key + 1) ?></div>
                <?php } ?>
            </div>

            <div class="details">
                <div></div>
                <?php foreach ($arr_discount as $key => $value) { ?>
                    <div><?= indo_currency($value) ?></div>
                <?php } ?>
            </div>

            <!-- Subtotal and Discounts -->
            <div class="section">
                <span>Sub Total</span>
                <span><?php echo isset($sale->total_price) ? indo_currency($sale->total_price) : ''; ?></span>
            </div>

            <?php if (isset($sale->discount) && $sale->discount > 0) { ?>
                <div class="section">
                    <span>Disc. Sale</span>
                    <span><?php echo isset($sale->discount) ? indo_currency($sale->discount) : ''; ?></span>
                </div>
            <?php } ?>

            <!-- Grand Total, Cash, and Remaining -->
            <div class="section">
                <span>Grand Total</span>
                <span><?php echo isset($sale->final_price) ? indo_currency($sale->final_price) : ''; ?></span>
            </div>

            <div class="section">
                <span>Cash</span>
                <span><?php echo isset($sale->cash) ? indo_currency($sale->cash) : ''; ?></span>
            </div>

            <div class="section">
                <span>Kembalian</span>
                <span><?php echo isset($sale->remaining) ? indo_currency($sale->remaining) : ''; ?></span>
            </div>
        </div>

        <div class="thanks">
            ~~~ Terima Kasih ~~~<br>
            Dasium.Store
        </div>
    </div>
</body>

</html>