<!DOCTYPE html>
<html lang="en">

<?php include 'shared/header.php' ?>
<header>
<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  top: 10%;
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

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
.modal-content .two-rows input{
  font-family: FontAwesome, "Poppins", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 45%;
  border: 0;
  margin: 0 5px 10px;
  padding: 8px;
  box-sizing: border-box;
  font-size: 12px;
  border-radius:10px;
  float:left;
  
}
.modal-content .one-row input{
  font-family: FontAwesome, "Poppins", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 92%;
  border: 0;
  margin: 0 5px 10px;
  padding: 8px;
  box-sizing: border-box;
  font-size: 12px;
  border-radius:10px;
  float:left;
  
}
.modal-content .five-rows input{
  font-family: FontAwesome, "Poppins", sans-serif;
  background: #f2f2f2;
  width: 17%;
  border: 0;
  margin: 0 5px 10px;
  padding: 8px;
  box-sizing: border-box;
  font-size: 12px;
  border-radius:10px;
  float:left;
  
  
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


.modal-content button {
  font-family: "Poppins", sans-serif;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: .1em;
  outline: 0;
  background: #3C91E6;
  width: 15%;
  border: 0;
  border-radius:30px;
  padding: 8px;
  color: #FFFFFF;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  transition: all 0.2s;
  float:left;
}
.modal-content button:hover,.form button:focus {
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
  border-radius:10px;
  display: inline-block;
  cursor: pointer;
}
.custom-file-upload:hover {background-color: #e3e3e3}

#sidebar.hide ~ #content {
	width: calc(100% - 60px);
	left: 60px;
}



</style>
</header>
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
                        <i id = "add-patient" class='bx bx-plus' ></i>
						<!-- The Modal -->
							<div id="myModal" class="modal">

							<!-- Modal content -->
							<div class="modal-content">

								<span class="close">&times;</span>

								<form class="form">
								<h3>Add New Patient</h3>
								<label for="file-upload" class="custom-file-upload">Upload Profile Picture</label><input id="file-upload" type="file"/>

								<div class="two-rows" style="margin:0;padding:0">
									<input type="text" name="firstName" id="firstName" placeholder="First Name" />
									<input type="text" name="lastName" id="lastName" placeholder="Last Name" />
								</div>
								
								<div class="five-rows" style="margin:0;padding:0">
									<input type="date" name="birthday" id="birthday"/>
									<input type="text" name="gender" id="gender" placeholder="Gender" />
									<input type="text" name="height" id="height" placeholder="Height" />
									<input type="text" name="weight" id="weight" placeholder="Weight" />
									<input type="text" name="roomNo" id="roomNo" placeholder="Assigned Room" />
								</div>
								<div class ="one-row">
								<input type="text" name="address" id="address" placeholder="House No.,Street, Barangay, City, Province" />
								</div>
	
								<!--Guardian Info
								<h3>Guardian Information</h3>
								<div class="two-rows" style="margin:0;padding:0">
									<input type="text" name="firstName" id="firstName" placeholder="First Name" />
									<input type="text" name="lastName" id="lastName" placeholder="Last Name" />
								</div>
								<div class="two-rows" style="margin:0;padding:0">
									<input type="text" name="mobileNo" id="mobileNo" placeholder="Mobile Number" />
									<input type="text" name="email" id="email" placeholder="Email" />
								</div>
								-->

								<button type="submit">ADD</button>
								</form>
							</div>

							</div>

			
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
	<script>
		// sa modal
		var modal = document.getElementById("myModal");
		// Get the button that opens the modal
		var btn = document.getElementById("add-patient");
		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];
		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		modal.style.display = "block";
		}
		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		modal.style.display = "none";
		}
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
		}
		
		//inserting new data
		const addPatientformEl = document.querySelector('.form')
		addPatientformEl.addEventListener('submit', event => {
			event.preventDefault();

			const formdata = new FormData(addPatientformEl);
			const data = Object.fromEntries(formdata);

			console.log(data);

			fetch('https://localhost:7139/Patient/insertNew', {
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
					window.location.replace("http://localhost/Green-Breeze-Home-for-Elderly/patients.php");

				})
				.catch(error => console.log(error));

		});
		
	</script>

</body>
</html>
