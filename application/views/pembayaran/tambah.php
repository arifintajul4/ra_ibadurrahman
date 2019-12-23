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
                        <h4>Tambah Data Pembayaran</h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('pembayaran/tambah') ?>" method="post">
                            <input type="hidden" name="id_tagihan_siswa" value="<?= ($tagihan != NULL ) ? $tagihan->id_tagihan_siswa : '' ?>">
                            <div class="form-group row">
                                <label for="nis" class="col-sm-3 col-form-label">Nomor Induk Siswa</label>
                                <div class="col-sm-9">
                                  <input type="text" readonly class="form-control" id="nis" name="nis" value="<?= ($tagihan != NULL ) ? $tagihan->nis : '' ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_siswa" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="nama_siswa" name="nama" value="<?= ($tagihan != NULL ) ? $tagihan->nama : '' ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis" class="col-sm-3 col-form-label">Jenis Pembayaran</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="jenis" name="jenis">
                                      <option></option>
                                      <option <?= ($tagihan != NULL && $tagihan->jenis == 'SPP' ) ? 'selected' : '' ?> value="SPP">SPP</option>
                                      <option  <?= ($tagihan != NULL && $tagihan->jenis == 'Kegitan Tahunan' ) ? 'selected' : '' ?>value="Kegitan Tahunan">Kegiatan Tahunan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="metode" class="col-sm-3 col-form-label">Metode Pembayaran</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="metode" name="metode">
                                      <option></option>
                                      <option value="Tabungan">Tabungan</option>
                                      <option value="Tunai">Tunai</option>
                                    </select>
                                    <small id="saldo">Saldo Tabungan: </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 col-form-label">Jumlah Bayar</label>
                                <div class="col-sm-9">
                                  <input type="number" class="form-control" id="jumlah" name="jumlah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Bayar</label>
                                <div class="col-sm-9">
                                  <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= date('Y-m-d') ?>">
                                </div>
                            </div>
                            <button class="btn btn-primary float-right" name="submit" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->