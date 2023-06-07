
<html>
<head>
	<title>Register</title>
	 <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
	  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">

	 
</head>
<body>
	<div class="container">
<!-- 
     <?php
     $msg = $this->session->flashdata('msg');
     if($msg != "") {

     	echo "<div class='alert alert-success'>$msg</div>";
     }

     ?>
 -->
		<div class="col-md-6">
			

      <div class="card mt-4">
  <div class="card-header" style="font-weight: 600;">
    Register Here
  </div>
  <form action="<?php echo base_url().'index.php/Demo/register '?>" enctype="multipart/form-data"  name="registerform" id="registerform" method="post">
  <div class="card-body " >
    
    <p class="card-text">Please fill with your details</p>

    <div class="form-group">
   <labe for="name" style="font-weight: 600;">Name:</label>
   	<input type="text" name="name" id="name" value="<?php echo set_value('name')?>" class="form-control  <?php echo (form_error('name') != "") ? 'is-invalid' : "";?>" placeholder="Enter Your Name">
    <p class="invalid-feedback"><?php echo form_error('name'); ?></p>
    </div>
    <div class="form-group">
   <labe for="name" style="font-weight: 600;">Email:</label>
   	<input type="text" name="email" id="email" class="form-control  <?php echo (form_error('email') != "") ? 'is-invalid' : "";?>"  value="<?php echo set_value('email')?>" placeholder="Enter Your Email">
     <p class="invalid-feedback"><?php echo form_error('email'); ?></p>
    </div>
    <div class="form-group">
   <labe for="name" style="font-weight: 600;">Phone No:</label>
   	<input type="text" name="phone" id="phone" class="form-control  <?php echo (form_error('phone') != "") ? 'is-invalid' : "";?>"  value="<?php echo set_value('phone')?>" placeholder="Enter Your Phone No">
     <p class="invalid-feedback"><?php echo form_error('phone'); ?></p>
    </div>

    <!-- <div class="form-group">
            <label for="name" style="font-weight: 600;">Image:</label>
            <input type="file" name="image" id="image" class="form-control   <?php echo (form_error('image') != "") ? 'is-invalid' : "";?>" >
            <p class="invalid-feedback"><?php echo form_error('image'); ?></p>
            <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : ""; ?>

    </div> -->
     <div class="form-group">

   <label for="name" style="font-weight: 600;">Password:</label>
    <input type="password" name="password" id="password" class="form-control  <?php echo (form_error('password') != "") ? 'is-invalid' : "";?>"  value="<?php echo set_value('password')?>" placeholder="Enter Your Password">
     <p class="invalid-feedback"><?php echo form_error('password'); ?></p>
    </div>
     <div class="form-group">
      
   <label for="name" style="font-weight: 600;">Confirm Password:</label>
    <input type="password" name="pass" id="pass" class="form-control  <?php echo (form_error('pass') != "") ? 'is-invalid' : "";?>"  value="<?php echo set_value('pass')?>" placeholder="Enter Your Confirm Password">
     <p class="invalid-feedback"><?php echo form_error('pass'); ?></p>
    </div>

<div class="form-group">
            <label for="name" style="font-weight: 600;">Image:</label>
            <input type="file" name="image" id="image" class="form-control ">
						
						
    </div>
	
</form>
   


             
   
    <div class="form-group">
    	<button class="btn btn-block btn btn-primary" name="submit" value="submit">REGISTER NOW</button>

    </div>
        
    
  </div>
  
</div>


		</div>
	</div>

</body>
</html
