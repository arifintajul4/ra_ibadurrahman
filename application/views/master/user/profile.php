<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="card">
                	<div class="card-header" style="padding: 10px 25px;">
                		<h4>Profil Saya</h4>
                		<hr>
                	</div>
                    <div class="card-body">
                        <div class="row">
                        	<div class="col-md-4">
                        		<img src="<?= base_url('assets/images/user/default.png') ?>" class="img-thumbnail" style="height: 200px;">
                        	</div>
                        	<div class="col-md-8">
                        		<table class="table table-striped">
                        			<tr>
                        				<td>Nama Lengkap</td>
                        				<td>: <?= $user->nama_lengkap ?></td>
                        			</tr>
                        			<tr>
                        				<td>Username</td>
                        				<td>: <?= $user->username ?></td>
                        			</tr>
                        			<tr>
                        				<td>Email</td>
                        				<td>: <?= $user->email ?></td>
                        			</tr>
                        			<tr>
                        				<td>Nomor Telepon</td>
                        				<td>: <?= $user->no_tlp ?></td>
                        			</tr>
                        		</table>
                        		<a href="#" class="btn btn-warning" data-toggle="modal" data-target="#ubahUser"><i class="fas fa-pen"></i> Ubah</a>
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

<!-- Modal -->
<div class="modal fade" id="ubahUser" tabindex="-1" role="dialog" aria-labelledby="ubahUserLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ubahUserLabel">Ubah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('user/edit/'.$user->username) ?>" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= $user->username ?>" readonly>
          </div>
          <div class="form-group">
            <label for="first_name">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?= $user->nama_lengkap ?>" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $user->email ?>" required>
          </div>
          <div class="form-group">
            <label for="no_telp">No Telepon</label>
            <input type="number" class="form-control" id="no_telp" name="no_telp" value="<?= $user->no_tlp ?>" required>
          </div>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary btnSubmit" type="Submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>