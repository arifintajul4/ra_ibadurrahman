<!-- <h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

      <p>
      	<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
      	<?php echo form_input($identity);?>
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

<?php echo form_close();?>
 -->

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
  <div class="auth-content">
    <div class="card">
      <div class="row align-items-center text-center">
        <div class="col-md-12">
          <div class="card-body">
            <img src="<?= base_url('assets/images/logo-dark.png') ?>" alt="" class="img-fluid mb-4">
            <h4 class="mb-3 f-w-400">Reset your password</h4>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-mail"></i></span>
              </div>
              <input id="email" type="email" class="form-control" placeholder="Email address">
            </div>
            <button class="btn btn-block btn-primary mb-4">Submit</button>
            <p class="mb-0 text-muted">Don’t have an account? <a href="<?= base_url('auth/create_user') ?>" class="f-w-400">Signup</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- [ auth-signin ] end -->