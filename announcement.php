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
            height: 50%;
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
            overflow: hidden;
            /* Add this line to hide overflowing content */
        }

        /* Adjust the image size and shape */
        .image-container img {
            max-width: 100%;
            max-height: 100%;
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
            <!-- <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a> -->
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
                    <h1>Announcements</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Admin</a>
                        </li>
                        <!--<li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>-->
                    </ul>
                </div>
            </div>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>List of Announcements</h3>
                        <!--<input type="text" id="search-bar" placeholder="Search" onkeyup="searchTable()" />-->
                        <!--<i class='bx bx-search'></i>-->

                        <i class='bx bx-filter'></i>
                        <i id="add-admin" class='bx bx-plus'></i>
                    </div>
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Description</th>
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

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">

            <span class="close">&times;</span>

            <form class="form">
                <h3>Add New Announcement</h3>
                <p id="error-message" class="error"></p>

                <input type="text" name="date" id="date" placeholder="date" hidden />

                <label for="file-upload" id="newsPath" class="custom-file-upload">Upload Cover Image</label><input
                    id="file-upload" type="file" name="File" />

                <div class="two-rows" style="margin:0;padding:0">
                    <input type="text" name="title" id="title" placeholder="Title" />
                    <input type="text" name="description" id="description" placeholder="Description" />
                </div>

                <button type="submit">ADD</button>
            </form>
        </div>

    </div>
    <!--This code will open a modal content to edit the Medicine--->
    <div id="editModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="editclose">&times;</span>
            <form class="formupdate">
                <h3>Edit Announcement</h3>
                <div class="image-container">
                    <img id="image" name="ProfilePic" src="">
                </div>
                <input type="text" name="date" id="date" placeholder="date" hidden />

                <input type="text" name="id" id="id" placeholder="ID" hidden />

                <input type="text" name="role" id="role" placeholder="Role" hidden />

                <label for="file-upload" id="newsPath" class="custom-file-upload">Upload Cover Image</label><input
                    id="file-upload" type="file" name="File" />

                <div class="two-rows" style="margin:0;padding:0">
                    <input type="text" name="title" id="title" placeholder="Title" />
                    <input type="text" name="description" id="description" placeholder="Description" />
                </div>

                <button type="submit">SAVE</button>
            </form>
        </div>

    </div>



    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script>

        var currentDate = moment().format('YYYY-MM-DD');
        document.getElementById('date').value = currentDate;

        // sa modal
        var modal = document.getElementById("myModal");
        // Get the button that opens the modal
        var btn = document.getElementById("add-admin");
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
        const addAdminformEl = document.querySelector('.form')

        addAdminformEl.addEventListener('submit', event => {
            event.preventDefault();

            const formdata = new FormData(addAdminformEl);
            const data = Object.fromEntries(formdata);

            console.log(data);

            fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/News/insertNew', {
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
                    window.location.replace("announcement.php");

                })
                .catch(error => console.log(error));

        });

        //getting data
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
        //JavaScript to retrieve and display the data
        fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/News/GetAllNews')
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
                    const title = row.insertCell();
                    const date = row.insertCell();
                    const description = row.insertCell();

                    const edit = row.insertCell();
                    const del = row.insertCell();

                    // Set the text content of the cells to the item's values
                    date.textContent = formatDate(item.date);

                    // Set the maximum number of characters to display in the title and description
                    const maxTitleLength = 20;
                    const maxDescriptionLength = 100;

                    // Truncate the title if it exceeds the maximum length
                    const truncatedTitle = item.title.length > maxTitleLength ? item.title.substring(0, maxTitleLength) + '...' : item.title;

                    // Truncate the description if it exceeds the maximum length
                    const truncatedDescription = item.description.length > maxDescriptionLength ? item.description.substring(0, maxDescriptionLength) + '...' : item.description;

                    // Set the text content of the title and description cells to the truncated versions
                    title.textContent = truncatedTitle;
                    description.textContent = truncatedDescription;


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
                        fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/News/GetNews/' + item.id)
                            .then(response => response.json())
                            .then(data => {
                                // Populate the form with the item data
                                const imagePath = item.newsPath;
                                const baseUrl = "https://rafaelajxnnxx-001-site1.ftempurl.com/"; // Replace with your base URL
                                const completePath = baseUrl + imagePath;
                                const imageElement = document.getElementById('image');
                                imageElement.src = completePath;


                                editformEl.elements.id.value = item.id;
                                editformEl.elements.title.value = item.title;
                                editformEl.elements.title.placeholder = "Title";
                                editformEl.elements.description.value = item.description;
                                editformEl.elements.description.placeholder = "Description";
                                editformEl.elements.date.value = item.currentDate;




                                //updating new data
                                const updateMedicineformEl = document.querySelector('.formupdate')

                                updateMedicineformEl.addEventListener('submit', event => {
                                    event.preventDefault();

                                    const formdata = new FormData(updateMedicineformEl);
                                    const data = Object.fromEntries(formdata);
                                    const itemId = item.id;

                                    console.log(data);

                                    fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/News/UpdateNews/' + itemId, {
                                        method: 'PUT',
                                        //headers: {
                                        //	'Content-Type': 'application/json'
                                        //},
                                        body: formdata

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
                        fetch('https://rafaelajxnnxx-001-site1.ftempurl.com/api/News/DeleteNews/' + item.id, {
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
        function searchTable() {
            var input, filter, table, tr, td1, td2, td3, td4, td5, td5, i, txtValue1, txtValue2, txtValue3, txtValue4, txtValue5, txtValue6;
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