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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" >
	<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap4.css">


	<?php require 'ad-partials/ad_navbar.php'?>


<style>

.space
{
	padding:60px 0;
}


</style>
</head>
<body>
	
	<div class="space">
		
	</div>
<div class="container">
 	<div class="table-responsive">
 		<table id="mytable" class="table table-striped table-bordered" style="width:100%">
 			<thead>
 				<tr>
					<th>#</th>
 					<th>PRN NO</th>
 					<th>First Name</th>
 					<th>Last Name</th>
 					<th>Addmission Year</th>
 					<th>Passout Year</th>
 					<th>Employment Status</th>
 					<th>Organization Name</th>
 					<th>Experience</th>
 					<th>Designation</th>
 					<th>Income</th>
 					<th>Email Id</th>
 					<th>Mobile</th>
 					<th>Verification</th>	
 				</tr>

 			</thead>

 			<tbody>

 				<?php


 					require 'ad-partials/db_conn.php';  //connect to db

 					//read all data from db
 					$sql = "SELECT * FROM alumini";
 					$result = mysqli_query($conn,$sql);

 					if (mysqli_num_rows($result)>0) {
 						
 						foreach ($result as $row) {
 							
 							?>

 							<tr>
 								<td>1</td>
 								<td><?= $row['prn_no'] ?></td>
 								<td><?= $row['first_name'] ?></td>
 								<td><?= $row['last_name'] ?></td>
 								<td><?= $row['crs_start_year'] ?></td>
 								<td><?= $row['passout_year'] ?></td>
 								<td><?= $row['employment_status'] ?></td>
 								<td><?= $row['oraganization_name'] ?></td>
 								<td><?= $row['experience'] ?></td>
 								<td><?= $row['designation'] ?></td>
 								<td><?= $row['income'] ?></td>
 								<td><?= $row['email_id'] ?></td>
 								<td><?= $row['password'] ?></td>
 								<td><?= $row['ph_no'] ?></td>

 								<td>
 						
 									<form method="POST" action="" name="verify-action" id="verify-action">
 									<!-- <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" id="sms-btn" name="sms-btn" data-target="#sms-modal" value="<?=$row['pro_id'] ?>">SMS</button> -->

									<!-- <button type="submit" name="edit-btn" class="btn btn-primary btn-sm openModalBtn" data-toggle="modal" id="update-btn"  data-target="#pdatestock" value="<?=$row['pro_id'] ?>">Edit</button> -->


									<button type="submit" name="delete-btn" class="btn btn-danger btn-sm"  id="delete-btn" value="<?=$row['prn_no'] ?>" onclick="confirmDelete(this)">Delete</button>

									<button type="submit" class="btn btn-primary btn-sm" id="sms-btn" name="sms-btn"  value="<?=$row['prn_no'] ?>">Verified</button>

									<!-- <input type="hidden" class="confirmationInput" name="confirmation" value=""> -->
									</form>

 								</td>

 							</tr>



 							<?php
 						}

 					}else
 					{

 						?>

 						<!-- <div class="card-body">
 							<h3>NO Product Found...!</h3>
 						</div> -->

 						<?php
 					}

 				?>
 				
 			</tbody>

 			<tfoot>
 				<tr>
 					<th>#</th>
 					<th>PRN NO</th>
 					<th>First Name</th>
 					<th>Last Name</th>
 					<th>Addmission Year</th>
 					<th>Passout Year</th>
 					<th>Employment Status</th>
 					<th>Organization Name</th>
 					<th>Experience</th>
 					<th>Designation</th>
 					<th>Income</th>
 					<th>Email Id</th>
 					<th>Mobile</th>
 					<th>Verification</th>	
 			</tfoot>


 			
 		</table>
 	</div>


<!-- for table -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>

<script type="text/javascript">
	new DataTable('#mytable');
</script>

</body>
</html>