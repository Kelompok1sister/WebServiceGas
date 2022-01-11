<?php echo form_open_multipart('form/simpan'); ?>
<h1>TAMBAH DATA</h1>
<table>
    <tr>
        <td>NAMA PRODUK</td><td><?php echo form_input('id_pembeli'); ?></td>
    </tr>
    <tr>
        <td>TIPE PRODUK</td><td><?php echo form_input('nama_pembeli'); ?></td>
    </tr>        
    <tr>
        <td>HARGA</td><td><?php echo form_input('no_telp'); ?></td>
    </tr> 
    <tr>
        <td>STOK</td><td><?php echo form_input('alamat'); ?></td>
    </tr> 
    <tr>
        <td></td>
        <td colspan="2">
            <?php echo form_submit('submit', 'Simpan'); ?>
            <?php echo anchor('produk', 'Kembali'); ?></td></tr>
</table>
<?php
echo form_close();
?>