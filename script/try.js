// Retrieve data from the database and populate the dropdown
fetch('https://localhost:7139/Medicine/GetAllMedicine')
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
    const dropdown = document.getElementById('myDropdown');

    // Populate the dropdown with the retrieved data
    data.forEach(item => {
        const option = document.createElement('option');
        option.textContent = item.DrugName;
        option.value = item.id;
        dropdown.appendChild(option);
    });
})
.catch(error => {
    console.error('Error:', error);
});
