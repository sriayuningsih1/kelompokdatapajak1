<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pajak SKPD Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
					
                        <h2>Sistem Informasi Penyimpanan Data Pajak SKPD PAD Badan Pengelolah Pendapatan Daerah Kab.Asahan  </h2>
                        <h4>Jalan JL.Flamboyan Sibogat, Kecamatan Kota Kisaran Barat, Kabupaten Asahan , Sumatera Utara , 21211</h4>

                        <hr>
                        <h3>DATA PAJAK SKPD TAHUN   <? echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
									<th>NPWP</th><th width="18%">Jenis Pajak</th><th>Nama</th><th width="14%">Penerima Berkas</th><th width="14%">Pengantar Berkas</th><th width="10%">Tgl. Masuk</th><th width="14%">Alamat</th><th>Masa Pajak</th><th>Jumlah Pokok Pajak</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_simpan WHERE substr(tgl_masuk,1,4)='$ambilthn'";
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
                                <tr>
                                   <td><?= $data['npwp'] ?></td>
                                    <td><?= $data['jenis_pajak'] ?></td>
                                    <td><?= $data['nama'] ?> </td>
									<td><?= $data['penerima'] ?> </td>
									<td><?= $data['pemberi'] ?></td>
                                   
									                  <td><?= $data['tgl_masuk'] ?></td>
									                  <td><?= $data['alamat'] ?></td>
									                  <td><?= $data['masa_pajak'] ?></td>
													   <td><?= $data['jumlah_pokok_pajak'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Kisaran,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                         <u>Kabid ALPAN REZEKI,A.Ma.Pd<strong></u><br>
                                        NIP.102861091413726
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
