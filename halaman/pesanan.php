<table class="table table-bordered table-hover" style="margin-top: 100px;">

    <tr class="text-bg-success">

        <th>list queue</th>

        <th>Order code</th>

        <th>Our lovely customer</th>

        <th>Code menu</th>

        <th>Qty</th>

    </tr>

    <?php $i = 1; foreach ($menu as $m) { ?>

        <tr style="background-color: red;">

            <td><?= $i; ?></td>

            <td><?= $m["kode_pesanan"]; ?></td>

            <td><?= $m["nama_pelanggan"]; ?></td>

            <td><?= $m["kode_menu"]; ?></td>

            <td><?= $m["qty"]; ?></td>

        </tr>

    <?php $i++; } ?>

</table>