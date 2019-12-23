<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header" style="padding: 10px 25px;">
                        <h4>Pasang Baru</h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="float-right mb-3">  
                           <a href="<?= base_url('home/laporan_pemasangan') ?>" target="_blank" class="btn btn-outline-primary"><i class="fa fa-print"></i> Print</a>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-striped table-bordered mt-5" >
                                <thead>
                                    <tr class=" text-center">
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Tanggal</th>
                                        <th rowspan="2">No. BA</th>
                                        <th rowspan="2">ID Pel</th>
                                        <th rowspan="2">Nama Pel</th>
                                        <th rowspan="2">TARIF</th>
                                        <th rowspan="2">DAYA</th>
                                        <th colspan="3">KWH Meter</th>
                                        <th colspan="3">Data Modem</th>
                                        <th rowspan="2">Pemeriksaan dan Pemeliharaan</th>
                                        <th rowspan="2">Tindak Lanjut</th>
                                        <th rowspan="2">Status</th>
                                    </tr>
                                    <tr>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>ID Meter</th>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>No. Imei</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($pelanggan as $p): ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= date('d M Y',strtotime($p['tanggal'])) ?></td>
                                        <td><?= $p['nomor_ba'] ?></td>
                                        <td><?= $p['id_pel'] ?></td>
                                        <td><?= $p['nama_pelanggan'] ?></td>
                                        <td><?= $p['tarif'] ?></td>
                                        <td><?= $p['daya'] ?></td>
                                        <td><?= $p['meter_merk'] ?></td>
                                        <td><?= $p['meter_tipe'] ?></td>
                                        <td><?= $p['no_seri'] ?></td>
                                        <td><?= $p['merk'] ?></td>
                                        <td><?= $p['tipe'] ?></td>
                                        <td><?= $p['no_imei'] ?></td>
                                        <td><?= $p['jenis_pemeliharaan'] ?></td>
                                        <td><?= $p['pemeliharaan'] ?></td>
                                        <td><center><?= ($p['check']==1)?'Selesai':'Belum Selesai' ?></center></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->