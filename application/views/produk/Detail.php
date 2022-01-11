<div class="container mt-5">
    <div class="card">
        <div class="card-header d-flex">
            <h2>Detail Produk</h2>
        </div>
        <div class="card-body">
            <div class="ml-1 mb-3">
                ID Produk : <?= $data[0]->id ?><br>
                Nama Produk : <?= $data[0]->nama_produk ?>
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID Item</th>
                    <th>Nama Item</th>
                    <th>Harga Item</th>
                </tr>
                <?php
                foreach ($dataItem as $item){
                    echo "<tr>
                        <td>$item->id</td>
                        <td>$item->nama_item</td>
                        <td>$item->harga</td>
                        </tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>