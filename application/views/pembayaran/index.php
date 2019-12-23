<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-header" style="padding-bottom: 5px;">
                        <h4>Pembayaran</h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('pembayaran/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus-square"></i> Tambah Data</a>
                        <a href="#" class="btn btn-outline-success"><i class="fa fa-print"></i> Cetak</a>
                        <div class="mt-2">
                            <table id="dataTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Jenis Tagihan</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Status</th>
                                        <th>Metode Bayar</th>
                                        <th>Tanggal</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($pembayaran as $p): ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $p['nama'] ?></td>
                                        <td><?= $p['jenis'] ?></td>
                                        <td>Rp.<?= number_format($p['jumlah']) ?></td>
                                        <td><?= $p['status'] ?></td>
                                        <td><?= $p['metode_bayar'] ?></td>
                                        <td><?= $p['tgl_bayar'] ?></td>
                                        <td>
                                            <center>
                                              <a class='btn btn-warning btn-sm' data-toggle="tooltip" data-placement="top" title='Edit Data' href="#"><i class="fas fa-pen"></i></a>
                                              <a class='btn btn-danger btn-sm hapus' data-toggle="tooltip" data-placement="top" title='Hapus Data' href="<?= base_url('tagihan/hapus/'.$p['id']) ?>" ><i class="fas fa-trash"></i></a>
                                            </center>  
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
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