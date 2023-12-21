<?php
$no = 1;
if ($cart->num_rows() > 0) {
    foreach ($cart->result() as $cart => $data) {
?>
        <tr>
            <td><?= $no++ ?>.</td>
            <td class="barcode"><?= $data->barcode ?></td>
            <td><?= $data->item_name ?></td>
            <td class="text-right"><?= $data->cart_price ?></td>
            <td class="text-center"><?= $data->qty ?></td>
            <td class="text-right"><?= $data->discount_item ?>%</td>
            <td class="text-right" id="total"><?= $data->total ?></td>
            <td class="text-center" width="160px">
                <button type="button" id="update_cart" data-bs-toggle="modal" data-bs-target="#modal-item-edit" data-cartid="<?= $data->cart_id ?>" data-barcode="<?= $data->barcode ?>" data-product="<?= $data->item_name ?>" data-stock="<?= $data->stock ?>" data-price="<?= $data->cart_price ?>" data-qty="<?= $data->qty ?>" data-discount="<?= $data->discount_item ?>" data-total="<?= $data->total ?>" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></button>
                <button id="del_cart" data-cartid="<?= $data->cart_id ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></button>
            </td>
        </tr>
<?php
    }
} else {
    echo '<tr>
          <td colspan="8" class="text-center">Tidak ada item</td>
          </tr>';
}
?>