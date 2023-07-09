<!DOCTYPE html>
<html lang="en">

<?php include 'shared/header.php' ?>
<header>
	<style>
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

		.onsuccess {
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
		.onoverdue {
			background: var(--orange);
			color: #fff;
			padding: 5px 10px;
			border-radius: 20px;
			font-size: 10px;
			font-weight: bold;
			text-transform: uppercase;
			letter-spacing: 1px;
		}

		.onProgressCountStyle,
		.onSuccessCountStyle,
		.onOverDueCountStyle {
			font-size: 24px;
			font-weight: bold;
			color: #0C0C1E;
			/* Add any other desired styling properties */
		}
	</style>
</header>

<body>

	<?php include 'shared/sidebar.php' ?>

	<!-- CONTENT -->
	<section id="content">
		<p id="TestApiKey"></p>
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
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<!--<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>-->
					</ul>
				</div>
				<!--<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>-->
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check'></i>
					<span class="text">
						<span id="onSuccessCount"></span>
						<p>DONE</p>
					</span>
				</li>
				<li>
					<i class='bx bx-loader-circle'></i>
					<span class="text">
						<!-- <h3>12</h3> -->
						<span id="onProgressCount"></span>
						<p>ON PROGRESS</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-error'></i>
					<span class="text">
						<span id="onOverDueCount"></span>
						<p>OVER DUE</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Progress Today</h3>
						<!--<i class='bx bx-search' ></i>-->
						<i class='bx bx-filter'></i>

					</div>
					<table>
						<thead>
							<tr>

							</tr>
						</thead>

					</table>
					<table id="myTable">
						<thead>
							<tr>
								<th>Date</th>
								<th>Time</th>
								<th>Patient Name</th>
								<th>Medication</th>
								<th>Assigned Nurse</th>
								<th>Status</th>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

	<script>
		// JavaScript to retrieve and display the data

		// Get the current date and previous date in the desired format
		var currentDate = moment().format('YYYY-MM-DD');
		// var previousDate = moment().subtract(1, 'day').format('YYYY-MM-DD');
		// console.log('Current Date:', currentDate);
		// console.log('Previous Date:', previousDate);

		// Fetch the schedule details for both the current date and previous date
		// fetchScheduleDetails(currentDate);
		// fetchScheduleDetails(previousDate);
		
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


		fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/Schedule/GetScheduleDetailsbyTime/' + currentDate)
			.then(response => {
				if (response.ok) {
					return response.json();

				} else {
					throw new Error('Network response was not ok');
				}
			})
			.then(data => {
				// Select the table body element
				const tableBody = document.querySelector('#myTable tbody');
				console.log('Table body element:', tableBody);

				data.sort((a, b) => a.scheduleTime.localeCompare(b.scheduleTime));

				//----------------------------------------------------------------------------//
				const onSuccessItems = data.filter(item => item.status === true);
				const onSuccessCount = onSuccessItems.length;

				console.log('ON SUCCESS:', onSuccessItems);
				console.log('Count:', onSuccessCount);

				// Update the HTML elements to display the count
				const onSuccessCountElement = document.getElementById('onSuccessCount');

				onSuccessCountElement.textContent = onSuccessCount;
				onSuccessCountElement.classList.add('onSuccessCountStyle');
				//-----------------------------------------------------------------------------//
				const currentTime = new Date();
				const onProgressItems = data.filter(item => item.status === false && new Date(item.scheduleTime) >= currentTime);
				const onProgressCount = onProgressItems.length;

				console.log('ON PROGRESS:', onProgressItems);
				console.log('Count:', onProgressCount);

				// Update the HTML elements to display the count
				const onProgressCountElement = document.getElementById('onProgressCount');

				onProgressCountElement.textContent = onProgressCount;
				onProgressCountElement.classList.add('onProgressCountStyle');
				//-----------------------------------------------------------------------------//

				const onOverDueItems = data.filter(item => item.status === false && new Date(item.scheduleTime) < currentTime);
				const onOverDueCount = onOverDueItems.length;

				console.log('ON OVERDUE:', onOverDueItems);
				console.log('Count:', onOverDueCount);

				// Update the HTML elements to display the count
				const onOverDueCountElement = document.getElementById('onOverDueCount');

				onOverDueCountElement.textContent = onOverDueCount;
				onOverDueCountElement.classList.add('onOverDueCountStyle');

				// Create a row for each item in the data array
				data.forEach(item => {
					console.log('Current item:', item);
					const row = tableBody.insertRow();
					// Create cells for the name and age columns
					const date = row.insertCell();
					const time = row.insertCell();
					const patient = row.insertCell();
					const medication = row.insertCell();
					const nurse = row.insertCell();
					const status = row.insertCell();

					// Set the text content of the cells to the item's values
					date.textContent = formatDate(item.scheduleTime);
					patient.textContent = item.patientName;
					nurse.textContent = item.nurseName;
					medication.textContent = item.medicineName;
					time.textContent = formatTime(item.scheduleTime);

					// Set the text content of the status cell

					const currentTime = new Date();
					console.log('Date used for OVERDUE: INSIDEEEE', currentTime + item.scheduleTime);

					if (item.status === false && new Date(item.scheduleTime) < currentTime){
						const statusSpan = document.createElement('span');
						statusSpan.textContent = 'Over Due';
						statusSpan.classList.add('onoverdue');

						status.appendChild(statusSpan);

					} else if (item.status === false) {
						const statusSpan = document.createElement('span');
						statusSpan.textContent = 'Pending';
						statusSpan.classList.add('onprogress'); // Apply the CSS class

						status.appendChild(statusSpan);
					} else  {
						const statusSpan = document.createElement('span');
						statusSpan.textContent = 'Done';
						statusSpan.classList.add('onsuccess'); // Apply the CSS class

						status.appendChild(statusSpan);
					}
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

		function searchTable() {
			var input, filter, table, tr, td1, td2, td3, td4, td5,td6, i, txtValue1, txtValue2, txtValue3, txtValue4, txtValue5,txtValue6;
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