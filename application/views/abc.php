<html>
<head>
	<title>Register</title>
	 <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
	  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">

	 
</head>
<body>

	<div class="container">
		<?php if($error=$this->session->flashdata('msg')): ?>
			<div class="row">
				<div class="col-lg-6">
					<div class="alert alert-success  alert-dismissible fade show" role="alert">
						<?php echo $error;?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
						
					</div>
				</div> 
			</div>
			<?php endif;?>
		<div class="col-md-6">
      <div class="card mt-4">
  <div class="card-header" style="font-weight: 600;">
    Register Here
  </div>
  <form action="<?php echo base_url().'index.php/test/abc '?>" enctype="multipart/form-data"  name="registerform" id="registerform" method="post">
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
            <p class="invalid-feedback">
				<?php echo form_error('image'); ?></p>
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
      
			<label for="name" style="font-weight: 600;">Country:</label>
			<select name="country" id="country" value="<?php echo set_value('country')?>"  class="form-control  <?php echo (form_error('country') != "") ? 'is-invalid' : "";?>">
			<p class="invalid-feedback"><?php echo form_error('country'); ?></p>
				<option value="">Select a Country</option>
         <?php  
				          
								

               foreach($countries as $row){
								echo '<option value="'.$row->id.'">'.$row->country_name.'</option>';

							 }
							
				 
				 ?>

			</select>
			 </div>
			 <div class="form-group">
			<label for="name" style="font-weight: 600;">City:</label>
			<select name="city" id="city" value="<?php echo set_value('city')?>" class="form-control  <?php echo (form_error('city') != "") ? 'is-invalid' : "";?>">
			<p class="invalid-feedback"><?php echo form_error('city'); ?></p>
			<option value="">Select a City</option>
			</select>
			 </div>


			 

<div class="form-group">
            <label for="name" style="font-weight: 600;">Image:</label>
            <input type="file" name="image" id="image" class="form-control ">
						 <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : ""; ?>
						
    </div>

	<!-- <div class="form-group">
   <labe for="name" style="font-weight: 600;">Image Description:</label>
   	<textarea type="text" name="description" id="description" class="form-control"  placeholder="Enter Your Image Description"></textarea>
    
    </div> -->
	
</form>
   


             
   
    <div class="form-group">
    	<button class="btn btn-block btn btn-primary" name="submit" value="submit">REGISTER NOW</button>

    </div>
    <div class="mt-3">

      <a href="<?php echo base_url().'index.php/Test/login '?>"> Login Here</a>
      </div>
        
    
  </div>
  
</div>


		</div>
	</div>

</body>
<script src="<?php echo base_url().'assets/js/jquery-3.7.0.min.js';?>"></script>

<script>
 $(document).ready(function(){
   $('#country').change(function(){
      var country_id=$('#country').val();
			// alert(country_id);
			if(country_id != ''){
			$.ajax({
            url : "<?php echo base_url(); ?>index.php/test/abc",
				method:"POST",
				data:{country_id:country_id},
				success:function(data){
           
					$('#city').html(data);
					// $('#city').html('<option value="">Select a City</option>');

				}

			});
		}
		else{
			$('#city').html('<option value="">Select a City</option>');
		}
	 });
 }
 );


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html
