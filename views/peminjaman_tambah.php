<?php
$nope=$_GET['nope'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_rm WHERE npwp ='$npwp'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Pajak Rumah Makan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="npwp" class="col-sm-3 control-label">Npwp</label>
                            <div class="col-sm-9">
								<input type="text" name="npwp" value="<?=$data['npwp']?>" class="form-control" id="inputEmail3" placeholder="npwp" readonly="true">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-3">
                                <input type="date" name="alamat" class="form-control" id="inputEmail3" placeholder="alamat">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="masa_pajak" class="col-sm-3 control-label">Masa Pajak</label>
                            <div class="col-sm-9">
                                <input type="text" name="masa_pajak" class="form-control" id="inputEmail3" placeholder="masa_pajak">
                            </div>
                        </div>
						
					 <div class="form-group">
                            <label for="jumlah_wajib_pajak" class="col-sm-3 control-label">Jumlah Wajib Pajak</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_wajib_pajak" class="form-control" id="inputEmail3" placeholder="jumlah_wajib_pajak">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan data rumah makan </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
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
    $sql="INSERT INTO peminjaman VALUES ('$npwp','$nama','$alamat','masa_pajak','','$masa_pajak','','$jumlah_pokok_pajak','')";
	$sqlArsip="UPDATE arsip SET status='Dipinjam' WHERE npwp='$nope'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan data pajak rumah makan Error");
	$queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
