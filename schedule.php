<!DOCTYPE html>
<html lang="en">

<?php include 'shared/header.php' ?>

<body>
	
<?php include 'shared/sidebar.php' ?>
	
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
					<h1>Schedule</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Schedule</a>
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



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Schedule</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
			
					</div>
					<table>
						<thead>
							<tr>
								<th>Date</th>
								<th>Patient Name</th>
								<th>Time</th>
								<th>Assigned Nurse</th>
								<th>Set</th>
								<th>Edit</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>04-25-2023</td>
								<td>
									<!--<img src="C:\Users\pc\OneDrive\Documents\acadzzz - 4th year\Green Breeze Admin Website\grandmapic.jpeg">-->
									<p>Maria Dela Cruz</p>
								</td>
								<td>12:30 PM</td>
								<td>Nuse AJ Concepcion</td>
								<td><span class="status completed">Set 1 6/6</span></td>
								<td><i class='bx bx-edit-alt' ></i></td>
							</tr>
							<tr>
								<td>04-25-2023</td>
								<td>
									<!--<img src="C:\Users\pc\OneDrive\Documents\acadzzz - 4th year\Green Breeze Admin Website\grandmapic.jpeg">-->
									<p>Maritez Concepcion</p>
								</td>
								<td>12:30 PM</td>
								<td>Nuse AJ Concepcion</td>
								<td><span class="status process">Set 1 3/6</span></td>
								<td><i class='bx bx-edit-alt' ></i></td>
							</tr>
							<tr>
								<td>04-25-2023</td>
								<td>
									<!--<img src="C:\Users\pc\OneDrive\Documents\acadzzz - 4th year\Green Breeze Admin Website\grandmapic.jpeg">-->
									<p>Rosalina Manuel</p>
								</td>
								<td>12:30 PM</td>
								<td>Nuse AJ Concepcion</td>
								<td><span class="status pending">Set 1 0/6</span></td>
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
