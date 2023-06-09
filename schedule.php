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
			top: 0%;
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
			height: 90%;
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
			font-size: 10px;
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
			font-size: 10px;
			border-radius: 10px;
			float: left;

		}

		.modal-content .three-rows input {
			font-family: FontAwesome, "Poppins", sans-serif;
			background: #f2f2f2;
			width: 30%;
			border: 0;
			margin: 0 5px 10px;
			padding: 10px;
			box-sizing: border-box;
			font-size: 10px;
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
			font-size: 10px;
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
			font-size: 10px;
		}

		.dropdown-content option:hover {
			background-color: #f1f1f1
		}

		.dropdown-content {
			display: block;
		}

		.modal-content button {
			font-family: "Poppins", sans-serif;
			font-size: 10px;
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
			font-size: 10px;
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
			font-size: 10px;
		}

		.dropdown-content option:hover {
			background-color: #f1f1f1
		}

		.dropdown-content {
			display: block;
		}

		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}

		.onprogress {
			background: var(--yellow);
			color: #fff;
			padding: 5px 10px;
			border-radius: 20px;
			font-size: 10px;
			font-weight: bold;
			text-transform: uppercase;
			letter-spacing: 1px;
			/* Add more styles as needed */
		}

		.onsucess {
			background: var(--blue);
			color: #fff;
			padding: 5px 10px;
			border-radius: 20px;
			font-size: 10px;
			font-weight: bold;
			text-transform: uppercase;
			letter-spacing: 1px;
			/* Add more styles as needed */
		}

		/* Add this CSS for the modal */
		.modalDelete {
			display: none;
			/* Hide the modal by default */
			position: fixed;
			z-index: 9999;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgba(0, 0, 0, 0.4);
			/* Semi-transparent background */
		}

		.modal-contentDelete {
			background-color: var(--light);
			margin: 15% auto;
			padding: 20px;
			border: 1px solid #888;
			width: 320px;
			height: 190px;
			border-radius: 20px;
		}

		.closeDelete {
			color: #aaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.closeDelete:hover,
		.closeDelete:focus {
			color: black;
			text-decoration: none;
			cursor: pointer;
		}

		#passwordInput {
			margin-bottom: 10px;
			width: 100%;
			padding: 8px;
			font-size: 16px;
		}

		#confirmButton {
			font-family: "Poppins", sans-serif;
			font-size: 14px;
			font-weight: bold;
			letter-spacing: .1em;
			outline: 0;
			background: #3C91E6;
			width: 50%;
			border: 0;
			border-radius: 30px;
			margin: 10px 0px 10px;
			padding: 5px;
			color: #FFFFFF;
			-webkit-transition: all 0.3 ease;
			transition: all 0.3 ease;
			cursor: pointer;
			transition: all 0.2s;
			float: left;


		}

		#confirmButton:hover,
		#confirmButton:focus {
			background: #2167ad;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
			transform: translateY(-4px);
		}

		#confirmButton:active {
			transform: translateY(2px);
			box-shadow: 0 2.5px 5px rgba(0, 0, 0, 0.2);
		}
		/* #confirmButton {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			cursor: pointer;
		}

		#confirmButton:hover {
			background-color: #45a049;
		} */
	</style>
</header>

