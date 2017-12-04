<section>
    <p>Barang : </p>
    <p>Harga : </p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($stock->result() as $row) {
            ?>
                <tr>
                    <td id="num"><?=  $i;?></td>
                    <td><?= $row->nama ?></td>
                    <td><?= $row->harga ?></td>
                    <td><?= $row->jumlah?></td> 
                    <td id="opsi">
                        <a href="<?php echo base_url()."index.php/dashboard/edit/".$row->id;?>" class="btn-xs btn-info" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                        <a href="<?php echo base_url()."index.php/dashboard/delete_data?id=" . $row->id; ?>" class="btn-xs btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                    </td>      
                </tr>
            <?php
            $i++;
            }
        ?>
        </tbody>
    </table>
</section>