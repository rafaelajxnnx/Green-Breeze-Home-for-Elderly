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
					<h1>Schedule Details</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Precise medication schedule details</a>
						</li>
						<!--<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>-->
					</ul>
				</div>
				<!-- <a href="#" class="btn-download"  id="downloadButton">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Download PDF</span>
				</a> -->

				<a href="#" class="btn-download" onClick="SaveButton()">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Save</span>
				</a>
			</div>



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Details</h3>
						<!--<i class='bx bx-search'></i>-->
						<i class='bx bx-filter'></i>
						<i id="add-schedule" class='bx bx-plus'></i>
						<!-- The Modal -->

					</div>
					<table id="myTable">
						<thead>
							<tr>
								<th>Date</th>
								<th>Time</th>
								<th>Patient</th>
								<th>Nurse</th>
								<th>Medicine</th>
								<th>Dosage</th>
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



	<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


	<script>


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
			
		//GET data
		// JavaScript to retrieve and display the data
		const urlParams = new URLSearchParams(window.location.search);
		const scheduleId = urlParams.get('id');
		console.log(scheduleId);

		fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Schedule/GetScheduleDetails/' + scheduleId)
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
					const medicine = row.insertCell();
					const quantity = row.insertCell();
					const status = row.insertCell();
					const edit = row.insertCell();
					const del = row.insertCell();


					// Set the text content of the cells to the item's values
					date.textContent = formatDate(item.scheduleTime);
					time.textContent = formatTime(item.scheduleTime);
					patient.textContent = item.patientName;
					nurse.textContent = item.nurseName;
					medicine.textContent = item.medicineName;
					quantity.textContent = item.scheduleObj.quantity +" "+item.scheduleObj.dosage;


					let x = document.createElement("INPUT");
					x.setAttribute("type", "checkbox");
					x.setAttribute("data-id", item.id);
					x.setAttribute("class", 'schedule-details');
					if (item.status == true) {
						x.setAttribute("checked", status);

					}

					// Create an edit icon element
					const editIcon = document.createElement('i');
					editIcon.classList.add('bx', 'bx-edit-alt');

					// Create a delete icon element
					const deleteIcon = document.createElement('i');
					deleteIcon.classList.add('bx', 'bx-trash');


					var editmodal = document.getElementById("editModal");
					var editspan = document.getElementsByClassName("editclose")[0];

					// // Fetch Nurse details based on NurseId
					// fetch(`https://rafaelajxnnxx-001-site1.ftempurl.com/api/Nurse/GetNurse/${item.scheduleObj.nurseId}`)
					// 	.then(response => {
					// 		if (response.ok) {
					// 			return response.json();
					// 		} else {
					// 			throw new Error('Network response was not ok');
					// 		}
					// 	})
					// 	.then(nurseData => {
					// 		// Set the text content of the nurse cell to the nurse's first name and last name
					// 		nurse.textContent = `${nurseData.firstName} ${nurseData.lastName}`;
					// 	})
					// 	.catch(error => {
					// 		console.error('Error while fetching Nurse:', error);
					// 	});

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


					//DELETE event when delete button is clicked
					deleteIcon.addEventListener('click', () => {
						// Handle the delete icon click event here
						console.log(`Deleting item with ID ${item.id}`);

						//const itemId = deleteIcon.parentNode.parentNode.dataset.itemId;

						// Send a DELETE request to the server
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
								// Remove the deleted row from the table
								deleteIcon.parentNode.parentNode.remove();

							})
							.catch(error => {
								console.error('Error deleting item:', error);
							});


					});

					// Append the edit icon element to the edit cell
					edit.appendChild(x);
					del.appendChild(deleteIcon);
				});
			})
			.catch(error => {
				console.error('Error:', error);
			});



		function SaveButton() {
			{
				let ids = [];

				$('.schedule-details').each(function () {
					if (this.checked)
						ids.push($(this).data('id'))
				});

				console.log(ids)

				fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Schedule/SaveScheduleDetails', {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json'
					},
					body: JSON.stringify(ids)
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

			}
		}

		//==========================================================//
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