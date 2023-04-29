<!DOCTYPE html>
<html lang="en">

<?php include 'shared/header.php' ?>

<body>

<?php include 'shared/sidebar.php'?>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<!---<a href="#" class="nav-link">Categories</a> --->
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<!--<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>-->
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/headnursepic.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Nurses</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Nurses</a>
						</li>
						<!--<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>-->
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of Nurses</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
                        <i class='bx bx-plus' ></i>
			
					</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Mobile No.</th>
								<th>Email Address</th>
								<th>Gender</th>
								<th>Scheduled Day</th>
                                <th>Scheduled Time</th>
                                <th>Room</th>
                                <th>Edit</th>
							</tr>
						</thead>
						<tbody>
							<tr>
                                <td>
									<img src="img/nurseJanna.png">
									<p>Rafaela Janna Babaran</p>
								</td>
								<td>09669872494</td>
								<td>rafaelajanna@greenbreeze.com</td>
								<td>Female</td>
                                <td>M W F</td>
                                <td>6:00 AM - 6:00 PM</td>
                                <td>Room #4</td>
                                <td><i class='bx bx-edit-alt' ></i></td>
							</tr>
                            <tr>
                                <td>
									<img src="img/nurseJosche.png">
									<p>Josche Rendon</p>
								</td>
								<td>09668975142</td>
								<td>joscherendon@greenbreeze.com</td>
								<td>Female</td>
                                <td>M W F</td>
                                <td>6:00 AM - 6:00 PM</td>
                                <td>Room #4</td>
                                <td><i class='bx bx-edit-alt' ></i></td>
							</tr>
                            <tr>
                                <td>
									<img src="img/nurseJen.jpg">
									<p>Jennyline Vasquez</p>
								</td>
								<td>09669872494</td>
								<td>jenvasquez@greenbreeze.com</td>
								<td>Female</td>
                                <td>M W F</td>
                                <td>6:00 AM - 6:00 PM</td>
                                <td>Room #6</td>
                                <td><i class='bx bx-edit-alt' ></i></td>
							</tr>
                            <tr>
                                <td>
									<img src="img/nurseJemina.png">
									<p>Jemina Keith Fernandez</p>
								</td>
								<td>09668975142</td>
								<td>jeminafernandez@greenbreeze.com</td>
								<td>Female</td>
                                <td>M W F</td>
                                <td>6:00 AM - 6:00 PM</td>
                                <td>Room #5</td>
                                <td><i class='bx bx-edit-alt' ></i></td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script/script.js"></script>

</body>
</html>
