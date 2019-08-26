<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Peserta
        <small>Talkshow Nasional</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?halaman=home"><i class="fa fa-home"></i> Dashboard</a></li>
        <li><i class="fa fa-users"></i> Data Talkshow</a></li>
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
                  <th>Nama Lengkap</th>
                  <th>Jurusan</th>
                  <th>Email</th>
                  <th>Telephone</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <?php
                $sql = "SELECT * from talkshow order by id_talk";
                $result = mysqli_query($koneksi,$sql);
                $nomor=1;

                while ($pecah = mysqli_fetch_array($result)) {                   

                  ?>
                  <tr>
                   <td><?php echo $nomor++; ?></td>
                   <td><?php echo $pecah['nama']; ?></td>
                   <td><?php echo $pecah['jurusan']; ?></td>
                   <td><?php echo $pecah['email']; ?></td>
                   <td><?php echo $pecah['handphone']; ?></td>
                   <td>
                    <a href="?halaman=hapus_talkshow&id=<?php echo $pecah['id_talk'] ?>" class="btn-danger btn"><i class="fa fa-trash"></i> hapus</a>
                  </td>
                </tr>
                <?php

              }
              ?>

              </table>
            </div>
        </div>
  </div>