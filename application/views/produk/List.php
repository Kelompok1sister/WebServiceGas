<div class="container">
    <div class="card mt-5">
        <div class="card-header"><h2>Data Gas</h2></div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Id</th>
                    <th>Nama Produk</th>
                    <th>Aksi</th>
                    
                </tr>
                <?php
                foreach ($data as $produk){
                    echo "<tr>
                        <td>$produk->id</td>
                        <td>$produk->nama_produk</td>
                        <td>".anchor('Produk/detail/'.$produk->id,'Detail','class="btn btn-sm btn-primary"').
                        "</td>
                        </tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>