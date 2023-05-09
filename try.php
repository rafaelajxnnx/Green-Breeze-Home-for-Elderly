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
        fetch('https://localhost:7139/Medicine/GetAllMedicine')
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
            fetch('https://localhost:7139/UpdateMedicineInfo/{ID}' + itemId, {
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