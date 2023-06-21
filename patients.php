<!DOCTYPE html>
<html lang="en">

<?php include 'shared/header.php' ?>
<header>
	<style>
		/* The Modal (background) */
		.modal,
		.hsaddmodal {
			font-family: FontAwesome, "Poppins", sans-serif;
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
		.modal-content,
		.hsaddmodal-content {
			background: var(--light);
			margin: auto;
			padding: 20px;
			border: 1px solid #888;
			width: 80%;
			height: 70%;
			border-radius: 20px;

		}

		.hsviewmodal {
			font-family: FontAwesome, "Poppins", sans-serif;
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
		.hsviewmodal-content {
			background: var(--light);
			margin: auto;
			padding: 20px;
			border: 1px solid #888;
			width: 80%;
			height: 80%;
			border-radius: 20px;

			overflow-y: auto;

		}



		.modal-content .two-rows input,
		.hsaddmodal-content .two-rows input {
			font-family: FontAwesome, "Poppins", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width: 45%;
			border: 0;
			margin: 0 5px 10px;
			padding: 8px;
			box-sizing: border-box;
			font-size: 12px;
			border-radius: 10px;
			float: left;

		}

		.modal-content .one-row input,
		.hsaddmodal-content .one-row input {
			font-family: FontAwesome, "Poppins", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width: 92%;
			border: 0;
			margin: 0 5px 10px;
			padding: 8px;
			box-sizing: border-box;
			font-size: 12px;
			border-radius: 10px;
			float: left;

		}

		.hsaddmodal-content .three-rows input {
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

		.modal-content .five-rows input {
			font-family: FontAwesome, "Poppins", sans-serif;
			background: #f2f2f2;
			width: 17%;
			border: 0;
			margin: 0 5px 10px;
			padding: 8px;
			box-sizing: border-box;
			font-size: 12px;
			border-radius: 10px;
			float: left;


		}


		/* The Close Button */
		.close,
		.editclose,
		.hsviewclose,
		.hsaddclose {
			color: #aaaaaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus,
		.editclose:hover,
		.editclose:focus,
		.hsviewclose:hover,
		.hsviewclose:focus,
		.hsaddclose:hover,
		.hsaddclose:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}


		.modal-content button,
		.hsviewmodal-content button,
		.hsaddmodal-content button {
			font-family: "Poppins", sans-serif;
			font-size: 12px;
			font-weight: bold;
			letter-spacing: .1em;
			outline: 0;
			background: #3C91E6;
			width: 15%;
			border: 0;
			border-radius: 30px;
			padding: 8px;
			color: #FFFFFF;
			-webkit-transition: all 0.3 ease;
			transition: all 0.3 ease;
			cursor: pointer;
			transition: all 0.2s;
			float: left;
		}

		.modal-content button:hover,
		.form button:focus,
		.hsviewmodal-content button:hover,
		.hsaddmodal-content button:hover {
			background: #2167ad;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
			transform: translateY(-4px);
		}

		.modal-content button:active,
		.hsviewmodal-content button:active,
		.hsaddmodal-content button:active {
			transform: translateY(2px);
			box-shadow: 0 2.5px 5px rgba(0, 0, 0, 0.2);
		}

		.custom-file-upload {
			font-family: FontAwesome, "Poppins", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width: 45%;
			margin: 0 5px 10px;
			padding: 8px;
			box-sizing: border-box;
			font-size: 12px;
			border-radius: 10px;
			display: inline-block;
			cursor: pointer;
		}

		.custom-file-upload:hover {
			background-color: #e3e3e3
		}

		#sidebar.hide~#content {
			width: calc(100% - 60px);
			left: 60px;
		}



		/*yung dropdown*/
		.dropbtn {
			font-family: FontAwesome, "Poppins", sans-serif;
			outline: 0;
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

		.error {
			color: red;
			font-weight: bold;
		}


		.image-container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 10vh;
			width: 10vh;
			/* Set the container to be a square */
		}

		/* Adjust the image size and shape */
		.image-container img {
			width: 50px;
			height: 50px;
			border-radius: 50%;
			object-fit: cover;
		}

		.hsviewmodal-content #prescriptionView {
			width: 100%;
			height: 100%;

		}
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
				<a href="#" class="btn-download" id="downloadButton">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of Patients</h3>
						<!--<i class='bx bx-search'></i>-->
						<i class='bx bx-filter'></i>
						<i id="add-patient" class='bx bx-plus'></i>
						<i id="add-medhistory" class='bx bx-plus-circle'></i>

						<!-- The Modal -->
						<div id="myModal" class="modal">

							<!-- Modal content -->
							<div class="modal-content">

								<span class="close">&times;</span>

								<form class="form">

									<h3>Add New Patient</h3>
									<p id="error-message" class="error"></p>

									<label for="file-upload" id="ProfilePic" class="custom-file-upload">Upload Profile
										Picture</label><input id="file-upload" type="file" name="File" />

									<div class="two-rows" style="margin:0;padding:0">
										<input type="text" name="firstName" id="firstName" placeholder="First Name" />
										<input type="text" name="lastName" id="lastName" placeholder="Last Name" />
									</div>

									<div class="five-rows" style="margin:0;padding:0">
										<input type="date" name="birthday" id="birthday" />
										<input type="text" name="gender" id="gender" placeholder="Gender" />
										<input type="text" name="height" id="height" placeholder="Height" />
										<input type="text" name="weight" id="weight" placeholder="Weight" />
										<input type="text" name="roomId" id="roomId" placeholder="Assigned Room" />
									</div>
									<div class="one-row">
										<input type="text" name="address" id="address"
											placeholder="House No.,Street, Barangay, City, Province" />
									</div>

									<button type="submit">ADD</button>
								</form>
							</div>

						</div>
					</div>
					<table id="myTable">
						<thead>
							<tr>
								<th>Name</th>
								<th>Birthday</th>
								<th>Gender</th>
								<th>Height</th>
								<th>Weight</th>
								<th>Room</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>

							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<!--This code will open a modal content to edit the Patient--->
	<div id="editModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<span class="editclose">&times;</span>
			<form class="formupdate">
				<h3>Edit Patient</h3>
				<div class="image-container">
					<img id="image" name="ProfilePic" src="">
				</div>
				<label for="file-upload" id="ProfilePic" class="custom-file-upload">Upload Profile Picture</label><input
					id="file-upload" type="file" />

				<input type="text" name="id" id="id" placeholder="ID" hidden />

				<div class="two-rows" style="margin:0;padding:0">
					<input type="text" name="firstName" id="firstName" placeholder="First Name" />
					<input type="text" name="lastName" id="lastName" placeholder="Last Name" />
				</div>

				<div class="five-rows" style="margin:0;padding:0">
					<input type="date" name="birthday" id="birthday" />
					<input type="text" name="gender" id="gender" placeholder="Gender" />
					<input type="text" name="height" id="height" placeholder="Height" />
					<input type="text" name="weight" id="weight" placeholder="Weight" />
					<input type="text" name="roomId" id="roomId" placeholder="Assigned Room" />
				</div>
				<div class="one-row">
					<input type="text" name="address" id="address"
						placeholder="House No.,Street, Barangay, City, Province" />
				</div>


				<button type="submit">SAVE</button>
			</form>
		</div>

	</div>

	<!--This code will open a modal content to see the Medication History--->
	<div id="hsaddModal" class="hsaddmodal">
		<!-- Modal content -->
		<div class="hsaddmodal-content">
			<span class="hsaddclose">&times;</span>
			<h3>Add Medication History of Patient</h3>
			<!-- Accordion -->

			<form class="formmedhistory">

				<!--<label for="file-upload" id="ProfilePic" class="custom-file-upload">Upload Profile Picture</label><input
					id="file-upload" type="file" />-->


				<div class="three-rows" style="margin:0;padding:0">
					<input type="text" name="doctor" id="doctor" placeholder="Doctor" />
					<select class="dropbtn" onChange="dropdownTip()" name="patientId" id="patient"></select>
					<input type="date" name="date" id="date" placeholder="Date" />
				</div>

				<div class="one-row">
					<input type="text" name="condition" id="condition" placeholder="Condition" />
				</div>
				<label for="file-upload" id="PrescriptionPath" class="custom-file-upload">Upload Prescription Image
				</label>
				<input id="file-upload" type="file" name="File" />


				<button type="submit">ADD NEW</button>
			</form>


		</div>

	</div>

	<div id="hsviewModal" class="hsviewmodal">
		<!-- Modal content -->
		<div class="hsviewmodal-content">
			<span class="hsviewclose">&times;</span>
			<h3>Medication History of Patient</h3>
			<!-- Accordion -->

		</div>

	</div>



	<script src="script/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
	<script>
		// Toggle accordion panel
		//function toggleAccordion(accordionId) {
		//	var accordion = document.getElementsByClassName("accordion")[accordionId - 1];
		//	var panel = accordion.nextElementSibling;
		//	accordion.classList.toggle("active");
		//	panel.style.display = panel.style.display === "block" ? "none" : "block";
		//}

		//function dropdownTip() {
		//	var value = document.getElementById('select').value;
		//document.getElementByID("result").innerHTML = value;
		//}

		// Retrieve data from the database and populate the dropdown
		fetch('https://smjp.intelligent-leakey.103-108-220-125.plesk.page/api/Patient/GetAllPatient')
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


		// sa modal
		var modal = document.getElementById("myModal");
		// Get the button that opens the modal
		var btn = document.getElementById("add-patient");
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

		// sa modal
		var hsaddmodal = document.getElementById("hsaddModal");
		// Get the button that opens the modal
		var btn = document.getElementById("add-medhistory");
		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("hsaddclose")[0];
		// When the user clicks the button, open the modal 
		btn.onclick = function () {
			hsaddmodal.style.display = "block";
		}
		// When the user clicks on <span> (x), close the modal
		span.onclick = function () {
			hsaddmodal.style.display = "none";
		}
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function (event) {
			if (event.target == hsaddmodal) {
				hsaddmodal.style.display = "none";
			}
		}

		//inserting new data
		const addPatientformEl = document.querySelector('.form')
		const errorElement = document.getElementById('error-message');

		addPatientformEl.addEventListener('submit', event => {
			event.preventDefault();

			const formdata = new FormData(addPatientformEl);
			const data = Object.fromEntries(formdata);



			fetch('https://smjp.intelligent-leakey.103-108-220-125.plesk.page/api/Patient/insertNew', {
				method: 'Post',
				//headers: {
				//	'Content-Type': 'application/json'
				//},
				body: formdata
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
					window.location.replace("patients.php");

				})
				.catch(error => console.log(error));
			//errorElement.textContent = 'Error: Patient already exists.';


		});

		//inserting new data
		const addMedHistoryformEl = document.querySelector('.formmedhistory')
		//addMedHistoryformEl.elements.patientId.value = item.id;

		addMedHistoryformEl.addEventListener('submit', event => {
			event.preventDefault();

			const formdata = new FormData(addMedHistoryformEl);
			const data = Object.fromEntries(formdata);

			console.log(data);


			fetch('https://smjp.intelligent-leakey.103-108-220-125.plesk.page/api/MedHistory/insertNew', {
				method: 'Post',
				// headers: {
				// 	'Content-Type': 'application/json'
				// },
				body: formdata
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
					window.location.replace("patients.php");


				})
				.catch(error => console.log(error));

		});






		//getting data
		// JavaScript to retrieve and display the data
		fetch('https://smjp.intelligent-leakey.103-108-220-125.plesk.page/api/Patient/GetAllPatient')
			.then(response => {
				if (response.ok) {
					return response.json();
				} else {
					throw new Error('Network response was not ok');
				}
			})
			.then(data => {
				// Select the table body element
				console.log('Data received from server:', data);
				const tableBody = document.querySelector('#myTable tbody');
				const tableHistoryBody = document.querySelector('#myHistoryTable tbody');
				console.log('Table body element:', tableBody);

				// Create a row for each item in the data array
				data.forEach(item => {
					console.log('Current item:', item);
					const row = tableBody.insertRow();

					// Create cells for the name and age columns
					const firstLastName = row.insertCell();
					const Birthday = row.insertCell();
					const Gender = row.insertCell();
					const Height = row.insertCell();
					const Weight = row.insertCell();
					const Room = row.insertCell();
					const edit = row.insertCell();
					const del = row.insertCell();
					const hs = row.insertCell();


					// Set the text content of the cells to the item's values
					firstLastName.textContent = item.firstName + " " + item.lastName;
					Birthday.textContent = formatDate(item.birthday);
					Gender.textContent = item.gender;
					Height.textContent = item.height;
					Weight.textContent = item.weight;
					Room.textContent = item.roomId;

					// Create an edit icon element
					const editIcon = document.createElement('i');
					editIcon.classList.add('bx', 'bx-edit-alt');

					// Create a delete icon element
					const deleteIcon = document.createElement('i');
					deleteIcon.classList.add('bx', 'bx-trash');

					const hsIcon = document.createElement('i');
					hsIcon.classList.add('bx', 'bx-history');

					var editmodal = document.getElementById("editModal");
					var editspan = document.getElementsByClassName("editclose")[0];

					var hsviewmodal = document.getElementById("hsviewModal");
					var hsviewspan = document.getElementsByClassName("hsviewclose")[0];

					editIcon.addEventListener('click', () => {
						// Handle the edit icon click event here
						console.log(`Editing item with ID ${item.id}`);
						console.log(item);

						editmodal.style.display = "block";

						const editformEl = document.querySelector('.formupdate');

						// Get the form data from the server
						fetch('https://smjp.intelligent-leakey.103-108-220-125.plesk.page/api/Patient/GetPatient/' + item.id)
							.then(response => response.json())
							.then(data => {
								// Populate the form with the item data
								const imagePath = item.profilePicPath;
								const baseUrl = "https://smjp.intelligent-leakey.103-108-220-125.plesk.page/"; // Replace with your base URL
								const completePath = baseUrl + imagePath;
								const imageElement = document.getElementById('image');
								imageElement.src = completePath;

								const birthdayInput = document.getElementById('birthday');
								const birthday = item.birthday;
								// Extract the date portion from the retrieved birthday
								const dateOnly = birthday.split('T')[0];

								// Populate the form with the item data
								editformEl.elements.id.value = item.id;
								editformEl.elements.firstName.value = item.firstName;
								editformEl.elements.firstName.placeholder = "firstName";
								editformEl.elements.lastName.value = item.lastName;
								editformEl.elements.lastName.placeholder = "lastName";
								editformEl.elements.gender.value = item.gender;
								editformEl.elements.gender.placeholder = "gender";
								editformEl.elements.roomId.value = item.roomId;
								editformEl.elements.roomId.placeholder = "roomId";
								editformEl.elements.birthday.value = dateOnly;
								editformEl.elements.address.value = item.address;
								editformEl.elements.address.placeholder = "address";
								editformEl.elements.height.value = item.height;
								editformEl.elements.height.placeholder = "height";
								editformEl.elements.weight.value = item.weight;
								editformEl.elements.weight.placeholder = "weight";


								//updating new data
								const updateMedicineformEl = document.querySelector('.formupdate')

								updateMedicineformEl.addEventListener('submit', event => {
									event.preventDefault();

									const formdata = new FormData(updateMedicineformEl);
									const data = Object.fromEntries(formdata);
									const itemId = item.id;

									console.log(data);

									fetch('https://smjp.intelligent-leakey.103-108-220-125.plesk.page/api/Patient/UpdatePatientInfo/' + itemId, {
										method: 'PUT',
										//headers: {
										//	'Content-Type': 'application/json'
										//},
										//body: JSON.stringify(data)
										body: formdata

									})
										.then(res => {
											if (res.ok) {
												return res.json()
												console.log(res);
											}
											return res.text()
												.then(text => {
													throw new Error(text)
												})
										})
										.then(data => {
											if (data != null)
												console.log(data)
											location.reload();

										})
										.catch(error => console.log(error));
								});

								//end of updating new data
							})
							.catch(error => {
								console.error('Error fetching item data:', error);
							});
					});

					// When the user clicks on <span> (x), close the modal
					editspan.onclick = function () {
						editmodal.style.display = "none";
					}
					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function (event) {
						if (event.target == editmodal) {
							editmodal.style.display = "none";
						}
					}

					//event when delete button is clicked
					deleteIcon.addEventListener('click', () => {
						// Handle the delete icon click event here
						console.log(`Deleting item with ID ${item.id}`);

						//const itemId = deleteIcon.parentNode.parentNode.dataset.itemId;

						// Send a DELETE request to the server
						fetch('https://smjp.intelligent-leakey.103-108-220-125.plesk.page/api/Patient/DeletePatient/' + item.id, {
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
								// Remove the deleted row from the table
								deleteIcon.parentNode.parentNode.remove();

							})
							.catch(error => {
								console.error('Error deleting item:', error);
							});


					});

					//event when history button is clicked
					hsIcon.addEventListener('click', () => {
						console.log(`Viewing item with ID ${item.id}`);
						hsviewmodal.style.display = "block";


						fetch('https://smjp.intelligent-leakey.103-108-220-125.plesk.page/api/MedHistory/GetMedHistoryofSpecificPatient/' + item.id,)
							.then(response => {
								if (response.ok) {
									return response.json();
								} else {
									throw new Error('Network response was not ok');
								}
							})
							.then(data => {
								console.log('Item retrieved:', data);

								// Display the first 2 or 3 items from the fetched data
								const itemsToDisplay = data.slice(0, 2); // Change 2 to 3 if you want to display 3 items
								itemsToDisplay.forEach(item => {
									console.log(item.date);
									console.log(item.condition);

									const modalContent = document.getElementsByClassName("hsviewmodal-content")[0];

									// Create a new div element for each item
									const itemDiv = document.createElement("div");

									// Create label and span elements for date, doctor name, and condition
									const dateLabel = document.createElement("label");
									const dateSpan = document.createElement("span");
									const doctorLabel = document.createElement("label");
									const doctorSpan = document.createElement("span");
									const conditionLabel = document.createElement("label");
									const conditionSpan = document.createElement("span");

									// Set the text content for labels and spans
									dateLabel.textContent = "Date: ";
									dateSpan.textContent = formatDate(item.date);
									doctorLabel.textContent = "Doctor Name: ";
									doctorSpan.textContent = item.doctor;
									conditionLabel.textContent = "Condition: ";
									conditionSpan.textContent = item.condition;

									// Append the labels and spans to the item div
									itemDiv.appendChild(dateLabel);
									itemDiv.appendChild(dateSpan);
									itemDiv.appendChild(document.createElement("br"));
									itemDiv.appendChild(doctorLabel);
									itemDiv.appendChild(doctorSpan);
									itemDiv.appendChild(document.createElement("br"));
									itemDiv.appendChild(conditionLabel);
									itemDiv.appendChild(conditionSpan);

									// Append the item div to the modal content
									modalContent.appendChild(itemDiv);

									const photoUrl = item.prescriptionPath;
									const baseUrl = "https://smjp.intelligent-leakey.103-108-220-125.plesk.page/"; // Replace with your base URL
									const completeUrl = baseUrl + photoUrl;

									// Create an img element for the photo
									const photoElement = document.createElement("img");
									photoElement.src = completeUrl;
									photoElement.alt = "Patient Photo";

									// Append the photo element to the item div
									itemDiv.appendChild(document.createElement("br"));
									itemDiv.appendChild(document.createElement("br"));
									itemDiv.appendChild(document.createElement("label")).textContent = "Photo:";
									itemDiv.appendChild(document.createElement("br"));
									itemDiv.appendChild(photoElement);

								});
							})
							.catch(error => {
								console.error('Error:', error);
							});
					});
					// When the user clicks on <span> (x), close the modal
					hsviewspan.onclick = function () {
						hsviewmodal.style.display = "none";
					}
					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function (event) {
						if (event.target == hsviewmodal) {
							hsviewmodal.style.display = "none";
						}
					}

					// Append the edit icon element to the edit cell
					edit.appendChild(editIcon);
					del.appendChild(deleteIcon);
					hs.appendChild(hsIcon);
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
				const additionalTitle = "Patient Information Summary";
				const titleX = 50; // X-coordinate of the title
				const titleY = 25; // Y-coordinate of the title
				const fontColor = "#342E37"; // Font color (red)
				pdf.setFontSize(18);
				pdf.setTextColor(fontColor);
				pdf.setFont("helvetica", "bold");
				pdf.text(additionalTitle, titleX, titleY);

				// Add the table image
				pdf.addImage(tableImage, "PNG", 10, 40, imgWidth, imgHeight);

				pdf.save("PatientInformationSummary.pdf");
			});
		}
		// Attach event listener to download button
		const downloadButton = document.getElementById("downloadButton");
		downloadButton.addEventListener("click", convertToPDF);

		function searchTable() {
			var input, filter, table, tr, td1, td2, td3, td4, td5, td6, i, txtValue1, txtValue2, txtValue3, txtValue4, txtValue5, txtValue6;
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
				if (td1 && td2 && td3 && td4 && td5 && td6) {
					txtValue1 = td1.textContent || td1.innerText;
					txtValue2 = td2.textContent || td2.innerText;
					txtValue3 = td3.textContent || td3.innerText;
					txtValue4 = td4.textContent || td4.innerText;
					txtValue5 = td5.textContent || td5.innerText;
					txtValue6 = td6.textContent || td6.innerText;


					if (txtValue1.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1 || txtValue3.toUpperCase().indexOf(filter) > -1 || txtValue4.toUpperCase().indexOf(filter) > -1 || txtValue5.toUpperCase().indexOf(filter) > -1 || txtValue6.toUpperCase().indexOf(filter) > -1) {
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