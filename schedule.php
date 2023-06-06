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

		.modal-content .three-rows input {
			font-family: FontAwesome, "Poppins", sans-serif;
			background: #f2f2f2;
			width: 30%;
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
					<h1>Schedule</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Schedule</a>
						</li>
						<!--<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>-->
					</ul>
				</div>
				<a href="#" class="btn-download"  id="downloadButton">
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
										<input type="time" name="time" id="time">
										<!--<button id="set-alarm-button">Set</button>-->

										<input type="date" name="date" id="date" />
									</div>
									<div class="two-rows" style="margin:0;padding:0">
										
										<!--<p>Assigned Nurse</p>-->
										<select class="dropbtn" name="nurseId" id="nurseId"></select>
										
										<!--<p>Patient</p>-->
										
										<select class="dropbtn" name="patientId" id="patientId"></select>
										
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
								<th>Date</th>
								<th>Time</th>
								<th>Patient Name</th>
								<th>Assigned Nurse</th>
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
				const dropdown = document.getElementById('nurseId');

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
				const dropdown = document.getElementById('patientId');

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
			var dateValue = document.getElementById('date').value;
			var timeValue = document.getElementById('time').value;



			// Split the date value into year, month, and day
			var [year, month, day] = dateValue.split('-');

			// Split the time value into hours and minutes
			var [hours, minutes] = timeValue.split(':');

			// Create a new Date object with the corrected date and time values
			var dateTimeObject = new Date(year, month - 1, day, hours, minutes, 0);
			console.log(dateTimeObject);


			// Format the date and time as a string in the desired format
			var utcString = dateTimeObject.toISOString().split('T')[0] + 'T' + dateTimeObject.toTimeString().split(' ')[0];
			console.log(utcString);

			// Create an object to send via AJAX
			var data = {
				status: false,
				nurseId: nurseValue,
				patientId: patientValue,
				medicineId: medicineValue,
				quantity: quantityValue,
				dosage: dosageValue,
				dateTime: utcString
			};

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















		//GET data
		// JavaScript to retrieve and display the data
		fetch('https://localhost:7139/api/Schedule/GetAllSchedule')
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
				//const tableHistoryBody = document.querySelector('#myHistoryTable tbody');
				console.log('Table body element:', tableBody);

				// Create a row for each item in the data array
				data.forEach(item => {
					console.log('Current item:', item);
					const row = tableBody.insertRow();

					// Create cells for the name and age columns
					const date = row.insertCell();
					const time = row.insertCell();
					const patient = row.insertCell();
					const nurse = row.insertCell();
					const status = row.insertCell();
					const edit = row.insertCell();
					const del = row.insertCell();


					// Set the text content of the cells to the item's values
					date.textContent = formatDate(item.dateTime);
					time.textContent = formatTime(item.dateTime);


					// Create an edit icon element
					const editIcon = document.createElement('i');
					editIcon.classList.add('bx', 'bx-edit-alt');

					// Create a delete icon element
					const deleteIcon = document.createElement('i');
					deleteIcon.classList.add('bx', 'bx-trash');


					var editmodal = document.getElementById("editModal");
					var editspan = document.getElementsByClassName("editclose")[0];

					// Fetch Nurse details based on NurseId
					fetch(`https://localhost:7139/api/Nurse/GetNurse/${item.nurseId}`)
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
					fetch(`https://localhost:7139/api/Patient/GetPatient/${item.patientId}`)
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
						status.textContent = item.status;
					}


					//DELETE event when delete button is clicked
					deleteIcon.addEventListener('click', () => {
						// Handle the delete icon click event here
						console.log(`Deleting item with ID ${item.id}`);

						//const itemId = deleteIcon.parentNode.parentNode.dataset.itemId;

						// Send a DELETE request to the server
						fetch('https://localhost:7139/api/Schedule/DeleteSchedule/' + item.id, {
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

					// Append the edit icon element to the edit cell
					edit.appendChild(editIcon);
					del.appendChild(deleteIcon);
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
			var input, filter, table, tr, td1, td2,td3,td4,td5, i, txtValue1, txtValue2,txtValue3,txtValue4,txtValue5;
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
				if (td1 && td2 && td3 && td4 && td5) {
					txtValue1 = td1.textContent || td1.innerText;
					txtValue2 = td2.textContent || td2.innerText;
					txtValue3 = td3.textContent || td3.innerText;
					txtValue4 = td4.textContent || td4.innerText;
					txtValue5 = td5.textContent || td5.innerText;


					if (txtValue1.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1 || txtValue3.toUpperCase().indexOf(filter) > -1 || txtValue4.toUpperCase().indexOf(filter) > -1 || txtValue5.toUpperCase().indexOf(filter) > -1 ) {
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