
<!DOCTYPE html>
<html>
    <head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
	  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">







<!-- Model Links -->

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->



<style>
.tooltip1 {
  position:right;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip1 .tooltiptext {
  visibility: hidden;
  width: 120px;
  /* background-color: #555; */
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 20%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}
.tooltip1 .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}
.tooltip1:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

.responsive {
  width: 300%;
  height: auto;
}
</style>

<!-- <style>
	.responsive {
  width: 300%;
  height: auto;
}
</style> -->

    </head>


    <body>
    <header>  
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Dashboard</a>   
        <div class="col-md-6 text-right text-white ">Welcome,<?php echo $user['name'];?> <a href="<?php echo base_url().'index.php/test/logout'?>" class="nav-item text-white" >Logout</a>
        </div>
        </div>
      </nav>       
    </header>  
    <h2>Section title</h2>
    <div class="container mt-5">
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone #</th>
                  <th>Image</th>
									<th>Country_ID</th>
									<th>City_ID</th>
                  <th width="200">Action</th>
                </tr>
                <?php if(!empty($students)){
                    foreach($students as $student) {
                      ?>
                <tr>
                  <td><?php echo $student->id?></td>
                  <td><?php echo $student->name?></td>
                  <td><?php echo $student->email?></td>
                  <td><?php echo $student->phone?></td>									
                 <td>						
								 <div class="tooltip1"><img src="<?=  base_url('picture/'. $student->image) ?>" alt="Image" style="height: 100px;width: 120px;border: 1px; dashed orange;border_radius: 5px;box-shadow: 0px 5px 10px rgba(0,0,0,0.4);">
                 <span class="tooltiptext"><img src="<?=  base_url('picture/'. $student->image) ?>" class="responsive"  alt="Image"  ></span>
                      </div>
											<!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
												
                     <img src="<?=  base_url('picture/'. $student->image) ?>" alt="Image" style="height: 100px;width: 120px;border: 1px; dashed orange;border_radius: 5px;box-shadow: 0px 5px 10px rgba(0,0,0,0.4);">
                          </button> -->

								</td>							
									<td><?php echo $student->country?></td>
									<td><?php echo $student->city?></td>
                  <td>		
                    <a href="<?= base_url().'index.php/test/edit/'.$student->id;?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url('index.php/test/delete/'.$student->id)?>"   class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php }
                }  else {
                    ?>
                    <tr>
                    <td colspan="4">Records not found</td>
                    </tr>
                <?php
                }
                ?>
              </thead>
            </table>
          </div>
          </div>  
<div class="container">
					<?php  echo $this->pagination->create_links(); ?>

</div>   


<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-3.6.0.js">
		
	</script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js">

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
				<img src="<?php echo base_url('picture/'. $student->image) ?>" alt="Image" class="responsive img-thumbnail" width="500" height="400">
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
</html>

<div class="mt-3">
<?php 

include('footer.php');

?>
</div>
