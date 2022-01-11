<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Data Pembeli</h2>
            <div>
                
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
            
        </div>
        <div class="card-body">
            <div class="ml-1 mb-3">
            </div>
            <table id="myTable" class="table table-bordered table-striped">
                <tr>
                    <th>Id Pembeli</th>
                    <th>Nama Pembeli</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                </tr>

                <?php
                foreach ($data as $produk){
                    echo "<tr>
                        <td>$produk->id_pembeli</td>
                        <td>$produk->nama_pembeli</td>
                        <td>$produk->no_telp</td>
                        <td>$produk->alamat</td>
                        </tr>";
                }
                ?>

                
                
            </table>
            <div id="AddModal" class="modal fade">
                <div class="modal-dialog"></div>
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-tittle"></div>
                        </div>
                    </div>
            </div>    
        </div>

        
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah transaksi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Id Pembeli</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Pembeli</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Simpan</button>
        </div>
        </div>
    </div>
    </div>


   
</div>


    
</body>

<script type="text/javascript">
$.ajax({
    url: 'http://192.168.1.22/native/read.php',
    dataType: 'json',
    success: function(data) {
        for (var i=0; i<data.length; i++) {
            var row = $('<tr><td>' + data[i].Id Pembeli + '</td><td>' + data[i].city + '</td><td>' + data[i].county + '</td></tr>');
            $('#myTable').append(row);
        }
    },
    error: function(jqXHR, textStatus, errorThrown){
        alert('Error: ' + textStatus + ' - ' + errorThrown);
    }
});
</script>
</html>