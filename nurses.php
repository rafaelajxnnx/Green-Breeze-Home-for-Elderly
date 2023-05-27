<!DOCTYPE html>
<html lang="en">

<?php include 'shared/header.php' ?>
<header>
	<style>
		/* The Modal (background) */
		.modal {
			font-family: FontAwesome, "Poppins", sans-serif;
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
			height: 70%;
			border-radius: 20px;
		}

		.modal-content .two-rows input {
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

		.modal-content .one-row input {
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

		/* The Close Button */
		.close,
		.editclose {
			color: #aaaaaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus,
		.editclose:hover,
		.editclose:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}

		.modal-content button {
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
		.form button:focus {
			background: #2167ad;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
			transform: translateY(-4px);
		}

		.modal-content button:active {
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
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of Nurses</h3>
						<i class='bx bx-search'></i>
						<i class='bx bx-filter'></i>
						<i id="add-nurse" class='bx bx-plus'></i>

						<!-- The Modal -->
						<div id="myModal" class="modal">

							<!-- Modal content -->
							<div class="modal-content">

								<span class="close">&times;</span>

								<form class="form">
									<h3>Add New Nurse</h3>
									<p id="error-message" class="error"></p>
									<label for="file-upload" id="ProfilePic" class="custom-file-upload">Upload Profile
										Picture</label><input id="file-upload" type="file" name="File" />

									<div class="two-rows" style="margin:0;padding:0">
										<input type="text" name="firstName" id="firstName" placeholder="First Name" />
										<input type="text" name="lastName" id="lastName" placeholder="Last Name" />
									</div>

									<div class="three-rows" style="margin:0;padding:0">
										<input type="date" name="birthday" id="birthday" />
										<input type="text" name="gender" id="gender" placeholder="Gender" />
										<input type="text" name="roomId" id="roomId" placeholder="Assigned Room" />
									</div>
									<div class="one-row">
										<input type="text" name="address" id="address"
											placeholder="House No.,Street, Barangay, City, Province" />
									</div>
									<div class="three-rows" style="margin:0;padding:0">
										<input type="text" name="contact" id="contact" placeholder="Mobile Number" />
										<input type="text" name="username" id="username" placeholder="Username" />
										<input type="password" name="password" id="password" placeholder="Password" />
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
								<th>Mobile No.</th>
								<th>Username</th>
								<th>Gender</th>
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


	<!--This code will open a modal content to edit the Medicine--->
	<div id="editModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<span class="editclose">&times;</span>
			<p id="error-message-edit" class="error"></p>
			<form class="formupdate">
				<h3>Edit Nurse</h3>
				<div class="image-container">
					<img id="image" name="ProfilePic" src="">
				</div>
				<!--<label for="file-upload" id="ProfilePic" class="custom-file-upload">Upload Profile
					Picture</label><input id="file-upload" type="file" name="File" />-->

				<input type="text" name="id" id="id" placeholder="ID" hidden />

				<div class="two-rows" style="margin:0;padding:0">
					<input type="text" name="firstName" id="firstName" placeholder="First Name" />
					<input type="text" name="lastName" id="lastName" placeholder="Last Name" />
				</div>

				<div class="three-rows" style="margin:0;padding:0">
					<input type="date" name="birthday" id="birthday" />
					<input type="text" name="gender" id="gender" placeholder="Gender" />
					<input type="text" name="roomId" id="roomId" placeholder="Assigned Room" />
				</div>
				<div class="one-row">
					<input type="text" name="address" id="address"
						placeholder="House No.,Street, Barangay, City, Province" />
				</div>
				<div class="three-rows" style="margin:0;padding:0">
					<input type="text" name="contact" id="contact" placeholder="Mobile Number" />
					<input type="text" name="username" id="username" placeholder="Username" />
					<input type="password" name="password" id="password" placeholder="Password" />
				</div>


				<button type="submit">SAVE</button>
			</form>
		</div>

	</div>



	<script src="script/script.js"></script>
	<script>
		// sa modal
		var modal = document.getElementById("myModal");
		// Get the button that opens the modal
		var btn = document.getElementById("add-nurse");
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

		//inserting new data
		const addNurseformEl = document.querySelector('.form')

		addNurseformEl.addEventListener('submit', event => {
			event.preventDefault();

			const formdata = new FormData(addNurseformEl);
			const data = Object.fromEntries(formdata);

			console.log(data);

			fetch('https://localhost:7139/api/Nurse/insertNew', {
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
					window.location.replace("http://localhost/Green-Breeze-Home-for-Elderly/nurses.php");

				})
				.catch(error => console.log(error));

		});

		//getting data
		// JavaScript to retrieve and display the data
		fetch('https://localhost:7139/api/Nurse/GetAllNurse')
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
				console.log('Table body element:', tableBody);

				// Create a row for each item in the data array
				data.forEach(item => {
					console.log('Current item:', item);
					const row = tableBody.insertRow();

					// Create cells for the name and age columns
					const firstLastName = row.insertCell();
					const Birthday = row.insertCell();
					const Mobile = row.insertCell();
					const Username = row.insertCell();
					const Gender = row.insertCell();
					const RoomNo = row.insertCell();
					const edit = row.insertCell();
					const del = row.insertCell();

					// Set the text content of the cells to the item's values
					firstLastName.textContent = item.firstName + " " + item.lastName;
					Birthday.textContent = formatDate(item.birthday);
					Mobile.textContent = item.contact;
					Username.textContent = item.userName;
					Gender.textContent = item.gender;
					RoomNo.textContent = item.roomId;

					// Create an edit icon element
					const editIcon = document.createElement('i');
					editIcon.classList.add('bx', 'bx-edit-alt');

					// Create a delete icon element
					const deleteIcon = document.createElement('i');
					deleteIcon.classList.add('bx', 'bx-trash');

					var editmodal = document.getElementById("editModal");
					var editspan = document.getElementsByClassName("editclose")[0];

					editIcon.addEventListener('click', () => {
						// Handle the edit icon click event here
						console.log(`Editing item with ID ${item.id}`);
						editmodal.style.display = "block";

						const editformEl = document.querySelector('.formupdate');

						// Get the form data from the server
						fetch('https://localhost:7139/api/Nurse/GetNurse/' + item.id)
							.then(response => response.json())
							.then(data => {
								// Populate the form with the item data
								const imagePath = item.profilePicPath;
								const baseUrl = "https://localhost:7139/"; // Replace with your base URL
								const completePath = baseUrl + imagePath;

								const imageElement = document.getElementById('image');
								imageElement.src = completePath;


								editformEl.elements.id.value = item.id;
								editformEl.elements.firstName.value = item.firstName;
								editformEl.elements.firstName.placeholder = "firstName";
								editformEl.elements.lastName.value = item.lastName;
								editformEl.elements.lastName.placeholder = "lastName";
								editformEl.elements.gender.value = item.gender;
								editformEl.elements.gender.placeholder = "gender";
								editformEl.elements.birthday.value = item.birthday;
								editformEl.elements.birthday.placeholder = "birthday";
								editformEl.elements.roomId.value = item.roomId;
								editformEl.elements.roomId.placeholder = "roomId";
								editformEl.elements.address.value = item.address;
								editformEl.elements.address.placeholder = "address";
								editformEl.elements.contact.value = item.contact;
								editformEl.elements.contact.placeholder = "contact";
								editformEl.elements.username.value = item.userName;
								editformEl.elements.username.placeholder = "username";
								editformEl.elements.password.value = item.password;
								editformEl.elements.password.placeholder = "password";


								//updating new data
								const updateMedicineformEl = document.querySelector('.formupdate')
								const errorElement = document.getElementById('error-message-edit');

								updateMedicineformEl.addEventListener('submit', event => {
									event.preventDefault();

									const formdata = new FormData(updateMedicineformEl);
									const data = Object.fromEntries(formdata);
									const itemId = item.id;

									console.log(data);

									fetch('https://localhost:7139/api/Nurse/UpdateNurseInfo/' + itemId, {
										method: 'PUT',
										headers: {
											'Content-Type': 'application/json'
										},
										body: JSON.stringify(data)

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
									errorElement.textContent = 'Error: Cannot update. Something wrong with the information inserted.';



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
						fetch('https://localhost:7139/api/Nurse/DeleteNurse/' + item.id, {
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




	</script>

</body>

</html>