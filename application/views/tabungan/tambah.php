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
                        <h4>Tambah Data Tabungan</h4>
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
                                    <select class="form-control selectpicker" id="nama_siswa" name="nama" data-live-search="true">
                                        <option></option>
                                        <?php foreach ($siswa as $s): ?>
                                        <option value="<?= $s['nis'] ?>"><?= $s['nama'] ?></option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_t" class="col-sm-3 col-form-label">Jenis</label>
                                <div class="col-sm-9">
                                    <select class="form-control selectpicker" id="jenis_t" name="jenis">
                                      <option></option>
                                      <option value="masuk">Pemasukan</option>
                                      <option value="keluar">Pengeluaran</option>
                                    </select>
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
                                <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                <div class="col-sm-9">
                                  <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= date('Y-m-d') ?>">
                                </div>
                            </div>
                            <button class="btn btn-primary float-right" type="submit" name="submit">Submit</button>
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