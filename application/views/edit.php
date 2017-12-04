<section>
    <center><h2>Edit Data</h2></center>
    <hr>
    <form action="<?php echo base_url('index.php/dashboard/edit_data/'.$id) ?>" method="post">
		<div class="form-group">
			<label>Nama :</label>
			<input type="text" class="form-control" name="nama" value="<?= $barang->nama?>" >
		</div>
		<div class="form-group">
			<label>Harga :</label>
			<input type="text" class="form-control" name="harga" value="<?= $barang->harga?>" >
		</div>
        <div class="form-group">
			<label>Jumlah :</label>
            <input class="form-control" rows="3" name="jumlah" value="<?= $barang->jumlah?>" >
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
	 </form>
</section>
