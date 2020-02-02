<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_simpan WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Simpan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                      
                        <div class="form-group">
                            <label for="npwp" class="col-sm-3 control-label">NPWP</label>
                            <div class="col-sm-9">
                                <input type="text" name="npwp" value="<?=$data['npwp']?>"class="form-control" id="inputEmail3" placeholder="npwp">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Nomor Boks">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="masa_pajak" class="col-sm-3 control-label">Masa Pajak</label>
                            <div class="col-sm-9">
                                <input type="text" name="masa_pajak" value="<?=$data['masa_pajak']?>"class="form-control" id="inputEmail3" placeholder="masa_pajak">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="jumlah_pokok_pajak" class="col-sm-3 control-label">Jumlah Pokok Pajak</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_pokok_pajak" value="<?=$data['jumlah_pokok_pajak']?>"class="form-control" id="inputEmail3" placeholder="jumlah_pokok_pajak" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Edit</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Simpan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $npwp=$_POST['npwp'];
    $nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
    $masa_pajak=$_POST['masa_pajak'];
	$jumlah_pokok_pajak=$_POST['jumlah_pokok_pajak'];
   
    //buat sql
    $sql="UPDATE tbl_simpan SET npwp='$npwp',nama='$nama',alamat='$alamat',masa_pajak='$masa_pajak',jumlah_pokok_pajak='$jumlah_pokok_pajak' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



