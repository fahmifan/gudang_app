<section>
    <center><h2>Input Data</h2></center>
    <hr>
    <form action="<?php echo base_url('index.php/dashboard/input_data') ?>" method="post">
		<div class="form-group">
			<label>Nama :</label>
			<input type="text" class="form-control" name="nama" >
		</div>
		<div class="form-group">
			<label>Harga :</label>
			<input type="text" class="form-control" name="harga" >
		</div>
        <div class="form-group">
			<label>Jumlah :</label>
            <input class="form-control" rows="3" name="jumlah" >
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
	 </form>
</section>