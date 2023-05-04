<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style/style.css">
	<link rel="icon" href="img/Logo-illustrated.png" type="image/x-icon">
	<title>GREEN BREEZE HOME</title>

	<script>
		const localToken = JSON.parse(localStorage.getItem('AccessKey'));

		const TOKEN = () => { 
			if ( JSON.parse(localStorage.getItem('AccessKey')).accessToken ) 
			{
				const accesstokenty = JSON.stringify(localToken.accessToken);
			}else {
				const accesstokenty = '';
			}
		};
		
		if(!TOKEN){
			window.location.href = "http://localhost/Green-Breeze-Home-for-Elderly/login.php" ;
		}
	</script>
</head>