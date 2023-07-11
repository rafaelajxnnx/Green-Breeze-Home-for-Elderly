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

		.error {
			color: red;
			font-weight: bold;
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

			<a href="#">
				<p style="font-family: FontAwesome, 'Poppins', sans-serif; font-weight:bold" id="displayName"></p>
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
				<a href="#" class="btn-download" id="downloadButton">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of Medicine</h3>

						<!--<i class='bx bx-search'></i>-->
						<i class='bx bx-filter'></i>
						<i id="add-medicine" class='bx bx-plus'></i>
						<!-- The Modal -->
						<div id="myModal" class="modal">

							<!-- Modal content -->
							<div class="modal-content">
								<span class="close">&times;</span>
								<p id="error-message" class="error"></p>
								<form class="form">
									<h3>Add Medicine</h3>
									<div class="two-rows" style="margin:0;padding:0">
										<input type="text" name="drugName" id="drugName" placeholder="Drug Name" />
										<input type="text" name="brandName" id="brandName"
											placeholder="Company or Brand Name" />
									</div>
									<div class="one-row">
										<input type="text" name="condition" id="condition"
											placeholder="Drug Usage or Condition" />
									</div>
									<div class="two-rows" style="margin:0;padding:0">
										<input type="text" name="remainQty" id="remainQty"
											placeholder="Usual Quantity per Serving" />
										<!--<button class="dropbtn">Dosage</button>-->
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
					<table id="myTable">
						<thead>
							<tr>
								<th>Drug Name</th>
								<th>Company Brand</th>
								<th>Used for Condition/s</th>
								<th>Usual Qty Given</th>
								<th>Dosage</th>
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
			<form class="formupdate">
				<h3>Edit Medicine</h3>
				<div class="two-rows" style="margin:0;padding:0">
					<input type="text" name="id" id="id" placeholder="ID" hidden />
					<input type="text" name="drugName" id="drugName" placeholder="Drug Name" />
					<input type="text" name="brandName" id="brandName" placeholder="Company or Brand Name" />
				</div>
				<div class="one-row">
					<input type="text" name="condition" id="condition" placeholder="Drug Usage or Condition" />
				</div>
				<div class="two-rows" style="margin:0;padding:0">
					<input type="text" name="remainQty" id="remainQty" placeholder="Usual Quantity per Serving" />
					<!--<button class="dropbtn">Dosage</button>-->
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
				<button type="submit">SAVE</button>
			</form>
		</div>

	</div>


	<script src="script/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
	<script>
		// sa modal
		var modal = document.getElementById("myModal");
		// Get the button that opens the modal
		var btn = document.getElementById("add-medicine");
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
		//inserting new data
		const addMedicineformEl = document.querySelector('.form')
		const errorElement = document.getElementById('error-message');

		addMedicineformEl.addEventListener('submit', event => {
			event.preventDefault();

			const formdata = new FormData(addMedicineformEl);
			const data = Object.fromEntries(formdata);

			console.log(data);

			fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Medicine/insertNew', {
				method: 'Post',
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
					window.location.replace("medicine.php");

				})
				.catch(error => console.log(error));
			//errorElement.textContent = 'Error: Medicine already exists.';

		});


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

		//getting data
		// JavaScript to retrieve and display the data
		fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Medicine/GetAllMedicine')
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
					const drugName = row.insertCell();
					const brandName = row.insertCell();
					const condition = row.insertCell();
					const remainQty = row.insertCell();
					const dosage = row.insertCell();
					const edit = row.insertCell();
					const del = row.insertCell();

					// Set the text content of the cells to the item's values
					drugName.textContent = item.drugName;
					brandName.textContent = item.brandName;
					condition.textContent = item.condition;
					remainQty.textContent = item.remainQty;
					dosage.textContent = item.dosage;

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
						// Get the form that will be inside the modal
						const editformEl = document.querySelector('.formupdate');

						// Get the form data from the server
						fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Medicine/GetMedicine/' + item.id)
							.then(response => response.json())
							.then(data => {
								// Populate the form with the item data
								editformEl.elements.id.value = item.id;
								editformEl.elements.drugName.value = item.drugName;
								editformEl.elements.drugName.placeholder = "Drug Name";
								editformEl.elements.brandName.value = item.brandName;
								editformEl.elements.brandName.placeholder = "Company or Brand Name";
								editformEl.elements.condition.value = item.condition;
								editformEl.elements.condition.placeholder = "Condition";
								editformEl.elements.remainQty.value = item.remainQty;
								editformEl.elements.remainQty.placeholder = "Usual Quantity per Serving";
								editformEl.elements.dosage.value = item.dosage;


								//updating new data
								const updateMedicineformEl = document.querySelector('.formupdate')
								updateMedicineformEl.addEventListener('submit', event => {
									event.preventDefault();

									const formdata = new FormData(updateMedicineformEl);
									const data = Object.fromEntries(formdata);
									const itemId = item.id;

									console.log(data);

									fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Medicine/UpdateMedicineInfo/' + itemId, {
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
						fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Medicine/DeleteMedicine/' + item.id, {
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
				const additionalTitle = "Medicine Information Summary";
				const titleX = 50; // X-coordinate of the title
				const titleY = 25; // Y-coordinate of the title
				const fontColor = "#342E37"; // Font color (red)
				pdf.setFontSize(18);
				pdf.setTextColor(fontColor);
				pdf.setFont("helvetica", "bold");
				pdf.text(additionalTitle, titleX, titleY);

				// Add the table image
				pdf.addImage(tableImage, "PNG", 10, 40, imgWidth, imgHeight);

				pdf.save("MedicineInformationSummary.pdf");
			});
		}
		// Attach event listener to download button
		const downloadButton = document.getElementById("downloadButton");
		downloadButton.addEventListener("click", convertToPDF);

		function searchTable() {
			var input, filter, table, tr, td1, td2, td3, td4, td5, i, txtValue1, txtValue2, txtValue3, txtValue4, txtValue5;
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


					if (txtValue1.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1 || txtValue3.toUpperCase().indexOf(filter) > -1 || txtValue4.toUpperCase().indexOf(filter) > -1 || txtValue5.toUpperCase().indexOf(filter) > -1) {
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