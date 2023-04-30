<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Login</title>

</head>

<body>
    <main>
        <form class="form">
            <h1>Login</h1>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="username">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <section>
                <button type="submit">Login</button>
            </section>
        </form>
    </main>
</body>
<!-- Transfer to UserAPI -->
<script>
    const loginformEl = document.querySelector('.form')

    loginformEl.addEventListener('submit', event => {
        event.preventDefault();

        const formdata = new FormData(loginformEl);
        const data = Object.fromEntries(formdata);

        console.log(data);

        fetch('https://localhost:7139/login', {
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