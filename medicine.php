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
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
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
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
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
  border-radius:10px;
  float:left;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content option {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-size:14px;
}

.dropdown-content option:hover {background-color: #f1f1f1}

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
  border-radius:30px;
  margin: 10px 0px 10px;
  padding: 10px;
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

</style>
</header>

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
                        <i id = "add-medicine" class='bx bx-plus' ></i>
						<!-- The Modal -->
							<div id="myModal" class="modal">
							
							<!-- Modal content -->
							<div class="modal-content">
								<span class="close">&times;</span>
								<form class="form">
								<h3>Add Medicine</h3>
								<div class="two-rows" style="margin:0;padding:0">
									<input type="text" name="drugName" id="drugName" placeholder="Drug Name" />
									<input type="text" name="brandName" id="brandName" placeholder="Company or Brand Name" />
								</div>
								<div class ="one-row">
								<input type="text" name="Condition" id="Condition" placeholder="Drug Usage or Condition" />
								</div>
								<div class="two-rows" style="margin:0;padding:0">
									<input type="text" name="remainQty" id="remainQty" placeholder="Total Remaining Medicine" />
									<!--<button class="dropbtn">Dosage</button>-->
									<select class="dropbtn"onChange="dropdownTip()" id="select" name="dosage" style="margin-right:10px; margin-top:2px;">
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
								<th>Drug Name</th>
								<th>Company Brand</th>
								<th>Condition</th>
								<th>Remaining</th>
                                <th>Dosage per Serving</th>
                                <th>Edit</th>
							</tr>
						</thead>
						<tbody>
							<tr>
                                <td>Paracetamol</td>
								<td>Biogesic</td>
								<td>treat pain <br> reduce a high temperature (fever)</td>
								<td>89 tablets</td>
                                <td>ml</td>
                                <td><i class='bx bx-edit-alt' ></i></td>
							</tr>
                            <tr>
                                <td>Butamirate citrate</td>
								<td>Sinecod Forte</td>
								<td>dry cough</td>
								<td>2 bottles</td>
                                <td>tbsp</td>
                                <td><i class='bx bx-edit-alt' ></i></td>
							</tr>
                            <tr>
                                <td>Paracetamol</td>
								<td>RiteMed</td>
								<td>treat pain <br> reduce a high temperature (fever)</td>
								<td>40 tablets</td>
                                <td>mg</td>
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
		var btn = document.getElementById("add-medicine");
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
		
		//para maselect yung napili sa dropdown DI PA SURE
		function dropdownTip(){
			var value = document.getElementById('select').value;
			//document.getElementByID("result").innerHTML = value;
    	}
		//inserting new data
		const addPatientformEl = document.querySelector('.form')
		addPatientformEl.addEventListener('submit', event => {
			event.preventDefault();

			const formdata = new FormData(addPatientformEl);
			const data = Object.fromEntries(formdata);

			console.log(data);

			fetch('https://localhost:7139/Medicine/insertNew', {
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
					window.location.replace("http://localhost/Green-Breeze-Home-for-Elderly/medicine.php");

				})
				.catch(error => console.log(error));

		});
	</script>

</body>
</html>
