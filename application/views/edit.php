
<html>
<head>
	<title>Edit </title>
	 <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
	  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">






		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



	  <!-- <style>
/* Popup container - can be anything you want */
.popup {
  position: center;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  /* background-color: #555; */
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 5%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: center;
  top: 100%;
  left: 50%;
  bottom:100%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

.responsive {
  width: 300%;
  height: auto;
}
</style> -->

<style>
	.responsive {
  width: 300%;
  height: auto;}
</style>





	 
</head>
<body>
	<div class="container">

 
		<div class="col-md-6">
			

      <div class="card mt-4">
  <div class="card-header" style="font-weight: 600;">
    Edit Form
  </div>
  <form action="<?php echo base_url().'index.php/Test/edit/'.$student->id?>" enctype="multipart/form-data"  name="registerform" id="registerform" method="post">
  <div class="card-body " >
    

    <div class="form-group">
   <labe for="name" style="font-weight: 600;">Name:</label>
   	<input type="text" name="name" id="name" value="<?php echo set_value('name', $student->name)?>" class="form-control  <?php echo (form_error('name') != "") ? 'is-invalid' : "";?>"   placeholder="Enter Your Name">
		 <p class="invalid-feedback"><?php echo form_error('name'); ?></p>
    
    </div>
    <div class="form-group">
   <labe for="name" style="font-weight: 600;">Email:</label>
   	<input type="text" name="email" id="email" class="form-control  <?php echo (form_error('email') != "") ? 'is-invalid' : "";?>" value="<?php echo  set_value('email', $student->email)?>" placeholder="Enter Your Email">
	   <p class="invalid-feedback"><?php echo form_error('email'); ?></p>
    </div>
    <div class="form-group">
   <labe for="name" style="font-weight: 600;">Phone No:</label>
   	<input type="text" name="phone" id="phone" class="form-control  <?php echo (form_error('phone') != "") ? 'is-invalid' : "";?>" value="<?php echo  set_value('phone', $student->phone)?>" placeholder="Enter Your Phone No">
	   <p class="invalid-feedback"><?php echo form_error('phone'); ?></p>
    </div>

		
			

            <div class="form-group">
            <label for="name" style="font-weight: 600;">Image:</label>
						<input type="hidden" name="image" value="<?php echo  set_value('image', $student->image)?>"  class="form-control  <?php echo (form_error('image') != "") ? 'is-invalid' : "";?>">
                        <input type="file" name="image" id="image" value="<?php echo  set_value('image', $student->image)?>" class="form-control  <?php echo (form_error('image') != "") ? 'is-invalid' : "";?>">
						<p class="invalid-feedback"><?php echo form_error('image'); ?></p>
						
						
						<!-- <diV class="popup" onclick="myFunction()">
                          
						<img src="<?=  base_url('picture/'. $student->image) ?>" alt="Image" style="height: 100px;width: 120px;border: 1px; dashed orange;border_radius: 5px;box-shadow: 0px 5px 10px rgba(0,0,0,0.4);">
						<span class="popuptext" id="myPopup">

						<img src="<?=  base_url('picture/'. $student->image) ?>" alt="Image" class="responsive" width="600" height="400" >


						</span>
						</diV> -->


						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">


						<img src="<?=  base_url('picture/'. $student->image) ?>" alt="Image" style="height: 100px;width: 120px;border: 1px; dashed orange;border_radius: 5px;box-shadow: 0px 5px 10px rgba(0,0,0,0.4);">
						</button>
    </div>
	
</form> 
   


             
   
    <div class="form-group">
    	<button class="btn btn-block btn btn-primary" name="submit" value="submit">UPDATE</button>

    </div>
   
        
    
  </div>
  
</div>
         

		</div>
	</div>
	<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->
 
  <!-- <script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script> -->




<div class="container">
  


  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="">
      
        <!-- Modal Header -->
        <!-- <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
				<img src="<?=  base_url('picture/'. $student->image) ?>" alt="Image" class="responsive img-thumbnail" width="500" height="400" >

        </div>
        
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->
        
      </div>
    </div>
  </div>
  
</div>
</body>

</html
