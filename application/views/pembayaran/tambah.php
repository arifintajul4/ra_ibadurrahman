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
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="nis" class="col-sm-3 col-form-label">Nomor Induk Siswa</label>
                                <div class="col-sm-9">
                                  <input type="text" readonly class="form-control" id="nis" name="nis">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_siswa" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="nama_siswa" name="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis" class="col-sm-3 col-form-label">Jenis Pembayaran</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="jenis" name="jenis">
                                      <option></option>
                                      <option value="SPP">SPP</option>
                                      <option value="Kegitan Tahunan">Kegiatan Tahunan</option>
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
                                <label for="nominal" class="col-sm-3 col-form-label">Nominal</label>
                                <div class="col-sm-9">
                                  <input type="number" class="form-control" id="nominal" name="nominal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="keterangan" name="keterangan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="datepicker" class="col-sm-3 col-form-label">Tanggal Bayar</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="datepicker" name="tanggal" value="<?= date('d/m/Y') ?>">
                                </div>
                            </div>
                            <button class="btn btn-primary float-right" type="submit">Submit</button>
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