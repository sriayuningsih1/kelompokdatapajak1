<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pajak SKPD</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_simpan WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Penyimpanan Data Pajak SKPD PAD Badan Pengelola Pendapatan Daerah Kab.Asahan </h2>
                        <h4>JL.Flamboyan Sibogat, Kecamatan Kota Kisaran Barat, Kabupaten Asahan , Sumatera Utara , 21211</h4>
                        <hr>
                        <h3>DATA PAJAK SKPD</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>NPWP</td> <td><?= $data['npwp'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Jenis Pajak</td> <td><?= $data['ruang_arsip'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td> <td><strong><?= $data['nama'] ?> </strong></td>
                                </tr>
                                <tr>
                                    <td>Penerima Berkas</td> <td><?= $data['penerima'] ?></td>
                                </tr>
								<tr>
                                    <td>Pengantar Berkas</td> <td><?= $data['pemberi'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
									<tr>
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
								<tr>
                                    <td>Masa Pajak</td> <td><?= $data['masa_pajak'] ?></td>
                                </tr>
								<tr>
                                    <td>Jumlah Pokok Pajak</td> <td><?= $data['jumlah_pokok_pajak'] ?></td>
                                </tr>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
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