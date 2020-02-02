
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pajak SKPD</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                   <form class="form-horizontal" action="" method="post">
                       
						 <div class="form-group">
                            <label for="npwp" class="col-sm-3 control-label">NPWP</label>
                            <div class="col-sm-9">
                                <input type="text" name="npwp" class="form-control" id="inputEmail3" placeholder="Inputkan NPWP" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jenis_pajak" class="col-sm-3 control-label">Jenis Pajak</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="jenis_pajak" class="form-control">
                                    <option value="Data Pajak Rumah Makan">Data Pajak Rumah Makan </option>
                                    <option value="Data Pajak Hotel">Data Pajak Hotel</option>
									<option value="Data Pajak Parkir">Data Pajak Parkir</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima Berkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" class="form-control" id="inputEmail3" placeholder="Inputkan Penerima" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="pemberi" class="col-sm-3 control-label">Pengantar Berkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="pemberi" class="form-control" id="inputEmail3" placeholder="Inputkan Pemberi" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="masa_pajak" class="col-sm-3 control-label">Masa Pajak</label>
                            <div class="col-sm-9">
                                <input type="date" name="masa_pajak" class="form-control" id="inputEmail3" placeholder="Inputkan Masa Pajak" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_pokok_pajak" class="col-sm-3 control-label">Jumlah Pokok Pajak</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_pokok_pajak"class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Pokok Pajak" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pajak 
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
	$jenis_pajak=$_POST['jenis_pajak'];
	$nama=$_POST['nama'];
	$penerima=$_POST['penerima'];
	$pemberi=$_POST['pemberi'];
	$tgl_masuk=$_POST['tgl_masuk'];
	$alamat=$_POST['alamat'];
  $masa_pajak=$_POST['masa_pajak'];
	$jumlah_pokok_pajak=$_POST['jumlah_pokok_pajak'];
    //buat sql
    $sql="INSERT INTO tbl_simpan VALUES ('','$npwp','$jenis_pajak','$nama','$penerima','$pemberi','$tgl_masuk','$alamat','$masa_pajak','$jumlah_pokok_pajak')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
