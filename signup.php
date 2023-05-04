<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login-signup.css">
	<link rel="icon" href="Green-Breeze-Home-for-Elderly/img/Logo-illustrated.png" type="image/x-icon">
	<title>GREEN BREEZE HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"></head>

<body>
    <div class="login-page">
        <form class="form">
                <p class="greenbreeze-name" style="font-size: 25px; margin-bottom: -15px; margin-top: 0px">SIGN UP</p>
                <p class="greenbreeze-name">GREEN BREEZE HOME</p>
                <input type="text" name="firstName" id="firstName" placeholder="first name" />
                <input type="text" name="lastName" id="lastName" placeholder="last name" />
                <input type="text" name="email" id="email" placeholder="email address" />
                <input type="text" name="userName" id="userName" placeholder="username" />
                <input type="text" name="contact" id="contact" placeholder="mobile number" />
                <input type="text" name="role" id="role" placeholder="role" value ="Admin"/>
                <input type="password" name="password" id="password" placeholder="set a password" />
                
                <i class="fas fa-eye" onclick="show()"></i> 
                
                <p class="message"></p>
                <button type="submit">SIGN UP</button>

        </form>
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

    
    

    //--------------------another code---------------------------------------//
    


    const signupformEl = document.querySelector('.form')

    signupformEl.addEventListener('submit', event => {
        event.preventDefault();

        const formdata = new FormData(signupformEl);
        const data = Object.fromEntries(formdata);

        console.log(data);

        fetch('https://localhost:7139/User/signup', {
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
            })
            .catch(error => console.log(error));

    });
</script>

</html>