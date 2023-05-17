<!DOCTYPE html>
<html lang="en">

<?php include 'shared/header.php' ?>
<header>
	<style>
		/* The Modal (background) */
		.modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			padding-top: 100px;
			/* Location of the box */
			top: 10%;
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */

			width: calc(100% - 280px);
			left: 280px;
			transition: .3s ease;

		}

		/* Modal Content */
		.modal-content {
			background: var(--light);
			margin: auto;
			padding: 20px;
			border: 1px solid #888;
			width: 80%;
			height: 65%;
			border-radius: 20px;
		}

		.modal-content .two-rows input {
			font-family: FontAwesome, "Poppins", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width: 45%;
			border: 0;
			margin: 0 5px 10px;
			padding: 10px;
			box-sizing: border-box;
			font-size: 14px;
			border-radius: 10px;
			float: left;

		}

		.modal-content .one-row input {
			font-family: FontAwesome, "Poppins", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width: 92%;
			border: 0;
			margin: 0 5px 10px;
			padding: 10px;
			box-sizing: border-box;
			font-size: 14px;
			border-radius: 10px;
			float: left;

		}

		/* The Close Button */
		.close {
			color: #aaaaaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}

		/*yung dropdown*/
		.dropbtn {
			font-family: FontAwesome, "Poppins", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width: 45%;
			border: 0;
			margin: 0 5px 10px;
			padding: 10px;
			box-sizing: border-box;
			font-size: 14px;
			border-radius: 10px;
			float: left;
		}


		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.dropdown-content option {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			font-size: 14px;
		}

		.dropdown-content option:hover {
			background-color: #f1f1f1
		}

		.dropdown-content {
			display: block;
		}

		.modal-content button {
			font-family: "Poppins", sans-serif;
			font-size: 14px;
			font-weight: bold;
			letter-spacing: .1em;
			outline: 0;
			background: #3C91E6;
			width: 20%;
			border: 0;
			border-radius: 30px;
			margin: 10px 0px 10px;
			padding: 10px;
			color: #FFFFFF;
			-webkit-transition: all 0.3 ease;
			transition: all 0.3 ease;
			cursor: pointer;
			transition: all 0.2s;
			float: left;


		}

		.modal-content button:hover,
		.form button:focus {
			background: #2167ad;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
			transform: translateY(-4px);
		}

		.modal-content button:active {
			transform: translateY(2px);
			box-shadow: 0 2.5px 5px rgba(0, 0, 0, 0.2);
		}

		.modal-content .three-rows input {
			font-family: FontAwesome, "Poppins", sans-serif;
			background: #f2f2f2;
			width: 30%;
			border: 0;
			margin: 0 5px 10px;
			padding: 8px;
			box-sizing: border-box;
			font-size: 12px;
			border-radius: 10px;
			float: left;


		}

		/*yung dropdown*/
		.dropbtn {
			font-family: FontAwesome, "Poppins", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width: 45%;
			border: 0;
			margin: 0 5px 10px;
			padding: 10px;
			box-sizing: border-box;
			font-size: 14px;
			border-radius: 10px;
			float: left;
		}


		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.dropdown-content option {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			font-size: 14px;
		}

		.dropdown-content option:hover {
			background-color: #f1f1f1
		}

		.dropdown-content {
			display: block;
		}
	</style>
</header>

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
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>

			<!--<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>-->

			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
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
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Download PDF</span>
				</a>
			</div>



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Schedule</h3>
						<i class='bx bx-search'></i>
						<i class='bx bx-filter'></i>
						<i id="add-schedule" class='bx bx-plus'></i>
						<!-- The Modal -->
						<div id="myModal" class="modal">

							<!-- Modal content -->
							<div class="modal-content">

								<span class="close">&times;</span>

								<form class="form">
									<h3>Add New Schedule</h3>
									<div class="two-rows" style="margin:0;padding:0">
										<input type="text" name="time" id="time" placeholder="Time" />
										<input type="date" name="date" id="Date" />
									</div>
									<div class="two-rows" style="margin:0;padding:0">
										<p>Assigned Nurse</p>
										<select name="nurseId" id="nurses"></select>
										<p>Patient</p>
										<select name ="patientId" id="patient"></select>
									</div>
									<div class="three-rows" style="margin:0;padding:0">
										<select name= "medicineId"id="medicine"></select>
										<input type="text" name="quantity" id="Quantity" placeholder="Quantity" />
										<select class="dropbtn" onChange="dropdownTip()" id="select" name="dosage"
											style="margin-right:10px; margin-top:2px;">
											<div class="dropdown-content">
												<option selected="selected" value="tbsp">tbsp</option>
												<option value="mg">mg</option>
												<option value="ml">ml</option>
												<option value="tsp">tsp</option>
											</div>
										</select>
									</div>



									<button type="submit">ADD</button>
								</form>
							</div>

						</div>

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
								<td><i class='bx bx-edit-alt'></i></td>
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
								<td><i class='bx bx-edit-alt'></i></td>
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
								<td><i class='bx bx-edit-alt'></i></td>
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
	<script>
		// sa modal
		var modal = document.getElementById("myModal");
		// Get the button that opens the modal
		var btn = document.getElementById("add-schedule");
		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];
		// When the user clicks the button, open the modal 
		btn.onclick = function () {
			modal.style.display = "block";
		}
		// When the user clicks on <span> (x), close the modal
		span.onclick = function () {
			modal.style.display = "none";
		}
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function (event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

		//para maselect yung napili sa dropdown DI PA SURE
		function dropdownTip() {
			var value = document.getElementById('select').value;
			//document.getElementByID("result").innerHTML = value;
		}
		
		// Retrieve data from the database and populate the dropdown
		fetch('https://localhost:7139/api/Nurse/GetAllNurse')
			.then(response => {
				if (response.ok) {
					return response.json();
				} else {
					throw new Error('Network response was not ok');
				}
			})
			.then(data => {
				console.log('Data received from server:', data);

				// Get the dropdown element
				const dropdown = document.getElementById('nurses');

				// Populate the dropdown with the retrieved data
				data.forEach(item => {
					const option = document.createElement('option');

					option.textContent = item.firstName + " " + item.lastName;
					option.value = item.id;
					dropdown.appendChild(option);

				});

				dropdown.addEventListener('change', function () {
				const selectedValue = this.value;
				console.log('Selected Value:', selectedValue);
			});
			})
			.catch(error => {
				console.error('Error:', error);
			});
		
			


		// Retrieve data from the database and populate the dropdown
		fetch('https://localhost:7139/api/Patient/GetAllPatient')
			.then(response => {
				if (response.ok) {
					return response.json();
				} else {
					throw new Error('Network response was not ok');
				}
			})
			.then(data => {
				console.log('Data received from server:', data);

				// Get the dropdown element
				const dropdown = document.getElementById('patient');

				// Populate the dropdown with the retrieved data
				data.forEach(item => {
					const option = document.createElement('option');
					option.textContent = item.firstName + " " + item.lastName;
					option.value = item.id;
					dropdown.appendChild(option);
				});
				dropdown.addEventListener('change', function () {
				const selectedValue = this.value;
				console.log('Selected Value:', selectedValue);
			});
			})
			.catch(error => {
				console.error('Error:', error);
			});

			

		// Retrieve data from the database and populate the dropdown
		fetch('https://localhost:7139/api/Medicine/GetAllMedicine')
			.then(response => {
				if (response.ok) {
					return response.json();
				} else {
					throw new Error('Network response was not ok');
				}
			})
			.then(data => {
				console.log('Data received from server:', data);

				// Get the dropdown element
				const dropdown = document.getElementById('medicine');

				// Populate the dropdown with the retrieved data
				data.forEach(item => {
					const option = document.createElement('option');
					option.textContent = item.drugName;
					option.value = item.id;
					dropdown.appendChild(option);
				});
				dropdown.addEventListener('change', function () {
				const selectedValue = this.value;
				console.log('Selected Value:', selectedValue);
			});
			})
			.catch(error => {
				console.error('Error:', error);
			});
			

			//inserting new data
		const addScheduleformEl = document.querySelector('.form')
		addScheduleformEl.addEventListener('submit', event => {
			event.preventDefault();

			const formdata = new FormData(addScheduleformEl);
			const data = Object.fromEntries(formdata);

			console.log(data);

			fetch('https://localhost:7139/api/Schedule/insertNew', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json'
				},
				body: JSON.stringify(data)
			})
				.then(res => {
					if (res.ok) {
						return res.json()
					}
					return res.text()
						.then(text => {
							throw new Error(text)
						})
				})
				.then(data => {
					if (data != null)
						console.log(data)
					window.location.replace("http://localhost/Green-Breeze-Home-for-Elderly/schedule.php");

				})
				.catch(error => console.log(error));

		});

	</script>

</body>

</html>