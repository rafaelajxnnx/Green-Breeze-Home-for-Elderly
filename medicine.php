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
					<h1>Medicine</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Medicine</a>
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
						<h3>Assigned List of Medication</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
                        <i class='bx bx-plus' ></i>
			
					</div>
					<table>
						<thead>
							<tr>
								<th>Drug Name</th>
								<th>Company Brand</th>
								<th>Condition</th>
								<th>Remaining</th>
                                <th>Assigned Patients</th>
                                <th>Edit</th>
							</tr>
						</thead>
						<tbody>
							<tr>
                                <td>Paracetamol</td>
								<td>Biogesic</td>
								<td>treat pain <br> reduce a high temperature (fever)</td>
								<td>89 tablets</td>
                                <td>8 Patients</td>
                                <td><i class='bx bx-edit-alt' ></i></td>
							</tr>
                            <tr>
                                <td>Butamirate citrate</td>
								<td>Sinecod Forte</td>
								<td>dry cough</td>
								<td>2 bottles</td>
                                <td>3 Patients</td>
                                <td><i class='bx bx-edit-alt' ></i></td>
							</tr>
                            <tr>
                                <td>Paracetamol</td>
								<td>RiteMed</td>
								<td>treat pain <br> reduce a high temperature (fever)</td>
								<td>40 tablets</td>
                                <td>9 Patients</td>
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
