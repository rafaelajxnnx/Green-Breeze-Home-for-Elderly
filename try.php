<!DOCTYPE html>
<html>
<head>

  <style>
.card {
  margin-bottom: 10px;
}

.card-header {
  background-color: #f0f0f0;
  padding: 10px;
  cursor: pointer;
}

.accordion-button {
  font-weight: bold;
}

.collapse {
  background-color: #fff;
  padding: 10px;
}

.card-body {
  margin: 0;
}


  </style>
</head>
<body>

<div id="accordion-body"></div>

  <script>
fetch('https://localhost:7139/api/MedHistory/GetAllMedHistory')
  .then(response => {
    if (response.ok) {
      return response.json();
    } else {
      throw new Error('Network response was not ok');
    }
  })
  .then(data => {
    // Select the table body element
    const tableBody = document.getElementById('accordion-body');
    console.log('Data received from server:', data);

    // Create a row for each item in the data array
    data.forEach(item => {
      console.log('Current item:', item);

      // Create the accordion card
      const card = document.createElement('div');
      card.className = 'card';

      // Create the card header
      const cardHeader = document.createElement('div');
      cardHeader.className = 'card-header';

      // Create the accordion button
      const button = document.createElement('button');
      button.className = 'accordion-button';
      button.type = 'button';
      button.setAttribute('data-bs-toggle', 'collapse');
      button.setAttribute('data-bs-target', `#collapse-${item.id}`);
      button.setAttribute('aria-expanded', 'false');
      button.setAttribute('aria-controls', `collapse-${item.id}`);
      button.textContent = item.title;

      // Append the button to the card header
      cardHeader.appendChild(button);

      // Create the collapsible content
      const collapse = document.createElement('div');
      collapse.id = `collapse-${item.id}`;
      collapse.className = 'collapse';
      collapse.setAttribute('aria-labelledby', `heading-${item.id}`);
      collapse.setAttribute('data-bs-parent', '#accordion-body');

      // Create the card body
      const cardBody = document.createElement('div');
      cardBody.className = 'card-body';
      cardBody.textContent = item.description;

      // Append the card body to the collapsible content
      collapse.appendChild(cardBody);

      // Append the card header and collapsible content to the card
      card.appendChild(cardHeader);
      card.appendChild(collapse);

      // Append the card to the table body
      tableBody.appendChild(card);
    });
  })
  .catch(error => {
    console.error('Error:', error);
  });



  </script>
</body>
</html>


<button class="accordion" onclick="toggleAccordion(1)">Prescription given on May 1, 2023</button>
			<div class="panel">
				<p>Doctor: Dra. Janella Salvador</p>
				<p>Condition: <br>Diarrhea <br> Headaches</p>
				<img src="img/prescription.png" alt="Medication" style="width:100%;height:100%">
			</div>

			










      
		/* Accordion styles */
		.hsviewmodal-content .accordion {
			background-color: #eee;
			color: #444;
			cursor: pointer;
			padding: 10px;
			width: 100%;
			text-align: left;
			border: none;
			outline: none;
			transition: 0.4s;
			border-radius: 0px;

			margin: 5px 0 0 0;
		}

		.hsviewmodal-content .accordion:hover {
			background-color: #ccc;

		}

		.hsviewmodal-content .accordion:after {
			content: '\002B';
			color: #777;
			font-weight: bold;
			float: right;
			margin-left: 5px;

		}

    .hsviewmodal-content .active:after {
			content: "\2212";


		}

		.hsviewmodal-content .panel {
			padding: 0 20px;
			width: 100%;

			background-color: white;
			display: none;
			overflow: hidden;
			font-size: 12px;

		}




    
    function toggleAccordion(index) {
							var panel = document.getElementsByClassName("panel")[index];
							panel.classList.toggle("active");

							// Fetch prescription information from the API
							fetch('https://localhost:7139/api/MedHistory/GetMedHistoryofSpecificPatient/' + item.id)
								.then(response => response.json())
								.then(data => {
									console.log(data);
									console.log(data.doctor);
									console.log(data.condition);

									const imagePath = item.prescriptionPath;
									const baseUrl = "https://localhost:7139/"; // Replace with your base URL
									const completePath = baseUrl + imagePath;

									var doctorElement = document.getElementById("doctor");
									var conditionElement = document.getElementById("condition");
									var prescriptionImgElement = document.getElementById("prescriptionImg");

									// Extract and display prescription details
									doctorElement.textContent = "Doctor: " + data.doctor;
									conditionElement.innerHTML = "Condition" + data.condition.join("<br>");
									prescriptionImgElement.src = data.completePath;
								})
								.catch(error => console.error(error));
						}











  

            /* Accordion styles */
		.hsviewmodal-content .accordion {
			background-color: #eee;
			color: #444;
			cursor: pointer;
			padding: 10px;
			width: 100%;
			text-align: left;
			border: none;
			outline: none;
			transition: 0.4s;
			border-radius: 0px;

			margin: 5px 0 0 0;
		}

		.hsviewmodal-content .accordion:hover {
			background-color: #ccc;

		}

		.hsviewmodal-content .accordion:after {
			content: '\002B';
			color: #777;
			font-weight: bold;
			float: right;
			margin-left: 5px;

		}

		.hsviewmodal-content .active:after {
			content: "\2212";


		}

		.hsviewmodal-content .panel {
			padding: 0 20px;
			width: 100%;
			height: 20%;
			background-color: white;
			display: none;
			overflow: hidden;
			font-size: 12px;

		}