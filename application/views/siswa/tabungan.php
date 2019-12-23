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
                            <li class="breadcrumb-item"><a href="">Tabungan</a></li>
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
                            <a href="<?= base_url('tabungan/tambah') ?>" class="btn btn-primary mr-2"><i class="fa fa-plus-square"></i> Tambah Data</a>
                            <button class="btn btn-success"><i class="fa fa-print"></i> Cetak Laporan Harian</button>
                        </div>
                        <div class="body table-responsive">
                          <table id="dataTable" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                              <thead>
					              <tr>
					                  <th>No</th>
					                  <th>NIS</th>
					                  <th>Nama Siswa</th>
					                  <th>Saldo</th>
					                  <th><center>Action</center></th>
					              </tr>
					          </thead>
					          <tbody>
					            <?php $no = 1; foreach ($record as $row): ?>
					              <tr>
					                <td><?= $no++ ?></td>
					                <td><?= $row['nis'] ?></td>
					                <td><?= $row['nama'] ?></td>
					                <td>Rp.<?= number_format($row['saldo']) ?></td>
					                <td>
                                        <center>
                                          <a class='btn btn-warning btn-sm' data-toggle="tooltip" data-placement="top" title='Lihat Detail' href=""><i class="fas fa-search-plus"></i></a>
                                          <a class='btn btn-danger btn-sm hapus' data-toggle="tooltip" data-placement="top" title='Hapus Data' href="<?= base_url('tabungan/hapus/'.$row['id']) ?>"><i class="fas fa-trash"></i></a>
                                        </center>
                                      </td>
                                    </tr>
                                  <?php endforeach; ?>
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