<!doctype html>
<html lang="en">
<?php
include '../constants/settings.php';
include 'constants/check-login.php';


if ($user_online == "true") {
	if ($myrole == "employee") {
	} else {
		header("location:../");
	}
} else {
	header("location:../");
}
?>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Handy Hunt - Employee Profile</title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
	<meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="500" />
	<meta property="og:image:height" content="300" />
	<meta property="og:image:alt" content="Bwire Jobs" />
	<meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="shortcut icon" href="../images/ico/favicon.png">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/component.css" rel="stylesheet">

	<link rel="stylesheet" href="../css/linearicons/style.css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../css/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="../css/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="../css/rivolicons/style.css">
	<link rel="stylesheet" href="../css/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="../css/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="../css/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="../css/flaticon-ventures/flaticon-ventures.css">

	<link href="../css/style.css" rel="stylesheet">

</head>
<style>
	.autofit2 {
		height: 80px;
		width: 100px;
		object-fit: cover;
	}
</style>

<body class="not-transparent-header">

	<div class="container-wrapper">

		<header id="header">

		<!--<div id="introLoader" class="introLoading"></div>-->

			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">

					<div class="logo-wrapper">
						<div class="logo">
							<a href="../"><img src="../images/handyman.png" alt="Logo" /></a>
						</div>
					</div>

					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">

						<ul class="nav navbar-nav" id="responsive-menu">

							<li>

								<a href="../">Home</a>

							</li>

							<li>
								<a href="../job-list.php">Job List</a>

							</li>
							<!-- <li>
								<a href="looking.php">Looking for Job</a>
							</li> -->

							<li>
								<a href="../employers.php">Company</a>
							</li>

							<?php
									if ($user_online == true) {
												if ($myrole == "employer") {
													print '<li> 
													<a href="../employees.php"> 
													Applicant
													</a>
													</li>';
												}	
							} else {
							
							}
							?>


							<li>
								<a href="../contact.php">Contact Us</a>
							</li>

						</ul>

					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
							<li><a href="../logout.php">Logout</a></li>
							<li><a href="./">Profile</a></li>
						</ul>
					</div>

				</div>

				<div id="slicknav-mobile"></div>

			</nav>


		</header>

		<div class="main-wrapper">

			<div class="breadcrumb-wrapper">

				<div class="container">

					<ol class="breadcrumb-list booking-step">
						<li><a href="../">Jobs</a></li>
						<li><span>Profile</span></li>
					</ol>

				</div>

			</div>


			<div class="admin-container-wrapper">

				<div class="container">

					<div class="GridLex-gap-15-wrappper">

						<div class="GridLex-grid-noGutter-equalHeight">

							<div class="GridLex-col-3_sm-4_xs-12">

								<div class="admin-sidebar">

									<div class="admin-user-item">
										<div class="image">

											<?php
											if ($myavatar == null) {
												print '<center><img class="img-circle autofit2" src="../images/default.jpg" title="' . $myfname . '" alt="image"  /></center>';
											} else {
												echo '<center><img class="img-circle autofit2" alt="image" title="' . $myfname . '"  src="data:image/jpeg;base64,' . base64_encode($myavatar) . '"/></center>';
											}
											?>
										</div>
										<br>


										<h4><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
										<p class="user-role"><?php echo "$mytitle"; ?></p>

									</div>

									<div class="admin-user-action text-center">

										<a href="my_cv" class="btn btn-primary btn-sm btn-inverse" target="_blank">View my CV</a>

									</div>

									<ul class="admin-user-menu clearfix">
										<li class="active">
											<a href="./"><i class="fa fa-user"></i> Profile</a>
										</li>
										<li class="">
											<a href="change-password.php"><i class="fa fa-key"></i> Change Password</a>
										</li>
										<li>
											<a href="qualifications.php"><i class="fa fa-trophy"></i> Educational Attainment</a>
										</li>
										<li>
											<a href="language.php"><i class="fa fa-language"></i> Language Proficiency</a>
										</li>
										<li>
											<a href="training.php"><i class="fa fa-gears"></i> Training & Workshop</a>
										</li>

										<li>
											<a href="referees.php"><i class="fa fa-users"></i> Reference</a>
										</li>
										<!-- <li>
											<a href="academic.php"><i class="fa fa-graduation-cap"></i> Academic Qualifications</a>
										</li> -->
										<li>
											<a href="experience.php"><i class="fa fa-briefcase"></i> Working Experience</a>
										</li>
										<li>
											<a href="attachments.php"><i class="fa fa-folder-open"></i> Other Attachments</a>
										</li>
										<li>
											<a href="applied-jobs.php"><i class="fa fa-bookmark"></i> Applied Jobs</a>
										</li>
										<li>
											<a href="recent-jobs.php"><i class="fa fa-bookmark"></i> Recent Jobs</a>
										</li>
										<li>
											<a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
										</li>
									</ul>

								</div>

							</div>

							<div class="GridLex-col-9_sm-8_xs-12">

								<div class="admin-content-wrapper">


									<div class="admin-section-title">


										<div class="container">
											<?php
											require '../constants/db_config.php';
											$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
											$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$mynewid = $myid;
											$stmt = $conn->prepare("SELECT * FROM tbl_users WHERE status = 'unemployed' AND member_no = '$mynewid' ");
											$stmt->execute();
											$result = $stmt->fetchAll();
											$rec = count($result);
											if ($rec == 1) {
												$work_stat = "APPLICANT";
												$stat_color = "progress-bar progress-bar-striped bg-danger";
											} else {
												$work_stat = "HIRED";
												$stat_color = "progress-bar progress-bar-striped bg-success";
											}


											?>
											<h2 style="text-transform: uppercase">Work Status</h2>
											<span class="badge bg-<?php echo $stat_color ?>">
												<?php echo $work_stat ?>
											</span>

											<!-- <?php
													if ($isLooking == '1') {
													?>
												<span class="badge bg-progress-bar progress-bar-striped bg-success">
													Looking for a Job
												</span>

											<?php
													} else {
											?>
												<span class="badge bg-progress-bar progress-bar-striped bg-danger">
													Not Looking for a Job
												</span>

											<?php
													}


											?> -->

										</div>
									</div>

									<div class="admin-section-title">
										<h2 style="text-transform: uppercase">Profile</h2>
										<!-- <p>Your last loged-in: <span class="text-primary"><?php echo "$mylogin"; ?></span></p> -->

									</div>

									<form class="post-form-wrapper" action="app/update-profile.php" method="POST" autocomplete="off">

										<div class="row gap-20">
											<?php require 'constants/check_reply.php'; ?>

											<div class="clear"></div>

											<div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>First Name</label>
													<input name="fname" required type="text" class="form-control" value="<?php echo "$myfname"; ?>" placeholder="Enter your first name" readonly>
												</div>

											</div>

											<div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>Last Name</label>
													<input name="lname" required type="text" class="form-control" value="<?php echo "$mylname"; ?>" placeholder="Enter your last name" readonly>
												</div>

											</div>

											<div class="clear"></div>

											<div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>Born</label>
													<div class="row gap-5">
														<div class="col-xs-3 col-sm-3">
															<select name="date" required class="selectpicker form-control" data-live-search="false">
																<option disabled value="" selected>Day</option>
																<?php
																$x = 1;

																while ($x <= 31) {

																	if ($x < 10) {
																		$x = "0$x";
																		print '<option ';
																		if ($mydate == $x) {
																			print ' selected ';
																		}
																		print ' value="' . $x . '">' . $x . '</option>';
																	} else {
																		print '<option ';
																		if ($mydate == $x) {
																			print ' selected ';
																		}
																		print ' value="' . $x . '">' . $x . '</option>';
																	}
																	$x++;
																}
																?>
															</select>
														</div>
														<div class="col-xs-5 col-sm-5">
															<select name="month" required class="selectpicker form-control" data-live-search="false">
																<option disabled value="" selected>Month</option>
																<?php
																$x = 1;

																while ($x <= 12) {

																	if ($x < 10) {
																		$x = "0$x";
																		print '<option ';
																		if ($mymonth == $x) {
																			print ' selected ';
																		}
																		print ' value="' . $x . '">' . $x . '</option>';
																	} else {
																		print '<option ';
																		if ($mymonth == $x) {
																			print ' selected ';
																		}
																		print ' value="' . $x . '">' . $x . '</option>';
																	}
																	$x++;
																}
																?>
															</select>
														</div>
														<div class="col-xs-4 col-sm-4">
															<select name="year" class="selectpicker form-control" data-live-search="false">
																<option disabled value="" selected>Year</option>
																<?php
																$x = date('Y');
																$yr = 60;
																$y2 = $x - $yr;
																while ($x > $y2) {

																	print '<option ';
																	if ($myyear == $x) {
																		print ' selected ';
																	}
																	print ' value="' . $x . '">' . $x . '</option>';
																	$x = $x - 1;
																}
																?>
															</select>
														</div>
													</div>
												</div>

											</div>

											<div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>Email</label>
													<input type="email" name="email" required class="form-control" value="<?php echo "$myemail"; ?>" placeholder="Enter your email address" readonly>
												</div>

											</div>

											<div class="clear"></div>



											<div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>Education Level</label>
													<input value="<?php echo "$myedu"; ?>" name="education" type="text" required class="form-control" placeholder="Eg: Diploma, Degree...etc" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
												</div>

											</div>

											<div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>Title</label>
													<input value="<?php echo "$mytitle"; ?>" name="title" required type="text" class="form-control mb-15" placeholder="Eg: Computer Science, IT...etc" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
												</div>

											</div>



											<div class="clear"></div>

											<div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>Gender</label>
													<select name="gender" required class="selectpicker show-tick form-control" data-live-search="false">
														<option disabled value="">Select</option>
														<option <?php if ($mygender == "Male") {
																	print ' selected ';
																} ?> value="Male">Male</option>
														<option <?php if ($mygender == "Female") {
																	print ' selected ';
																} ?>value="Female">Female</option>
													</select>
												</div>

											</div>

											<div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>Brgy</label>
													<input name="city" required type="text" class="form-control" value="<?php echo "$mycity"; ?>" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">
												</div>

											</div>

											<div class="clear"></div>


											<div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>Street</label>
													<input name="street" required type="text" class="form-control" value="<?php echo "$mystreet"; ?>">
												</div>

											</div>
											<div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>City</label>
													<select name="country" required class="selectpicker show-tick form-control" data-live-search="true">
														<option disabled value="">Select</option>
														<?php
														require '../constants/db_config.php';
														try {
															$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
															$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


															$stmt = $conn->prepare("SELECT * FROM tbl_city ORDER BY city_name");
															$stmt->execute();
															$result = $stmt->fetchAll();

															foreach ($result as $row) {
														?> <option <?php if ($mycountry == $row['city_name']) {
																		print ' selected ';
																	} ?> value="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option> <?php

																																						}
																																					} catch (PDOException $e) {
																																					}

																																							?>
													</select>
												</div>

											</div>
											<!-- <div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>Zip Code</label>
													<input name="zip" required type="text" class="form-control" value="<?php echo "$myzip"; ?>">
												</div>

											</div> -->

											<div class="clear"></div>





											<div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>Phone Number</label>
													<input type="text" name="phone" required class="form-control" value="<?php echo "$myphone"; ?>">
												</div>

											</div>
											<!-- <div class="col-sm-6 col-md-4">

												<div class="form-group">
													<label>Status</label>
													<select name="isLooking" class="form-control">
														<?php
														if ($isLooking == '1') {
														?>
															<option value="0">Not Looking for Job</option>
															<option value="1" selected>Looking for Job</option>

														<?php
														} else {
														?>
															<option value="0" selected>Not Looking for Job</option>
															<option value="1">Looking for Job</option>

														<?php
														}


														?>


													</select>
												</div>

											</div> -->




											<div class="clear"></div>

											<div class="col-sm-12 col-md-12">

												<div class="form-group bootstrap3-wysihtml5-wrapper">
													<label>About me</label>
													<textarea name="about" class="bootstrap3-wysihtml5 form-control" placeholder="Enter your short description ..." style="height: 200px;"><?php echo "$mydesc"; ?></textarea>
												</div>

											</div>

											<div class="clear"></div>

											<div class="col-sm-12 mt-10">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Update</button>
												<button type="reset" class="btn btn-primary btn-inverse">Cancel</button>
											</div>
											<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog">


													<h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Password</h1>


													<div class="modal-body">
														<input class="form-control" type="hidden" id="oldpass" value="<?php echo "$mypass" ?>">
														<input class="form-control" type="password" id="cpass" placeholder="Enter your password">

														<script>
															function check() {

																var a = document.getElementById('oldpass').value;
																var b = document.getElementById('cpass').value;
																if (a === b) {
																	document.forms[0].submit();
																} else {
																	alert('Incorrect password');
																}
															}
														</script>
													</div>

													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary" onclick="check()">Save changes</button>
												</div>
											</div>

										</div>

									</form><br>

									<form action="app/new-dp.php" method="POST" enctype="multipart/form-data">
										<div class="row gap-20">
											<div class="col-sm-12 col-md-12">

												<div class="form-group bootstrap3-wysihtml5-wrapper">
													<label>Display Image</label>
													<input accept="image/*" type="file" name="image" required>
												</div>

											</div>

											<div class="clear"></div>

											<div class="col-sm-12 mt-10">
												<button type="submit" class="btn btn-primary">Update</button>
												<?php
												if ($myavatar == null) {
												} else {
												?><a onclick="return confirm('Are you sure you want to delete your avatar ?')" class="btn btn-primary btn-inverse" href="app/drop-dp.php">Delete</a> <?php
													}
													?>
											</div>
										</div>
									</form>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<footer class="footer-wrapper">

				<div class="main-footer">

					<div class="container">

						<div class="row">

							<div class="col-sm-12 col-md-9">

								<div class="row">

									<div class="col-sm-6 col-md-4">

										<div class="footer-about-us">
											<h5 class="footer-title">About Handy Hunt</h5>
											<p>Handy Hunt is a job portal, online job management system developed by handyhunt group for capstone in 2022.</p>

										</div>

									</div>

									<div class="col-sm-6 col-md-5 mt-30-xs">
										<h5 class="footer-title">Quick Links</h5>
										<ul class="footer-menu clearfix">
											<li><a href="./">Home</a></li>
											<li><a href="job-list.php">Job List</a></li>
											<li><a href="employers.php">Company</a></li>
											<li><a href="employees.php">Applicant</a></li>
											<li><a href="contact.php">Contact Us</a></li>
											<li><a href="#">Go to top</a></li>

										</ul>

									</div>

								</div>

							</div>

							<div class="col-sm-12 col-md-3 mt-30-sm">

								<h5 class="footer-title">Handy Hunt Contact</h5>

								<p>Address : University of Caloocan City, Congressional Campus</p>
								<p>Email : <a href="mailto:nightingale.nath2@gmail.com">handyhunt@gmail.com</a></p>
								<p>Phone : <a href="tel:+233546607474">09101493778</a></p>


							</div>


						</div>

					</div>

				</div>

				<div class="bottom-footer">

				</div>

			</footer>

		</div>

	</div>



	<div id="back-to-top">
		<a href="#"><i class="ion-ios-arrow-up"></i></a>
	</div>


	<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
	<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
	<script type="text/javascript" src="../js/smoothscroll.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
	<script type="text/javascript" src="../js/wow.min.js"></script>
	<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
	<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
	<script type="text/javascript" src="../js/typeahead.bundle.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap3-wysihtml5.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="../js/jquery-filestyle.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap-select.js"></script>
	<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
	<script type="text/javascript" src="../js/handlebars.min.js"></script>
	<script type="text/javascript" src="../js/jquery.countimator.js"></script>
	<script type="text/javascript" src="../js/jquery.countimator.wheel.js"></script>
	<script type="text/javascript" src="../js/slick.min.js"></script>
	<script type="text/javascript" src="../js/easy-ticker.js"></script>
	<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
	<script type="text/javascript" src="../js/jquery.responsivegrid.js"></script>
	<script type="text/javascript" src="../js/customs.js"></script>


</body>



</html>