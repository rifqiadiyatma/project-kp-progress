<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo 'BPS | '.$title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="icon" href="<?=base_url('assets/bps.png')?>" type="image/gif">
  <style type="text/css">
        .login-page{
            background: url('<?= base_url('assets/email-pattern.png');?>') 
        }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Sistem</b>BPS</a>
  </div>
  <!-- /.login-logo -->
  <div class="card shadow">
      <div class="mx-auto">
        <img class="mt-4 brand-link" src="/assets/bps.png" width="200px" > 
      </div>
    <div class="card-body login-card-body">
      <h5 class="login-box-msg">Silahkan Login</h2>
            <?php 
            $errors = session()->getFlashdata('errors');
            if(!empty($errors)){ ?>
                <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Login Gagal</h5>
                <ul>
                    <?php foreach ($errors as $key => $value) { ?>
                        <li> <?= esc($value) ?> </li>
                    <?php } ?>
                </ul>
                </div>
            <?php } ?>
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-danger alert-dismissible">';
                echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo '<h5><i class="icon fas fa-ban"></i> Login Gagal</h5>';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }else if(session()->getFlashdata('pesanlogout')){
                echo '<div class="alert alert-info alert-dismissible">';
                echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo '<h5><i class="icon fas fa-info"></i>Pemberitahuan</h5>';
                echo session()->getFlashdata('pesanlogout');
                echo '</div>';
            }
            ?>
        <?php echo form_open('auth/login') ?>

        <div class="input-group mb-3">
          <input type="email" name = "email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name = "password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
 
          </div> 
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close() ?>
    </div>
    <!-- /.login-card-body -->
  </div>
  </div>
  
</div>

<!-- /.login-box -->

<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
<script>
    window.setTimeout(function(){
        $('.alert').fadeTo(500,0).slideUp(500, function(){
            $(this).remove();
        });
    },3000);
</script>

</body>
</html>
