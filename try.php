<!DOCTYPE html>
<html lang="en">
<header>
</header>

<body>
    <form class="form">
        <h3>Edit Medicine</h2>
            <div class="two-rows" style="margin:0;padding:0">
                <input type="text" name="drugName" id="drugName" />
                <input type="text" name="brandName" id="brandName" />
            </div>
            <div class="one-row">
                <input type="text" name="condition" id="condition" />
            </div>
            <div class="two-rows" style="margin:0;padding:0">
                <input type="text" name="remainQty" id="remainQty" />
                <input type="text" name="dosage" id="dosage" />

            </div>
            <button type="submit">SAVE</button>
    </form>

    <script>

        const form = document.querySelector('form');

        const itemId = form.dataset.itemId;

        // Fetch the item data from the server
        fetch('https://localhost:7139/api/Medicine/GetAllMedicine')
            .then(response => response.json())
            .then(data => {
                // Populate the form with the item data
                drugName.value = data.drugName;
                brandName.value = data.brandName;
                condition.value = data.condition;
                remainQty.value = data.remainQty;
                dosage.value = data.dosage;

            })
            .catch(error => {
                console.error('Error fetching item data:', error);
            });


        // Add an event listener for the 'submit' event on the form inside the modal
        form.addEventListener('submit', function (event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Get the form data and do something with it (e.g. send it to the server via AJAX)
            const formData = new FormData(form);
            const itemId = formData.get('id');
            fetch('https://localhost:7139/api/UpdateMedicineInfo/{ID}' + itemId, {
                method: 'PUT',
                body: formData
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Item updated:', data);
                    // Hide the modal
                    // Reload the page to show the updated data in the table
                    location.reload();
                })
                .catch(error => {
                    console.error('Error updating item:', error);
                });
        });
    </script>
</body>

</html>

//updating new data
		const updateMedicineformEl = document.querySelector('.formupdate')
		updateMedicineformEl.addEventListener('submit', event => {
			event.preventDefault();

			const formdata = new FormData(updateMedicineformEl);
			const data = Object.fromEntries(formdata);
			const itemId = item.id;

			console.log(data);

			fetch('https://localhost:7139/api/UpdateMedicineInfor/{ID}' + itemId, {
				method: 'Put',
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
						location.reload();

				})
				.catch(error => console.log(error));

		});


        const editformEl = document.querySelector('.formupdate');
						const formdata = new FormData(editformEl);
						const data = Object.fromEntries(formdata);

						console.log(data);

						// Get the form data from the server
						fetch('https://localhost:7139/api/Medicine/GetAllMedicine')
							.then(response => response.json())
							.then(data => {
								// Populate the form with the item data
								data.elements.id.value = item.id;
								data.elements.drugName.value = item.drugName;
								data.elements.drugName.placeholder = item.drugName;
								data.elements.brandName.value = item.brandName;
								data.elements.brandName.placeholder = item.brandName;
								data.elements.condition.value = item.condition;
								data.elements.condition.placeholder = item.condition;
								data.elements.remainQty.value = item.remainQty;
								data.elements.remainQty.placeholder = item.remainQty;
								data.elements.dosage.value = item.dosage;
								data.elements.dosage.placeholder = item.dosage;
							})




                            // Add an event listener for the 'submit' event on the form inside the modal
		const editformEl = document.querySelector('.formupdate');
		editformEl.addEventListener('submit', function (event) {
			// Prevent the default form submission behavior
			event.preventDefault();

			// Get the form data and do something with it (e.g. send it to the server via AJAX)
			const formdata = new FormData(editformEl);
			const data = Object.fromEntries(formdata);
			console.log(data);

			fetch('https://localhost:7139/api/UpdateMedicineInfo/' + item.id, {
				method: 'Put',
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
					location.reload();

				})
				.catch(error => console.log(error));
		});
		//end of Update



		CODE SA BABA NG <SIDEBAR class="PHP"><script>
    // Get all the li elements
    var liElements = document.getElementsByTagName("li");

    // Add a click event listener to each li element
    for (var i = 0; i < liElements.length; i++) {
        liElements[i].addEventListener("click", function () {
            // Remove the active class from all li elements
            for (var j = 0; j < liElements.length; j++) {
                liElements[j].classList.remove("active");
            }

            // Add the active class to the clicked li element
            this.classList.add("active");
        });
    }


    // Add active class to the current button (highlight it)
    var a = document.querySelectorAll(".side-menu li a");
    for (var i = 0, length = a.length; i < length; i++) {
        a[i].onclick = function () {
            var b = document.querySelector(".side-menu li.active");
            if (b) b.classList.remove("active");
            this.parentNode.classList.add('active');
        };
    }

</script> </SIDEBAR>