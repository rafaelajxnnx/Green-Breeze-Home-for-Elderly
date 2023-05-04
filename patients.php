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
					<h1>Patients</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Patients</a>
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
						<h3>List of Patients</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
                        <i class='bx bx-plus' ></i>
			
					</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Age</th>
								<th>Gender</th>
								<th>Total Meds per week</th>
								<th>Remaining Meds to take</th>
                                <th>Assigned Nurse</th>
                                <th>Room</th>
                                <th>Edit</th>
							</tr>
						</thead>
						<tbody>
							<tr>
                                <td>
									<img src="img/grandmapic.jpeg">
									<p>Jane Doe</p>
								</td>
								<td>89</td>
								<td>Female</td>
								<td>42 Medications</td>
                                <td>30 Remaining</td>
                                <td>Nurse Rafaela Janna Babaran</td>
                                <td>Room #4</td>
                                <td><i class='bx bx-edit-alt' ></i></td>
							</tr>
                            <tr>
                                <td>
									<img src="img/grandmapic.jpeg">
									<p>Jane Doe</p>
								</td>
								<td>89</td>
								<td>Female</td>
								<td>42 Medications</td>
                                <td>30 Remaining</td>
                                <td>Nurse Rafaela Janna Babaran</td>
                                <td>Room #4</td>
                                <td><i class='bx bx-edit-alt' ></i></td>
							</tr>
                            <tr>
                                <td>
									<img src="img/grandmapic.jpeg">
									<p>Jane Doe</p>
								</td>
								<td>89</td>
								<td>Female</td>
								<td>42 Medications</td>
                                <td>30 Remaining</td>
                                <td>Nurse Rafaela Janna Babaran</td>
                                <td>Room #4</td>
                                <td><i class='bx bx-edit-alt' ></i></td>
							</tr>
                            <tr>
                                <td>
									<img src="img/grandmapic.jpeg">
									<p>Jane Doe</p>
								</td>
								<td>89</td>
								<td>Female</td>
								<td>42 Medications</td>
                                <td>30 Remaining</td>
                                <td>Nurse Rafaela Janna Babaran</td>
                                <td>Room #4</td>
                                <td><i class='bx bx-edit-alt' ></i></td>
							</tr>
                            <tr>
                                <td>
									<img src="img/grandmapic.jpeg">
									<p>Jane Doe</p>
								</td>
								<td>89</td>
								<td>Female</td>
								<td>42 Medications</td>
                                <td>30 Remaining</td>
                                <td>Nurse Rafaela Janna Babaran</td>
                                <td>Room #4</td>
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
