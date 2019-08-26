
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta
        <small>Software Fair</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?halaman=home"><i class="fa fa-home"></i> Dashboard</a></li>
        <li><i class="fa fa-users"></i> Data Software Fair</a></li>
        <!-- <li class="active">Data Santri</li> -->
      </ol>
    </section>

    <!-- Main content -->
          <div class="box">
              <div class="box-header">
              <!-- <h1 class="box-title">Kelola Data Pembayaran</h1> -->
              <!-- <a href="tambahsantri.html" class="btn btn-primary" role="button">Tambah Data Santri</a> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Asal Univ</th>
                  <th>Nama Aplikasi</th>
                  <th>Jenis Aplikasi</th>
                  <th>Ketua</th>
                  <th>Pembayaran</th>
                  <th>Kehadiran</th>
                  <th>Tanggal Daftar</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <?php
                $sql = "SELECT * from sf order by id_sf";
                $result = mysqli_query($koneksi,$sql);
                $nomor=1;

                while ($pecah = mysqli_fetch_array($result)) {                   

                  ?>
                  <tr>
                   <td><?php echo $nomor++; ?></td>
                   <td><?php echo $pecah['univ']; ?></td>
                   <td><?php echo $pecah['aplikasi']; ?></td>
                   <td><?php echo $pecah['jenis']; ?></td>
                   <td><?php echo $pecah['anggota_1']; ?></td>
                   <td>
                     <?php
                    if ($pecah['ket'] == "Lunas") {
                      ?>
                      <h5 style="background-color: #38ff38; border-radius: 25px; text-align: center; margin: 10px;"><?php echo $pecah['ket']; ?></h5>
                      <?php
                    } elseif ($pecah['ket'] == "Belum Bayar") {
                      ?>
                      <h5 style="background-color: orange; border-radius: 25px; text-align: center; margin: 10px;"><?php echo $pecah['ket']; ?></h5>
                      <?php
                    }
                    ?>
                   </td>
                   <td>
                     <?php
                    if ($pecah['kehadiran'] == "Tidak Hadir") {
                      ?>
                      <h5 style="background-color: orange; border-radius: 25px; text-align: center; margin: 10px;"><?php echo $pecah['kehadiran']; ?></h5>
                      <?php
                    } elseif ($pecah['kehadiran'] == "Hadir") {
                      ?>
                      <h5 style="background-color: #38ff38; border-radius: 25px; text-align: center; margin: 10px;"><?php echo $pecah['kehadiran']; ?></h5>
                      <?php
                    }
                    ?>
                   </td>
                   <td><?php echo $pecah['tanggal']; ?></td>
                   <td>
                    <a href="?halaman=detail_sf&id=<?php echo $pecah['id_sf'] ?>" class="btn btn-primary"><i class="fa fa-files-o"></i> Detail</a>
                  </td>
                </tr>
                <?php

              }
              ?>

              </table>
            </div>
        </div>
  </div>