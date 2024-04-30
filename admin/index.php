<?php
include('includes/header.php'); 
?>
<?php
include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Dashboard</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app">   	
<head>
    <title>Admin Dashboard</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app">   	

	<div class="app-wrapper" style="margin-left:20rem">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Profile Section</h1>
				    </div>
				    
			    </div>
			   
	
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">

							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">N A M E</th>
												<th class="cell">L A B E L</th>
												<th class="cell">P I C T U R E</th>
												<th class="cell">E D I T</th>
											</tr>

										</thead>
                                    

									<tbody>

									<?php 
									
									$query = "SELECT * from main_prof";

									$result = mysqli_query($connection, $query);


									if(!$result) {
										die ("query failed".mysqli_error());
									}

									else {
										while ($row = mysqli_fetch_assoc($result)){

									?>

											<tr>
												<td class="cell"> <?php echo $row['name'];?></td>
												<td class="cell"> <?php echo $row['label'];?></td>
												<td class="cell"> <?php echo $row['label'];?></td>
												<td><a href="updates/updatemainprof.php?id=<?php echo $row['id']; ?>" class="btn btn-success"> Edit </a> </td>
											</tr>
											<?php
									}
								}
								?>

							</tbody>
							</table> 
							


                                </div>   
							

                            </div>
                        </div> 

						<p style="color:green;">
						<?php
								if (isset($_GET['updateprof_msg'])) {
									echo "<em>".$_GET['updateprof_msg']. "</em>";
								}
							?>
						</p>
						

                    </div>
                </div>   
            </div>   
        </div>
    </div>    

				
    <div class="app-wrapper" style="margin-left:20rem;">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">About Section</h1>
				    </div>
				    
			    </div>
			   
	
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">

							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">A B O U T</th>
												<th class="cell">L A B E L</th>
											</tr>


										</thead>

										<tbody>

											<?php 

											$query = "SELECT * from main_ab";

											$result = mysqli_query($connection, $query);


											if(!$result) {
												die ("query failed".mysqli_error());
											}

											else {
												while ($row = mysqli_fetch_assoc($result)){

											?>

													<tr>
														<th class="cell"> Interests </th>
														<td class="cell"> <?php echo $row['interests'];?></td>
														
													</tr>
													<tr>
														<th class="cell"> Education </th>
														<td class="cell"> <?php echo $row['education'];?></td>
														
													</tr>
													<tr>
														<th class="cell"> Information </th>
														<td class="cell"> <?php echo $row['information'];?></td>
														
													</tr>

													<tr>
													<td><a href="updates/updatemainab.php?id=<?php echo $row['id']; ?>" class="btn btn-success"> Edit </a> </td>
													</tr>
													<?php
											}
											}
											?>

</tbody>
                                    </table> 


                                </div>   
                            </div>
                        </div>   
						<p style="color:green;">
						<?php
								if (isset($_GET['updateab_msg'])) {
									echo "<em>".$_GET['updateab_msg']. "</em>";
								}
							?>
						</p>
                    </div>
                </div>   
            </div>   
        </div>
    </div>  
   

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

</body>
</html> 

