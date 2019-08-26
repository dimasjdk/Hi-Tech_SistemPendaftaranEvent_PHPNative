<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta
        <small>Workshop</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?halaman=home"><i class="fa fa-home"></i> Dashboard</a></li>
        <li><i class="fa fa-users"></i> Data Workshop</a></li>
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
              <table style="text-align: center;" id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama Lengkap</th>
                  <th>Nim</th>
                  <th>Email</th>
                  <th>Telephone</th>
                  <th>Pembayaran</th>
                  <th>Kehadiran</th>
                  <th>Tanggal Daftar</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <?php
                $sql = "SELECT * from workshop order by id_workshop";
                $result = mysqli_query($koneksi,$sql);
                $nomor=1;

                while ($pecah = mysqli_fetch_array($result)) {                   

                  ?>
                  <tr>
                   <td><?php echo $nomor++; ?></td>
                   <td><?php echo $pecah['nama']; ?></td>
                   <td><?php echo $pecah['nim']; ?></td>
                   <td><?php echo $pecah['email']; ?></td>
                   <td><?php echo $pecah['handphone']; ?></td>
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
                    <a href="?halaman=edit_workshop&id=<?php echo $pecah['id_workshop'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                  </td>
                </tr>
                <?php

              }
              ?>

              </table>
            </div>
        </div>
  </div>





