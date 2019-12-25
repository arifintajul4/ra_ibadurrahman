
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
                        <form role="form" action="<?= base_url('siswa/edit/'.$siswa['nis']) ?>" method="post">
                        <div class="row setup-content" id="step-1">
                            <div class="col-md-12">
                                <h4>Data Siswa</h4>
                                <hr>
                                <div class="form-group row">
                                    <label for="nis" class="col-sm-3 col-form-label">Nomor Induk Siswa</label>
                                    <div class="col-sm-9">
                                      <input type="number" class="form-control" id="nis" name="nis" value="<?= $siswa['nis'] ?>" readonly required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap Siswa</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                      <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $siswa['tgl_lahir'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="agama" name="agama" required>
                                           <option></option>
                                           <option <?= ($siswa['agama'] == 'Islam') ? 'selected':'' ?> value="Islam">Islam</option>
                                           <option <?= ($siswa['agama'] == 'Katolik') ? 'selected':'' ?> value="Katolik">Katolik</option>
                                           <option <?= ($siswa['agama'] == 'Kristen') ? 'selected':'' ?> value="Kristen">Kristen</option>
                                           <option  <?= ($siswa['agama'] == 'Hindu') ? 'selected':'' ?> value="Hindu">Hindu</option>
                                           <option  <?= ($siswa['agama'] == 'Budha') ? 'selected':'' ?> value="Budha">Budha</option>
                                           <option  <?= ($siswa['agama'] == 'Konghucu') ? 'selected':'' ?> value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="jk" name="jk" required>
                                           <option></option>
                                           <option  <?= ($siswa['jk'] == 'L') ? 'selected':'' ?> value="L">Laki-laki</option>
                                           <option <?= ($siswa['jk'] == 'P') ? 'selected':'' ?> value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kewarganegaraan" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
                                           <option></option>
                                           <option  <?= ($siswa['kewarganegaraan'] == 'WNI') ? 'selected':'' ?> value="WNI">WNI</option>
                                           <option <?= ($siswa['kewarganegaraan'] == 'WNA') ? 'selected':'' ?> value="WNA">WNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_telp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-9">
                                      <input type="number" maxlength="12" class="form-control" id="no_telp" name="no_telp" value="<?= $siswa['no_tlp'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="alamat" name="alamat"  value="<?= $siswa['alamat'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
                                    <div class="col-sm-9">
                                      <input type="text" maxlength="1" class="form-control" id="kelas" name="kelas" value="<?= $siswa['kelas'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tahun_ajaran" class="col-sm-3 col-form-label">Tahun Ajaran</label>
                                    <div class="col-sm-9">
                                      <input type="text" maxlength="6" class="form-control" id="tahun_ajaran" name="tahun_ajaran" value="<?= $siswa['tahun_ajaran'] ?>" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Selanjutnya</button>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-2">
                            <div class="col-md-12">
                                <h3>Data Orang Tua</h3>
                                <label class="row-sm-3 col-form-label">Nama Orang Tua</label>
                                <input type="hidden" name="id_orang_tua" value="<?= $siswa['id_orang_tua'] ?>">
                                <div class="form-group row">
                                    <label for="nama_ayah" class="col-sm-3 col-form-label">Ayah</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $siswa['nama_ayah'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_ibu" class="col-sm-3 col-form-label">Ibu</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $siswa['nama_ibu'] ?>" required>
                                    </div>
                                </div>
                                <label class="row-sm-3 col-form-label">Pekerjaan Orang Tua</label>
                                <div class="form-group row">
                                    <label for="pekerjaan_ayah" class="col-sm-3 col-form-label">Ayah</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?= $siswa['pekerjaan_ayah'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_ibu" class="col-sm-3 col-form-label">Ibu</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?= $siswa['pekerjaan_ibu'] ?>" required>
                                    </div>
                                </div>
                                <label class="row-sm-3 col-form-label">Pendidikan Orang Tua</label>
                                <div class="form-group row">
                                    <label for="pendidikan_ayah" class="col-sm-3 col-form-label">Ayah</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" value="<?= $siswa['pendidikan_ayah'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pendidikan_ibu" class="col-sm-3 col-form-label">Ibu</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" value="<?= $siswa['pendidikan_ibu'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_telp_ortu" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-9">
                                      <input type="number" class="form-control" id="no_telp_ortu" name="no_telp_ortu" value="<?= $siswa['no_telp_ortu'] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_ortu" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu" value="<?= $siswa['alamat_ortu'] ?>" required>
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