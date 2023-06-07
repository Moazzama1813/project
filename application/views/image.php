<!DOCTYPE html>
<html>
<head>
<title>Image</title>
	 <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
	  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
      <link rel="stylesheet" href="<?php echo base_url().'assets/css/login.css';?>">
</head>
<body>

<form class="" action="<?php echo base_url().'index.php/Test/image '?>" enctype="multipart/form-data" method="post" name="frm" id="frm">

<!-- <?php if($error=$this->session->flashdata('ms')): ?>
			 <div class="row">
				    <div class="alert alert-danger  alert-dismissible fade show" role="alert">
						<?php echo $error;?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
						
					</div>
				
			</div>
			<?php endif;?> -->
      
      <div>
      <label for="email" class="sr-only">Email address</label>
      <input type="text" name="email" id="email" class="form-control  <?php echo (form_error('email') != "") ? 'is-invalid' : "";?>"  value="<?php echo set_value('email')?>"   placeholder="Email Address:" >
      <p class="invalid-feedback"><?php echo form_error('email'); ?></p>
      </div>
      <div>
      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" id="password"  class="form-control  <?php echo (form_error('password') != "") ? 'is-invalid' : "";?>"  value="<?php echo set_value('password')?>" placeholder="Enter Password:">
      <p class="invalid-feedback"><?php echo form_error('password'); ?></p>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

      <div class="mt-3">

      <a href="<?php echo base_url().'index.php/Test/abc '?>"> Register Here</a>
      </div>
     
    </form>




</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html

