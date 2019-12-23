<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row justify-content-md-center">
            <!-- [ form-element ] start -->
            <div class="col-sm-5">
                <?= $this->session->flashdata('message'); ?>
                <div class="card ">
                	<div class="card-header" style="padding: 10px 25px;">
                		<h4>Ubah Password</h4>
                		<hr>
                	</div>
                    <div class="card-body">
                        <div class="row">
                        	<div class="col-md-12">
                        		<form action="" method="post">
                              <div class="form-group">
                                <label for="pass_lama">Password Lama</label>
                                <input type="password" class="form-control" id="pass_lama" name="pass_lama">
                                <?= form_error('pass_lama', '<small class="text-danger">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                <label for="pass_baru">Password Baru</label>
                                <input type="password" class="form-control" id="pass_baru" name="pass_baru">
                                <?= form_error('pass_baru', '<small class="text-danger">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                <label for="konfir_pass">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="konfir_pass" name="konfir_pass">
                                <?= form_error('konfir_pass', '<small class="text-danger">', '</small>'); ?>
                              </div>
                              <button type="submit" class="btn btn-primary">submit</button>
                            </form>
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