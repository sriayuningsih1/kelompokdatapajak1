<div class="container">
    <div class="row">
        <div class ="col-xs-12">

            <div class="alert alert-info">
                <strong>Selamat Datang di SIP Data Pajak SKPD PAD Kisaran</strong>
            </div>
        </div>
    </div>
    <div class="row">
        <!--colomn kedua-->
        <div class="col-sm-9 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Pajak Rumah Makan </h3>
                </div>
                <div class="panel-body">
                     <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                               <th width="30%">Npwp</th><th>Jenis Pajak</th><th>Nama</th><th>Alamat</th><th>Masa Pajak</th><th>Jumlah Pokok Pajak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_simpan";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <td><?= $data['jenis_pajak'] ?></td>
                                    <td><?= $data['npwp'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['masa_pajak'] ?></td>
                                    <td><?= $data['jumlah_pokok_pajak'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!--akhir colomn kedua-->
        <div class="col-sm-3 col-xs-12">
            <!--Jika terjadi login error tampilkan pesan ini-->
            <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Welcome <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Masuk Ke Sistem</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="proses_login.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" name="user" class="form-control input-sm"
                                   placeholder="Username" required="" autocomplete="off"/>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" name="pwd" class="form-control input-sm"
                                   placeholder="Password" required="" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="login" value="login"
                                        class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
                                    Login Sistem
                                </button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
            <?php } ?>
    </div>
</div>