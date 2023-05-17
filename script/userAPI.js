
// const urlgetuser = 'https://localhost:7139/GetAllUser';
// async function getUserv2(url) {
//     const response = await fetch(url);

//     // Storing data in form of JSON
//     var data = await response.json();
//     console.log(data);
//     if (response) {
//         // hideloader();
//     }

// }

// getUserv2(urlgetuser);



// Log In

// const loginurl = 'https://localhost:7139/login';

// async function loginv3(url) {
//     // const username = document.getElementById("username").value;
//     // const password = document.getElementById("password").value;

//     const data2 = {
//         userName: "Splint",
//         password: "ReinanPogi"
//     };

//     const response = await fetch(url, {
//         method: 'POST',
//         body: JSON.stringify(data2),
//         headers: {
//             'Content-Type': 'application/json'
//         }
//     });

//     // Storing data in form of JSON
//     var data = await response.json();
//     console.log(data);
//     if (response.ok) {
//         console.log("Success")
//         window.location.replace("http://localhost/Green-Breeze-Home-for-Elderly/index.php");
//     } else {
//         alert("HTTP-Error: " + response.status);
//     }
// }

//             .then(res => res.json())
//             .then(data => console.log(data))
//             .catch(error => console.log(error));

// loginv3(loginurl);


const loginformEl = document.querySelectorAll('.form')

loginformEl.addEventListener('submit', event => {
    event.preventDefault();

    const formdata = new FormData(loginformEl);
    const data = Object.fromEntries(formdata);

    console.log(data);

    fetch('https://localhost:7139/api/User/login', {
        method: 'Post',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
        .then(res => res.json())
        .then(data => console.log(data))
        .catch(error => console.log(error));
});
