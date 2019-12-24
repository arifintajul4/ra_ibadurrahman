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
                            <li class="breadcrumb-item"><a href="<?= base_url('siswa') ?>">Siswa</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('siswa') ?>">Data Siswa</a></li>
                            <li class="breadcrumb-item"><a href="">Detail Siswa</a></li>
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
                        <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-siswa-tab" data-toggle="tab" href="#nav-siswa" role="tab" aria-controls="nav-siswa" aria-selected="true">Data Siswa</a>
                            <a class="nav-item nav-link" id="nav-ortu-tab" data-toggle="tab" href="#nav-ortu" role="tab" aria-controls="nav-ortu" aria-selected="false">Data Orang Tua</a>
                            <a class="nav-item nav-link" id="nav-tagihan-tab" data-toggle="tab" href="#nav-tagihan" role="tab" aria-controls="nav-tagihan" aria-selected="false">Tagihan</a>
                            <a class="nav-item nav-link" id="nav-tabungan-tab" data-toggle="tab" href="#nav-tabungan" role="tab" aria-controls="nav-tabungan" aria-selected="false">Transaksi Tabungan</a>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-siswa" role="tabpanel" aria-labelledby="nav-siswa-tab">
                            <div class="row mt-2">
                              <div class="col-md-4">
                                <img src="<?= base_url('assets/images/user/default.png') ?>" class="img-thumbnail" style="height: 200px;">
                              </div>
                              <div class="col-md-8">
                                <table class="table table-striped">
                                  <tr>
                                    <td>Nomor Induk Siswa</td>
                                    <td>: <?= $siswa->nis  ?></td>
                                  </tr>
                                  <tr>
                                    <td>Nama Lengkap</td>
                                    <td>: <?= $siswa->nama ?></td>
                                  </tr>
                                  <tr>
                                    <td>Agama</td>
                                    <td>: <?= $siswa->agama ?></td>
                                  </tr>
                                  <tr>
                                    <td>Nomor Telepon</td>
                                    <td>: <?= $siswa->no_tlp ?></td>
                                  </tr>
                                  <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>: <?= date('d M Y',strtotime($siswa->tgl_lahir)) ?></td>
                                  </tr>
                                  <tr>
                                    <td>Tahun Ajaran</td>
                                    <td>: <?= $siswa->tahun_ajaran ?></td>
                                  </tr>
                                  <tr>
                                    <td>Kelas</td>
                                    <td>: <?= $siswa->kelas ?></td>
                                  </tr>
                                </table>
                                <a href="#" class="btn btn-warning float-right">ubah</a>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-ortu" role="tabpanel" aria-labelledby="nav-ortu-tab">
                            <table class="table table-striped table-bordered mt-2">
                              <tr>
                                <td colspan="2">Nama Orang Tua</td>
                              </tr>
                              <tr>
                                <td>Ayah</td>
                                <td>: <?= $ortu->nama_ayah  ?></td>
                              </tr>
                              <tr>
                                <td>Ibu</td>
                                <td>: <?= $ortu->nama_ibu ?></td>
                              </tr>
                              <tr>
                                <td colspan="2">Pekerjaan Orang Tua</td>
                              </tr>
                              <tr>
                                <td>Ayah</td>
                                <td>: <?= $ortu->pekerjaan_ayah ?></td>
                              </tr>
                              <tr>
                                <td>Ibu</td>
                                <td>: <?= $ortu->pekerjaan_ibu ?></td>
                              </tr>
                              <tr>
                                <td colspan="2">Pendidikan Orang Tua</td>
                              </tr>
                              <tr>
                                <td>Ayah</td>
                                <td>: <?= $ortu->pendidikan_ayah ?></td>
                              </tr>
                              <tr>
                                <td>Ibu</td>
                                <td>: <?= $ortu->pendidikan_ibu ?></td>
                              </tr>
                              <tr>
                                <td>No Telepon</td>
                                <td>: <?= $ortu->no_telp ?></td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td>: <?= $ortu->alamat ?></td>
                              </tr>
                            </table>
                            <a href="#" class="btn btn-warning float-right">ubah</a>

                          </div>
                          <div class="tab-pane fade" id="nav-tagihan" role="tabpanel" aria-labelledby="nav-tagihan-tab">
                            <div class="table-responsive mt-2">
                              <table id="dataTable" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Jenis Tagihan</th>
                                    <th>Nominal</th>
                                    <th>Sisa Tagihan</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1; foreach ($tagihan as $t): ?>
                                    <tr>
                                      <td><?= $i++; ?></td>
                                      <td><?= $t['jenis']; ?></td>
                                      <td>Rp.<?= number_format($t['nominal']); ?></td>
                                      <td>Rp.<?= number_format($t['sisa']); ?></td>
                                      <td><?= $t['status']; ?></td>
                                      <td>
                                        <center>
                                          <a class="btn btn-warning btn-sm <?= ($t['status'] == 'Lunas') ?'disabled':'' ?>" data-toggle="tooltip" data-placement="top" title='Bayar' href="<?= base_url('pembayaran/tambah?id='.$t['id_tagihan_siswa']) ?>"><i class="fas fa-search-plus"></i></a>
                                          <a class='btn btn-danger btn-sm hapus' data-toggle="tooltip" data-placement="top" title='Hapus Data' href="<?= base_url('tagihan/hapus/'.$t['id_tagihan_siswa']) ?>" ><i class="fas fa-trash"></i></a>
                                        </center>
                                      </td>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-tabungan" role="tabpanel" aria-labelledby="nav-tabungan-tab">
                            <div class="table-responsive mt-2">
                              <table id="dataTable2" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nominal</th>
                                    <th>Jenis</th>
                                    <th>Keterangan</th>
                                    <th class="text-center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1; foreach ($tabungan as $tab): ?>
                                  <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= date('d M Y', strtotime($tab['tanggal'])) ?></td>
                                    <td>Rp.<?= number_format($tab['nominal']) ?></td>
                                    <td><?= $tab['jenis'] ?></td>
                                    <td><?= $tab['ket'] ?></td>
                                    <td>
                                        <center>
                                          <a class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title='Bayar' href="<?= base_url('pembayaran/tambah?id='.$tab['no_transaksi']) ?>"><i class="fas fa-search-plus"></i></a>
                                          <a class='btn btn-danger btn-sm hapus' data-toggle="tooltip" data-placement="top" title='Hapus Data' href="<?= base_url('tagihan/hapus/'.$tab['no_transaksi']) ?>" ><i class="fas fa-trash"></i></a>
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
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->