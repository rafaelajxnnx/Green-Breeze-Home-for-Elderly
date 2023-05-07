<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login-signup.css">
	<link rel="icon" href="img/Logo-illustrated.png" type="image/x-icon">
	<title>GREEN BREEZE HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>
    <div class="login-page">
        <form class="form">
                
                <img src="img/Logo-illustrated.png">
                <p class="greenbreeze-name">GREEN BREEZE HOME</p>
                <input type="text" name="username" id="username" placeholder="username">
                <input type="password" name="password" id="password" placeholder="password">
                <i class="fas fa-eye" onclick="show()"></i> 
                <br>
                
                <a class="forgot-pass" href="#">Forgot Password?</a>
                <br>
                <br>
                <br>
                <button type="submit">LOGIN</button>
                <p class="message"></p>
                <!--<button type="button" onclick="window.location.href='signup.php'">SIGN UP</button>-->

        </form>    
    </div>
    

</body>
<!-- Transfer to UserAPI -->
<script>
     function show() {
        var password = document.getElementById("password");
        var icon = document.querySelector(".fas");

        // ========== Checking type of password ===========
        if (password.type === "password") {
          password.type = "text";
        } else {
          password.type = "password";
        }
      }
    const loginformEl = document.querySelector('.form')

    loginformEl.addEventListener('submit', event => {
        event.preventDefault();

        const formdata = new FormData(loginformEl);
        const data = Object.fromEntries(formdata);

        console.log(data);

        fetch('https://localhost:7139/User/login', {
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
                localStorage.setItem('AccessKey', JSON.stringify(data))
                window.location.replace("http://localhost/Green-Breeze-Home-for-Elderly/index.php");
            })
            .catch(error => console.log(error));

    });
</script>

</html>