<body>

	<?php include 'shared/sidebar.php' ?>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<!--<i class='bx bx-menu'></i>-->
			<!---<a href="#" class="nav-link">Categories</a> --->
			<form action="#">
				<div class="form-input">
					<input type="search" id="search-bar" onkeyup="searchTable()" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>

			<!--<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>-->

			<a  href="#">
                <p style ="font-family: FontAwesome, 'Poppins', sans-serif; font-weight:bold" id="displayName"></p>
            </a>
            <a href="#" class="profile">
                <img id="profilePic" src="">
            </a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>All Schedule</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Schedule Information</a>
						</li>
						<!--<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>-->
					</ul>
				</div>
				<a href="#" class="btn-download" id="downloadButton">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Download PDF</span>
				</a>
			</div>



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Schedule</h3>
						<!--<i class='bx bx-search'></i>-->
						<i class='bx bx-filter'></i>
						<i id="add-schedule" class='bx bx-plus'></i>
						<!-- The Modal -->
						<div id="myModal" class="modal">

							<!-- Modal content -->
							<div class="modal-content">

								<span class="close">&times;</span>

								<form class="form">
									<h3>Add New Schedule</h3>
									<input type="text" name="status" id="status" placeholder="status" hidden />
									<!-- <div class="direction">
										
									</div> -->
									<p  style="font-size:10px; font-style:bold;">Start Time and Date</p>
									<div class="two-rows" style="margin:0;padding:0">
										<!--<select class="dropbtn" onChange="dropdownTip()" id="select" name="time"
											style="margin-right:10px; margin-top:2px; width:30%;">
											<div class="dropdown-content">
												<option selected="selected" value="6:00 AM">6:00 AM</option>
												<option value="7:00 AM">7:00 AM</option>
												<option value="8:00 AM">8:00 AM</option>
												<option value="9:00 AM">9:00 AM</option>
											</div>
											
										</select>-->

										<!--<label for="alarm-input">Set Alarm:</label>-->
										<input type="time" name="time1" id="time1">
										<!--<button id="set-alarm-button">Set</button>-->

										<input type="date" name="date1" id="date1" />
									</div>
									<br>
									<br>
									<p  style="font-size:10px; font-style:bold;">End Time and Date</p>
									<div class="two-rows" style="margin:0;padding:0">

										<!--<label for="alarm-input">Set Alarm:</label>-->
										<input type="time" name="time2" id="time2">
										<!--<button id="set-alarm-button">Set</button>-->

										<input type="date" name="date2" id="date2" />
									</div>

									<div class="two-rows" style="margin:0;padding:0">
										<!--<select class="dropbtn" onChange="dropdownTip()" id="select" name="time"
											style="margin-right:10px; margin-top:2px; width:30%;">
											<div class="dropdown-content">
												<option selected="selected" value="6:00 AM">6:00 AM</option>
												<option value="7:00 AM">7:00 AM</option>
												<option value="8:00 AM">8:00 AM</option>
												<option value="9:00 AM">9:00 AM</option>
											</div>
											
										</select>-->

										<!--<label for="alarm-input">Set Alarm:</label>-->
										<select class="dropbtn" id="duration" required name="duration">
											<div class="dropdown-content">
												<option value="0">Select Duration</option>
												<option value="daily">Daily</option>
												<option value="weekly">Weekly</option>
												<option value="monthly">Monthly</option>
											</div>
										</select>
										<!--<button id="set-alarm-button">Set</button>-->

										<select class="dropbtn" id="interval" required name="interval">
											<div class="dropdown-content">
												<option value="0">Select Interval</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>

											</div>
										</select>
									</div>
									<br>
									<br>
									<br>
									<br>
									<p style="font-size:10px; font-style:bold;">Choose Assigned Patient and Nurse</p>
									<div class="two-rows" style="margin:0;padding:0">

										<!--<p>Assigned Nurse</p>-->

										<!--<p>Patient</p>-->

										<select class="dropbtn" name="patientId" id="patientId"></select>
										<select class="dropbtn" name="nurseId" id="nurseId"></select>

									</div>
									<div class="three-rows" style="margin:0;padding:0">
										<select style="width:30%;" class="dropbtn" name="medicineId" id="medicineId">
										</select>
										<input type="text" name="quantity" id="quantity" placeholder="Quantity" />
										<select class="dropbtn" id="dosage" name="dosage"
											style="margin-right:10px; margin-top:2px; width:30%;">
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
					<table id="myTable">
						<thead>
							<tr>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Interval</th>
								<th>Patient Name</th>
								<th>Assigned Nurse</th>
								<th>Medicine</th>
								<th>Status</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<!--<tr>
								<td>04-25-2023</td>
								<td>
									<img src="C:\Users\pc\OneDrive\Documents\acadzzz - 4th year\Green Breeze Admin Website\grandmapic.jpeg">
									<p>Maria Dela Cruz</p>
								</td>
								<td>12:30 PM</td>
								<td>Nuse AJ Concepcion</td>
								<td><span class="status completed">Set 1 6/6</span></td>
								<td><i class='bx bx-edit-alt'></i></td>
							</tr>-->
							<tr>

							</tr>
						</tbody>
					</table>

					<div id="passwordModal" class="modalDelete">
						<div class="modal-contentDelete">
							<span class="closeDelete">&times;</span>
							<h4>Are you sure to delete this Schedule?</h4>
							<p>Enter Password</p>
							<input type="password" id="passwordInput" placeholder="Password">
							<button id="confirmButton">Confirm</button>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="script/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
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
		//function dropdownTip() {
		//	var value = document.getElementById('select').value;
		//document.getElementByID("result").innerHTML = value;
		//}

		//JavaScript to retrieve and display the PROFILE PIC
        const profilePicElement = document.getElementById("profilePic");
        const displayNameElement = document.getElementById("displayName");

        fetch("https://rafaelajxnnxx-001-site1.ftempurl.com/api/User/GetUser/2")
            .then(response => response.json())
            .then(data => {
                const baseUrl = "https://rafaelajxnnxx-001-site1.ftempurl.com/";
                const profilePicUrl = baseUrl + data.profilePicPath; // Assuming the API response contains the profile picture URL
                const displayName = data.firstName + " " + data.lastName;

                profilePicElement.src = profilePicUrl;
                displayNameElement.textContent = displayName;
            })
            .catch(error => {
                console.error("Error fetching profile picture:", error);
            });

		// Retrieve data from the database and populate the dropdown
		fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Nurse/GetAllNurse')
			.then(response => {
				if (response.ok) {
					return response.json();
				} else {
					throw new Error('Network response was not ok');
				}
			})
			.then(data => {
				console.log('Data received from server:', data);

				//Get the dropdown element
				const dropdown = document.getElementById('nurseId');

				// Populate the dropdown with the retrieved data
				data.forEach(item => {
					//debugger
					const option = document.createElement('option');

					option.textContent = item.firstName + " " + item.lastName + " - " + item.shift + "(Room No." + item.roomId + ")";
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
		fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Patient/GetAllPatient')
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
				const dropdown = document.getElementById('patientId');

				// Populate the dropdown with the retrieved data
				data.forEach(item => {
					const option = document.createElement('option');
					option.textContent = item.firstName + " " + item.lastName + "(Room No." + item.roomId + ")";
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
		fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Medicine/GetAllMedicine')
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
				const dropdown = document.getElementById('medicineId');

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

			//const formdata = new FormData(addScheduleformEl);
			//const data = Object.fromEntries(formdata);

			// Get the date and time values from the input fields
			//var status = document.getElementById('status').value = "false";
			var nurseValue = document.getElementById('nurseId').value;
			var patientValue = document.getElementById('patientId').value;
			var medicineValue = document.getElementById('medicineId').value;
			var quantityValue = document.getElementById('quantity').value;
			var dosageValue = document.getElementById('dosage').value;
			var interval = document.getElementById('interval').value;
			var duration = document.getElementById('duration').value;


			var dateValue1 = document.getElementById('date1').value;
			var timeValue1 = document.getElementById('time1').value;

			var dateValue2 = document.getElementById('date2').value;
			var timeValue2 = document.getElementById('time2').value;



			// Split the date value into year, month, and day
			var [year, month, day] = dateValue1.split('-');

			// Split the time value into hours and minutes
			var [hours, minutes] = timeValue1.split(':');

			// Create a new Date object with the corrected date and time values
			var dateTimeObject1 = new Date(year, month - 1, day, hours, minutes, 0);
			console.log(dateTimeObject1);


			// Format the date and time as a string in the desired format
			var utcString1 = dateTimeObject1.toISOString().split('T')[0] + 'T' + dateTimeObject1.toTimeString().split(' ')[0];
			console.log(utcString1);

			// Split the date value into year, month, and day
			[year, month, day] = dateValue2.split('-');

			// Split the time value into hours and minutes
			[hours, minutes] = timeValue2.split(':');

			// Create a new Date object with the corrected date and time values
			var dateTimeObject2 = new Date(year, month - 1, day, hours, minutes, 0);
			console.log(dateTimeObject2);


			// Format the date and time as a string in the desired format
			var utcString2 = dateTimeObject2.toISOString().split('T')[0] + 'T' + dateTimeObject2.toTimeString().split(' ')[0];
			console.log(utcString2);

			// Create an object to send via AJAX
			var data = {
				status: false,
				nurseId: nurseValue,
				patientId: patientValue,
				medicineId: medicineValue,
				quantity: quantityValue,
				dosage: dosageValue,
				startDateTime: utcString1,
				endDateTime: utcString2,

				interval: interval,
				duration: duration
			};

			console.log(data);

			fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Schedule/insertNew', {
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
					window.location.replace("schedule.php");

				})
				.catch(error => console.log(error));

		});















		//GET data
		// JavaScript to retrieve and display the data
		fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Schedule/GetAllSchedule')
			.then(response => {
				if (response.ok) {
					return response.json();
				} else {
					throw new Error('Network response was not ok');

				}
			})
			.then(data => {
				// Select the table body element
				//debugger


				console.log('Data received from server:', data);
				const tableBody = document.querySelector('#myTable tbody');
				//const tableHistoryBody = document.querySelector('#myHistoryTable tbody');
				console.log('Table body element:', tableBody);

				// Create a row for each item in the data array
				data.forEach(item => {
					console.log('Current item:', item);



					const row = tableBody.insertRow();

					// Create cells for the name and age columns
					const dateStart = row.insertCell();
					const dateEnd = row.insertCell();
					const interval = row.insertCell();
					const patient = row.insertCell();
					const nurse = row.insertCell();
					const medicine = row.insertCell();
					const status = row.insertCell();
					// const edit = row.insertCell();
					const del = row.insertCell();
					const dets = row.insertCell();



					// Set the text content of the cells to the item's values
					dateStart.textContent = formatDate(item.startDateTime);
					dateEnd.textContent = formatDate(item.endDateTime);

					interval.textContent = item.interval + " hrs";


					// Create an edit icon element
					// const editIcon = document.createElement('i');
					// editIcon.classList.add('bx', 'bx-edit-alt');

					// Create a delete icon element
					const deleteIcon = document.createElement('i');
					deleteIcon.classList.add('bx', 'bx-trash');

					const detailsIcon = document.createElement('i');
					detailsIcon.classList.add('bx', 'bx-detail');


					var editmodal = document.getElementById("editModal");
					var editspan = document.getElementsByClassName("editclose")[0];

					// Fetch Nurse details based on NurseId
					fetch(`https://rafaelajxnnxx-001-site1.ftempurl.com/api/Medicine/GetMedicine/${item.medicineId}`)
						.then(response => {
							if (response.ok) {
								return response.json();
							} else {
								throw new Error('Network response was not ok');
							}
						})
						.then(medicineData => {
							// Set the text content of the nurse cell to the nurse's first name and last name
							medicine.textContent = `${medicineData.drugName}`;
						})
						.catch(error => {
							console.error('Error while fetching Nurse:', error);
						});

					// Fetch Nurse details based on NurseId
					fetch(`https://rafaelajxnnxx-001-site1.ftempurl.com/api/Nurse/GetNurse/${item.nurseId}`)
						.then(response => {
							if (response.ok) {
								return response.json();
							} else {
								throw new Error('Network response was not ok');
							}
						})
						.then(nurseData => {
							// Set the text content of the nurse cell to the nurse's first name and last name
							nurse.textContent = `${nurseData.firstName} ${nurseData.lastName}`;
						})
						.catch(error => {
							console.error('Error while fetching Nurse:', error);
						});

					// Fetch Patient details based on PatientId
					fetch(`https://rafaelajxnnxx-001-site1.ftempurl.com/api/Patient/GetPatient/${item.patientId}`)
						.then(response => {
							if (response.ok) {
								return response.json();
							} else {
								throw new Error('Network response was not ok');
							}
						})
						.then(patientData => {
							// Set the text content of the patient cell to the patient's first name and last name
							patient.textContent = `${patientData.firstName} ${patientData.lastName}`;
						})
						.catch(error => {
							console.error('Error while fetching Patient:', error);
						});

					// Set the text content of the status cell

					if (item.status === false) {
						const statusSpan = document.createElement('span');
						statusSpan.textContent = 'Pending';
						statusSpan.classList.add('onprogress'); // Apply the CSS class

						status.appendChild(statusSpan);
					} else {
						const statusSpan = document.createElement('span');
						statusSpan.textContent = 'Done';
						statusSpan.classList.add('onsucess'); // Apply the CSS class

						status.appendChild(statusSpan);
					}

					//
					fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Schedule/GetScheduleDetails/' + item.id)
						.then(response => {
							if (response.ok) {
								return response.json();
							} else {
								throw new Error('Network response was not ok');
							}
						})
						.then(data => {
							//console.log('NEW Data received from server:', data);

							const dataLength = data.length;
							//console.log('Number of data items:', dataLength);

							// Count the number of items with status = true
							const trueStatusCount = data.filter(item => item.status === true).length;

							// Check if the number of true status items is equal to the length of data
							if (trueStatusCount === dataLength) {
								console.log('All items have status = true');

								// Prepare the data to be sent in the request
								console.log('id' + item.id)

								//Make a POST request to update the schedule statuses
								let ids = [item.id];
								fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Schedule/SaveDetailsAndUpdateStatus', {
									method: 'POST',
									headers: {
										'Content-Type': 'application/json'
									},
									body: JSON.stringify(ids)
								})
									.then(response => {
										if (response.ok) {
											console.log('Status updated successfully.');
											// Additional logic for successful status update goes here
										} else {
											console.log('Failed to update status on ' + item.id + ' because it is already DONE');
											// Additional logic for failed status update goes here
										}
									})
									.catch(error => {
										console.error('Error:', error);
									});


							} else {
								console.log('Not all items have status = true');
								// Do something else if not all items have status = true
							}
						})
						.catch(error => {
							console.error('Error:', error);
						});




					//DELETE event when delete button is clicked
					// deleteIcon.addEventListener('click', () => {
					// 	// Handle the delete icon click event here
					// 	console.log(`Deleting item with ID ${item.id}`);

					// 	//const itemId = deleteIcon.parentNode.parentNode.dataset.itemId;

					// 	// Send a DELETE request to the server
					// 	fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Schedule/DeleteSchedule/' + item.id, {
					// 		method: 'DELETE'
					// 	})
					// 		.then(response => {
					// 			if (!response.ok) {
					// 				throw new Error('Network response was not ok');
					// 			}
					// 			return response.json();
					// 		})
					// 		.then(data => {
					// 			console.log('Item deleted:', data);
					// 			// Remove the deleted row from the table
					// 			deleteIcon.parentNode.parentNode.remove();

					// 		})
					// 		.catch(error => {
					// 			console.error('Error deleting item:', error);
					// 		});


					// });

					deleteIcon.addEventListener('click', () => {
						// Show the password modal
						const modal = document.getElementById('passwordModal');
						modal.style.display = 'block';

						// Get the password input and confirm button from the modal
						const passwordInput = document.getElementById('passwordInput');
						const confirmButton = document.getElementById('confirmButton');

						// Function to handle the confirm button click event
						const confirmDelete = () => {
							// Get the entered password
							const password = passwordInput.value;

							// Check if the password is correct
							if (password === 'Pass123!') {
								console.log(`Deleting item with ID ${item.id}`);

								fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Schedule/DeleteSchedule/' + item.id, {
									method: 'DELETE'
								})
									.then(response => {
										if (!response.ok) {
											throw new Error('Network response was not ok');
										}
										return response.json();
									})
									.then(data => {
										console.log('Item deleted:', data);
										deleteIcon.parentNode.parentNode.remove();
									})
									.catch(error => {
										console.error('Error deleting item:', error);
									});

								// Hide the password modal
								modal.style.display = 'none';
							} else {
								// Incorrect password, display an error message or take other actions
								console.error('Incorrect password. Deletion canceled.');
								// You can display an error message or perform any other desired actions here
							}
						};

						// Add event listener to the confirm button
						confirmButton.addEventListener('click', confirmDelete);

						// Function to handle the close button click event
						const closeModal = () => {
							// Hide the password modal
							modal.style.display = 'none';

							// Remove event listener from the confirm button
							confirmButton.removeEventListener('click', confirmDelete);
						};

						// Get the close button from the modal
						const closeButton = document.getElementsByClassName('closeDelete')[0];

						// Add event listener to the close button
						closeButton.addEventListener('click', closeModal);
					});


					//DELETE event when delete button is clicked
					detailsIcon.addEventListener('click', () => {
						// Handle the delete icon click event here
						console.log(`details showing in item with ID ${item.id}`);

						window.location.replace("scheduleDetails.php");
						const scheduleId = item.id; // Replace with the actual Schedule ID from your previous page
						const url = `scheduleDetails.php?id=${scheduleId}`;
						window.location.href = url;


					});

					// Append the edit icon element to the edit cell
					// edit.appendChild(editIcon);
					del.appendChild(deleteIcon);
					dets.appendChild(detailsIcon);
				});
			})
			.catch(error => {
				console.error('Error:', error);
			});


		function formatDate(dateString) {
			const date = new Date(dateString);
			const month = date.toLocaleString('default', { month: 'long' });
			const day = date.getDate();
			const year = date.getFullYear();

			return `${month} ${day}, ${year}`;
		}
		function formatTime(timeString) {
			const dateTime = new Date(timeString);
			const hours = dateTime.getHours();
			const minutes = dateTime.getMinutes();
			const seconds = dateTime.getSeconds();

			// Determine if it is AM or PM
			const period = hours >= 12 ? 'PM' : 'AM';

			// Convert hours to 12-hour format
			const formattedHours = hours % 12 === 0 ? 12 : hours % 12;

			// Add leading zeros if the values are less than 10
			const formattedMinutes = (minutes < 10 ? "0" : "") + minutes;
			const formattedSeconds = (seconds < 10 ? "0" : "") + seconds;

			return `${formattedHours}:${formattedMinutes} ${period}`;
		}


		window.jsPDF = window.jspdf.jsPDF;

		// Function to convert table to PDF
		function convertToPDF() {

			const table = document.getElementById("myTable");
			html2canvas(table).then(canvas => {
				const tableImage = canvas.toDataURL("image/png");

				const imgWidth = 190; // Desired width in PDF units
				const imgHeight = (canvas.height * imgWidth) / canvas.width; // Calculate height based on aspect ratio

				const pdf = new jsPDF();

				// Add company logo
				const logoImage = "img/Logo-illustrated.png";
				const logoWidth = 30; // Desired width of the logo in PDF units
				const logoHeight = 30; // Calculate height based on aspect ratio
				pdf.addImage(logoImage, "PNG", 10, 10, logoWidth, logoHeight);



				// Add additional title
				const additionalTitle = "Schedule Information Summary";
				const titleX = 50; // X-coordinate of the title
				const titleY = 25; // Y-coordinate of the title
				const fontColor = "#342E37"; // Font color (red)
				pdf.setFontSize(18);
				pdf.setTextColor(fontColor);
				pdf.setFont("helvetica", "bold");
				pdf.text(additionalTitle, titleX, titleY);

				// Add the table image
				pdf.addImage(tableImage, "PNG", 10, 40, imgWidth, imgHeight);

				pdf.save("ScheduleInformationSummary.pdf");
			});
		}
		// Attach event listener to download button
		const downloadButton = document.getElementById("downloadButton");
		downloadButton.addEventListener("click", convertToPDF);


		function searchTable() {
			var input, filter, table, tr, td1, td2, td3, td4, td5,td6,td7, i, txtValue1, txtValue2, txtValue3, txtValue4, txtValue5,txtValue6,txtValue7;
			input = document.getElementById("search-bar");
			filter = input.value.toUpperCase();
			table = document.getElementById("myTable");
			tr = table.getElementsByTagName("tr");

			for (i = 0; i < tr.length; i++) {
				td1 = tr[i].getElementsByTagName("td")[0];
				td2 = tr[i].getElementsByTagName("td")[1];
				td3 = tr[i].getElementsByTagName("td")[2];
				td4 = tr[i].getElementsByTagName("td")[3];
				td5 = tr[i].getElementsByTagName("td")[4];
				td6 = tr[i].getElementsByTagName("td")[5];
				td7 = tr[i].getElementsByTagName("td")[6];


				if (td1 && td2 && td3 && td4 && td5 && td6 && td7) {
					txtValue1 = td1.textContent || td1.innerText;
					txtValue2 = td2.textContent || td2.innerText;
					txtValue3 = td3.textContent || td3.innerText;
					txtValue4 = td4.textContent || td4.innerText;
					txtValue5 = td5.textContent || td5.innerText;
					txtValue6 = td6.textContent || td6.innerText;
					txtValue7 = td7.textContent || td7.innerText;



					if (txtValue1.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1 || txtValue3.toUpperCase().indexOf(filter) > -1 || txtValue4.toUpperCase().indexOf(filter) > -1 || txtValue5.toUpperCase().indexOf(filter) > -1 || txtValue6.toUpperCase().indexOf(filter) > -1 || txtValue7.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}




	</script>

</body>

</html>