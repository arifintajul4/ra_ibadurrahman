<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Siswa</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="">Siswa</a></li>
                            <li class="breadcrumb-item"><a href="">Data Siswa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <a href="<?= base_url('siswa/tambah') ?>" class="btn btn-primary mr-2"><i class="fa fa-plus-square"></i> Tambah Siswa</a>
                            <button class="btn btn-outline-success"><i class="fa fa-print"></i> Cetak</button>
                        </div>
                        <div class="body table-responsive">
                          <table id="dataTable" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>NIS</th>
                                      <th style="width: 20%">Nama Lengkap</th>
                                      <th>Jenis Kelamin</th>
                                      <th>No Telepon</th>
                                      <th>Alamat</th>
                                      <th>Kelas</th>
                                      <th><center>Action</center></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php $no = 1; foreach ($record as $row): ?>
                                    <tr>
                                      <td><?= $no ?></td>
                                      <td><?= $row['nis'] ?></td>
                                      <td><?= $row['nama'] ?></td>
                                      <td><?= ($row['jk'] == 'L')?'Laki-laki' : 'Perempuan' ?></td>
                                      <td><?= $row['no_tlp'] ?></td>
                                      <td><?= $row['alamat'] ?></td>
                                      <td class="text-center"><?= $row['kelas'] ?></td>
                                      <td>
                                        <center>
                                          <a class='btn btn-warning btn-sm' data-toggle="tooltip" data-placement="top" title='Lihat Detail' href="<?= base_url('siswa/detail/'.$row['nis']) ?>"><i class="fas fa-search-plus"></i></a>
                                          <a class='btn btn-danger btn-sm hapus' data-toggle="tooltip" data-placement="top" title='Hapus Data' href="<?= base_url('siswa/hapus/'.$row['nis']) ?>" ><i class="fas fa-trash"></i></a>
                                        </center>
                                      </td>
                                    </tr>
                                  <?php $no++; endforeach; ?>
                              </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->