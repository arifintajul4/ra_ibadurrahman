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
                        <h4>Identitas Sekolah</h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class='row-md-12'>
                            <input type='hidden' name='id' value='<?= $record['id_identitas'] ?>'>
                            <div class="form-group">
                                <label for="nama_sekolah">Nama Sekolah</label>
                                <input type='text' class='form-control' id="nama_sekolah" name='nama_sekolah' value='<?= $record['nama_sekolah'] ?>'>
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No Telepon</label>
                                <input type='number' class='form-control' id="no_telp" name='no_telp' value='<?= $record['no_telp'] ?>'>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class='form-control' id="alamat" name='alamat' row="3"><?= $record['alamat'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="logo">Logo Sekolah</label>
                                <input type="file" class="form-control" id="logo" name="logo" value='<?= $record['favicon'] ?>'>
                            </div>
                            <div class='box-footer'>
                                <button type='submit' name='submit' class='btn btn-info float-right'>Update</button>
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
<!-- [ Main Content ] end -->