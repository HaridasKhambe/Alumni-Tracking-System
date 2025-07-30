<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" >
	<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap4.css"> -->

<style type="text/css">
:root{

		--bgcolor-1:#34495e ;
	   --bgcolor-2:#2f3640;
	   --ahover:#3498db;
}

*{
		padding:0;
		margin:0;
}


	.reg-form
	{
		background: var(--bgcolor-1);
		color: white;
	}
</style>
</head>
<body>

<div class="container ">
	<div class="row justify-content-center mt-5">
		<div class="col-xs-12 col-sm-8 col-md-6 col-lg-7">
			<div class="card reg-form">
				<div class="card-header">
					<h3 class="card-title">Registration Form</h3>
				</div>
					<div class="card-body">
						<form>
							<div class="form-group">
 							    <label>PRN Number</label>
 							    <input type="text" name="prn_no" class="form-control" placeholder="enter your prn number" required>
 						    </div>

 						    <div class="form-group">
 							    <label>First Name</label>
 							    <input type="text" name="first_name" class="form-control" placeholder="enter your first name" required>
 						    </div>

 						   <div class="form-group">
 							    <label>Last Name</label>
 							    <input type="text" name="last_name" class="form-control" placeholder="enter your last name" required>
 						    </div>

 						    <div class="form-group">
    <label>Course Start Year</label>
    <select name="c_start_y" class="form-control" required>
        <option value="" disabled selected>Select start Year</option>
        <!-- PHP or JavaScript to dynamically generate options for years -->
        <?php
        $currentYear = date("Y");
        for ($i = $currentYear; $i >= $currentYear - 10; $i--) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
</div>

 						    <div class="form-group">
    							<label>Passout Year</label>
    							<select name="passout_y" class="form-control" required>
        							<option value="" disabled selected>Select Passout Year</option>
        							<!-- PHP or JavaScript to dynamically generate options for years -->
        							<?php
        							$currentYear = date("Y");
        							for ($i = $currentYear; $i <= $currentYear + 10; $i++) {
            							echo "<option value='$i'>$i</option>";
        							}
        							?>
    							</select>
							</div>

 						    
 							<div class="form-group">
    									<label>Employment Status</label>
    									<select name="emp_status" class="form-control" required>
        									<option value="" disabled selected>Select Employment Status</option>
        									<option value="employed">Employed</option>
        									<option value="unemployed">Unemployed</option>
        									<option value="self-employed">Self-employed</option>
    									</select>
							</div>
 						  

 						    <div class="form-group">
 							    <label>Organization Name</label>
 							    <input type="text" name="org-name" class="form-control" placeholder="enter your organization name" >
 						    </div>

 						    <div class="form-group">
 							    <label>Experience</label>
 							    <input type="number" name="exp-year" class="form-control" placeholder="enter year of experience" >
 						    </div>

 						    <div class="form-group">
 							    <label>Desiganation</label>
 							    <input type="text" name="e_design" class="form-control" placeholder="enter your desiganation" >
 						    </div>

 						    <div class="form-group">
 							    <label>Income</label>
 							    <input type="number" name="e_income" class="form-control" placeholder="enter your income details" >
 						    </div>

 						    <div class="form-group">
 							    <label>Email</label>
 							    <input type="text" name="e_email" class="form-control" placeholder="enter your email" >
 						    </div>

 						    <div class="form-group">
 							    <label>Mobile</label>
 							    <input type="tel" name="e_mob" class="form-control" placeholder="enter your organization name" >
 						    </div>


							<div class="row">
           					 <div class="col-sm-6">
               					 <button class="btn btn-outline-danger form-control">Cancel</button>
           					 </div>
            					<div class="col-sm-6">
                					<button type="submit" class="btn btn-outline-success form-control">Register</button>
            					</div>
        					</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>
	
	
</body>
</html>