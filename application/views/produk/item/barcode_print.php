<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barcode Product <?= $row->barcode ?></title>
</head>

<body>
    <?php
    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
    $barcodeHtml = $generator->getBarcode($row->barcode, $generator::TYPE_CODE_128);
    // Menambahkan atribut style untuk mengubah ukuran barcode
    $barcodeHtml = str_replace('<svg', '<svg style="width: 1000px; height: 1000px;"', $barcodeHtml);
    echo $barcodeHtml;
    ?>
    <br>
    <?= $row->barcode ?>
</body>

</html>