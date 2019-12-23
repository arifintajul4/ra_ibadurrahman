<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-body">
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    <p>Data Siswa</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p>Data Orang Tua</p>
                                </div>
                            </div>
                        </div>
                        <form role="form" action="<?= base_url('siswa/tambah') ?>" method="post">
                        <div class="row setup-content" id="step-1">
                            <div class="col-md-12">
                                <h4>Data Siswa</h4>
                                <hr>
                                <div class="form-group row">
                                    <label for="nis" class="col-sm-3 col-form-label">Nomor Induk Siswa</label>
                                    <div class="col-sm-9">
                                      <input type="number" class="form-control" id="nis" name="nis" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap Siswa</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                      <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="agama" name="agama" required>
                                           <option></option>
                                           <option value="Islam">Islam</option>
                                           <option value="Katolik">Katolik</option>
                                           <option value="Kristen">Kristen</option>
                                           <option value="Hindu">Hindu</option>
                                           <option value="Budha">Budha</option>
                                           <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="jk" name="jk" required>
                                           <option></option>
                                           <option value="L">Laki-laki</option>
                                           <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kewarganegaraan" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
                                           <option></option>
                                           <option value="WNI">WNI</option>
                                           <option value="WNA">WNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_telp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-9">
                                      <input type="number" maxlength="12" class="form-control" id="no_telp" name="no_telp" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="alamat" name="alamat" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
                                    <div class="col-sm-9">
                                      <input type="text" maxlength="1" class="form-control" id="kelas" name="kelas" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tahun_ajaran" class="col-sm-3 col-form-label">Tahun Ajaran</label>
                                    <div class="col-sm-9">
                                      <input type="text" maxlength="6" class="form-control" id="tahun_ajaran" name="tahun_ajaran" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Selanjutnya</button>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-2">
                            <div class="col-md-12">
                                <h3>Data Orang Tua</h3>
                                <label class="row-sm-3 col-form-label">Nama Orang Tua</label>
                                <div class="form-group row">
                                    <label for="nama_ayah" class="col-sm-3 col-form-label">Ayah</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_ibu" class="col-sm-3 col-form-label">Ibu</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
                                    </div>
                                </div>
                                <label class="row-sm-3 col-form-label">Pekerjaan Orang Tua</label>
                                <div class="form-group row">
                                    <label for="pekerjaan_ayah" class="col-sm-3 col-form-label">Ayah</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_ibu" class="col-sm-3 col-form-label">Ibu</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
                                    </div>
                                </div>
                                <label class="row-sm-3 col-form-label">Pendidikan Orang Tua</label>
                                <div class="form-group row">
                                    <label for="pendidikan_ayah" class="col-sm-3 col-form-label">Ayah</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pendidikan_ibu" class="col-sm-3 col-form-label">Ibu</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_telp_ortu" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-9">
                                      <input type="number" class="form-control" id="no_telp_ortu" name="no_telp_ortu" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_ortu" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu" required>
                                    </div>
                                </div>
                                <button class="btn btn-success pull-right" name="submit" type="submit">Submit!</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>