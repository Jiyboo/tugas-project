<link href="<?php echo base_url('asset/');?>css/style.css" rel="stylesheet">
<link href="<?php echo base_url('asset/');?>vendors/pace-progress/css/pace.min.css" rel="stylesheet">
<body class="app flex-row align-items-center" style="background-color:gray">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>LOGIN!</h1>
                <p class="text-muted">Silakan Isi Username Dan Password Anda</p>
 <?php echo form_open('Login/proses_login',array('role' => 'form')); ?>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <?php echo form_input('username','',array('class' =>'form-control','placeholder'=>'Username','required'=>'required'));?>
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <?php echo form_password('password','',array('class' =>'form-control', 'placeholder'=>'password','required'=>'required'));?>
                  
                </div>
                <div class="row">
                  <div class="col-6">
                  <?php echo form_submit('btn','LOGIN',array('class' =>'btn btn btn-danger px-4')) ?>
                  </div>
                  <?php echo form_close() ?>
                  <div class="col-6 text-right">
                  </div>
                </div>
              </div>
            </div>
            <div class="card text-white bg-warning py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Informasi</h2>
                  <p>Tolong Masukan Username dan Password Anda , Jika Anda Salah Anda tidak akan bisa masuk ke dalam program.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
