
<?php
    include "koneksi.php";
	$id=$_GET['id'];
	$arr=mysqli_query($koneksi,"SELECT * FROM produk WHERE id='$id'");
	while($r=mysqli_fetch_array($arr)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data </h4>
        </div>

        <div class="modal-body">
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">Nama Produk</label>
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $r['id']; ?>" />
     				<input type="text" name="nama_produk"  class="form-control" value="<?php echo $r['nama_produk']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Description">Description</label>
     				<textarea name="keterangan"  class="form-control"><?php echo $r['keterangan']; ?></textarea>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="harga">Harga</label>       
     				<input type="number" name="harga"  class="form-control" value="<?php echo $r['harga']; ?>" />
                </div>

	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Confirm
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             <?php } ?>

            </div>

           
        </div>
    </div>