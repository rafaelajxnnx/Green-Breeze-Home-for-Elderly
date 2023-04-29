<!DOCTYPE html>
<html lang="en">

<?php include 'shared/header.php' ?>

<body>

<?php include 'shared/sidebar.php' ?>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
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
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>125</h3>
						<p>COMPLETED</p>
					</span>
				</li>
				<li>
					<i class='bx bx-loader-circle' ></i>
					<span class="text">
						<h3>12</h3>
						<p>ON PROGRESS</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-error' ></i>
					<span class="text">
						<h3>3</h3>
						<p>FAILED</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Progress</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
			
					</div>
					<table>
						<thead>
							<tr>
								<th>Date</th>
								<th>Patient Name</th>
								<th>Medication</th>
								<th>Assigned Nurse</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>01-10-2021</td>
								<td>
									<!--<img src="C:\Users\pc\OneDrive\Documents\acadzzz - 4th year\Green Breeze Admin Website\grandmapic.jpeg">-->
									<p>Jane Doe</p>
								</td>
								<td>RENVELA: Sevelemer or Sevelamer Carbonate</td>
								<td>Nuse AJ Concepcion</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>01-10-2021</td>
								<td>
									<!--<img src="C:\Users\pc\OneDrive\Documents\acadzzz - 4th year\Green Breeze Admin Website\grandmapic.jpeg">-->
									<p>Jane Doe</p>
								</td>
								<td>RENVELA: Sevelemer or Sevelamer Carbonate</td>
								<td>Nuse AJ Concepcion</td>
								<td><span class="status pending">Failed</span></td>
							</tr>
							<tr>
								<td>01-10-2021</td>
								<td>
									<!--<img src="C:\Users\pc\OneDrive\Documents\acadzzz - 4th year\Green Breeze Admin Website\grandmapic.jpeg">-->
									<p>Jane Doe</p>
								</td>
								<td>RENVELA: Sevelemer or Sevelamer Carbonate</td>
								<td>Nuse AJ Concepcion</td>
								<td><span class="status process">On Progress</span></td>
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
