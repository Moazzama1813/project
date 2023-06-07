<html>
<head>
	<title>Register</title>
	 <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
	  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">

	 
</head>
<body>

<form action="<?php echo base_url().'index.php/Upload/uploadfile '?>" enctype="multipart/form-data" name="registerform1" id="registerform1" method="post">

<div class="form-group">
            <label for="name" style="font-weight: 600;">Image:</label>
            <input type="file" name="image" id="image" class="form-control">
			

    </div>

	
	<div class="form-group">
    	<button class="btn btn-block btn btn-primary" name="submit" value="submit">REGISTER NOW</button>

    </div>
</form>


</body>
</html>
