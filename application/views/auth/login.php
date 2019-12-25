<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
  <div class="auth-content">
    <div class="card">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="card-body">
            <center><span>Sistem Administrasi Keuangan</span></center>
            <h4 class="mb-4 f-w-400 text-center">RA Ibadurrahman</h4>
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('auth') ?>" method="post">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-user"></i></span>
              </div>
              <input id="username" name="username" type="text" class="form-control" placeholder="username"value="<?= set_value('username'); ?>">
            </div>
            <?= form_error('username', '<small class="text-danger mt-0">', '</small>'); ?>

            <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-lock"></i></span>
              </div>
              <input id="password" name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>

            <div class="form-group text-left mt-3">
              <div class="checkbox checkbox-primary d-inline">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" class="cr"> Remember me</label>
              </div>
            </div>
            <button class="btn btn-block btn-primary mb-4" type="submit">Signin</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- [ auth-signin ] end -->
