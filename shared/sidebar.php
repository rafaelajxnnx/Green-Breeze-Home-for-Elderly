<body><!-- SIDEBAR -->
<section id="sidebar">

    <a href="index.php" class="brand">

        <img src="img/Logo-illustrated.png">
        <span class="text">GREEN BREEZE HOME</span>
    </a>

    <ul class="side-menu top">
        <li class="">
            <a href="index.php">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="">
            <a href="nurses.php">
                <i class='bx bx-plus-medical'></i>
                <span class="text">Nurses</span>
            </a>
        </li>
        <li class="">
            <a href="patients.php">
                <i class='bx bxs-group'></i>
                <span class="text">Patients</span>
            </a>
        </li>
        <li class="">
            <a href="medicine.php">
                <i class='bx bxs-capsule'></i>
                <span class="text">Medicine</span>
            </a>
        </li>
        <li class="">
            <a href="schedule.php">
                <i class='bx bxs-time-five'></i>
                <span class="text">Schedule</span>
            </a>
        </li>
        <li class="">
            <a href="message.php">
                <i class='bx bxs-message-dots'></i>
                <span class="text">Message</span>
            </a>
        </li>
        <li class="">
            <a href="announcement.php">
                <i class='bx bxs-news'></i>
                <span class="text">Announcement</span>
            </a>
        </li>
        
    </ul>

    <ul class="side-menu">
        <li>
            <a href="signup.php">
                <i class='bx bxs-cog'></i>
                <span class="text">Admins</span>
            </a>
        </li>
        <li>
            <a href="login.php" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->
<script>
const allSideMenu = document.querySelectorAll('#sidebar .side-menu .top li a');

		allSideMenu.forEach(item => {
			const li = item.parentElement;

			item.addEventListener('click', function () {
				allSideMenu.forEach(i => {
					i.parentElement.classList.remove('active');
				})
				li.classList.add('active');
			})
		});
</script>
</body>
