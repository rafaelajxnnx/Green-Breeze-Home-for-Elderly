<!DOCTYPE html>
<html lang="en">

<?php include 'shared/header.php' ?>
<style>
	.container {

		margin: auto;
		margin-left: 0px;
	}

	img {
		max-width: 100%;
	}

	.inbox_people {
		background: #efe6e6 none repeat scroll 0 0;
		float: left;
		overflow: hidden;
		width: 40%;
		border-right: 1px solid #c4c4c4;

	}

	.inbox_msg {
		border: 1px solid #c4c4c4;
		clear: both;
		overflow: hidden;
	}

	.top_spac {
		margin: 20px 0 0;
	}


	.recent_heading {
		float: left;
		width: 40%;
	}

	.srch_bar {
		display: inline-block;
		text-align: right;
		width: 60%;
	}

	.headind_srch {
		padding: 10px 29px 10px 20px;
		overflow: hidden;
		border-bottom: 1px solid #c4c4c4;
	}

	.recent_heading h4 {
		color: #05728f;
		font-size: 21px;
		margin: auto;
	}

	.srch_bar input {
		border: 1px solid #cdcdcd;
		border-width: 0 0 1px 0;
		width: 80%;
		padding: 2px 0 4px 6px;
		background: none;
	}

	.srch_bar .input-group-addon button {
		background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
		border: medium none;
		padding: 0;
		color: #707070;
		font-size: 18px;
	}

	.srch_bar .input-group-addon {
		margin: 0 0 0 -27px;
	}

	.chat_ib h5 {
		font-size: 15px;
		color: #464646;
		margin: 0 0 8px 0;
	}

	.chat_ib h5 span {
		font-size: 13px;
		float: right;
	}

	.chat_ib p {
		font-size: 14px;
		color: #989898;
		margin: auto
	}

	.chat_img {
		float: left;
		width: 11%;
	}

	.chat_ib {
		float: left;
		padding: 0 0 0 15px;
		width: 88%;
	}

	.chat_people {
		overflow: hidden;
		clear: both;
	}

	.chat_list {
		border-bottom: 1px solid #c4c4c4;
		margin: 0;
		padding: 18px 16px 10px;
	}

	.inbox_chat {
		height: 550px;
		overflow-y: scroll;
	}



	.incoming_msg_img {
		display: inline-block;
		width: 6%;
	}

	.received_msg {
		display: inline-block;
		padding: 0 0 0 10px;
		vertical-align: top;
		width: 92%;
	}

	.received_withd_msg p {
		background: #ebebeb none repeat scroll 0 0;
		border-radius: 3px;
		color: #646464;
		font-size: 14px;
		margin: 0;
		padding: 5px 10px 5px 12px;
		width: 100%;
	}

	.time_date {
		color: #747474;
		display: block;
		font-size: 12px;
		margin: 8px 0 0;
	}

	.received_withd_msg {
		width: 57%;
	}

	.mesgs {
		float: left;

		width: 60%;
	}

	.chat-section {
		padding: 30px 15px 0 25px;
		overflow: auto;
	}

	.sent_msg p {
		background: #05728f none repeat scroll 0 0;
		border-radius: 3px;
		font-size: 14px;
		margin: 0;
		color: #fff;
		padding: 5px 10px 5px 12px;
		width: 100%;
	}

	.outgoing_msg {
		overflow: hidden;
		margin: 26px 0 26px;
	}

	.sent_msg {
		float: right;
		width: 46%;
	}

	.input_msg_write input {
		background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
		border: medium none;
		color: #4c4c4c;
		font-size: 15px;
		min-height: 48px;
		width: 100%;
	}

	.type_msg {
		margin-bottom: 10px;
		border: 1px solid #c4c4c4;
		position: relative;
	}

	.msg_send_btn {
		background: #05728f none repeat scroll 0 0;
		border: medium none;
		border-radius: 50%;
		color: #fff;
		cursor: pointer;
		font-size: 17px;
		height: 33px;
		position: absolute;
		right: 0;
		top: 11px;
		width: 33px;
	}

	.messaging {
		padding: 0 0 50px 0;
	}

	.msg_history {
		height: 516px;
		overflow-y: auto;
	}
</style>

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
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<!--<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>-->
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/headnursepic.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Message</h1>
					<ul class="">
						<li style="color: #757575;">
							Message
						</li>
					</ul>
				</div>
			</div>

			<div class="">
				<div class="messaging">
					<div class="inbox_msg">
						<div class="mesgs">
							<div style="border-bottom: 1px solid #c4c4c4;padding-left:20px;padding-top:14px;padding-bottom:14px;">
								<strong id="reciver-name"></strong>
							</div>
							<div class="chat-section">
								<div class="msg_history" id="startChat" style="text-align: center;">
									<img style="height: 200px;width:200px" src="https://icons.iconarchive.com/icons/bootstrap/bootstrap/512/Bootstrap-chat-icon.png">
                                     <br><br><br><span>Start Conversation</span>
								</div>
								<div class="msg_history" id="user1" style="display: none;">
									<div class="incoming_msg">
										<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png"> </div>
										<div class="received_msg">
											<div class="received_withd_msg">
												<p>Dear Client i have done your work.</p>
												<span class="time_date"> 11:01 AM | May 27</span>
											</div>
										</div>
									</div>
									<div class="outgoing_msg">
										<div class="sent_msg">
											<p>Nice</p>
											<span class="time_date"> 11:02 AM | May 27</span>
										</div>
									</div>
								</div>

								<div class="msg_history" id="user2" style="display: none;">
									<div class="incoming_msg">
										<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png"> </div>
										<div class="received_msg">
											<div class="received_withd_msg">
												<p>Dear Client please give us good rating.</p>
												<span class="time_date"> 11:01 AM | May 27</span>
											</div>
										</div>
									</div>
									<div class="outgoing_msg">
										<div class="sent_msg">
											<p>Ok</p>
											<span class="time_date"> 11:02 AM | May 27</span>
										</div>
									</div>
								</div>

								<div class="type_msg" id="type_msg" style="display: none;">
									<div class="input_msg_write">
										<input type="text" class="write_msg" id="message" placeholder="Type a message" />
										<button class="msg_send_btn" type="button" onclick="sendMsg()"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
									</div>
								</div>
							</div>
						</div>

						<div class="inbox_people">
							<div class="headind_srch">
								<div class="recent_heading">
									<h4>Recent</h4>
								</div>
								<div class="srch_bar">
									<div class="stylish-input-group">
										<input type="text" class="search-bar" placeholder="Search">
										<span class="input-group-addon">
											<button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
										</span>
									</div>
								</div>
							</div>
							<div class="inbox_chat">
								<div class="chat_list" id="rais" onclick="handleClick(this)">
									<div class="chat_people chat_active">
										<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"> </div>
										<div class="chat_ib">
											<h5 id="user1-name">Rais ur Rehman</h5>
											<p>Dear Client i have done your work.</p>
										</div>
									</div>
								</div>
								<div class="chat_list" id="mohsin" onclick="handleClick(this)">
									<div class="chat_people">
										<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"> </div>
										<div class="chat_ib">
											<h5 id="user2-name">Mohsin</h5>
											<p>Dear Client please give us good rating.</p>
										</div>
									</div>
								</div>


							</div>
						</div>

						<input type="hidden" id="activeChat" value="">

					</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<!-- <script src="script/script.js"></script> -->
	<script>
		function handleClick(element) {
			// Access the id property of the clicked element
			var id = element.id;
			var activeuser = 'chat_list';
			var elements = document.getElementsByClassName(activeuser);
			for (var i = 0; i < elements.length; i++) {
				elements[i].style.backgroundColor = '#f8f8f8';
			}


			if (id === "rais") {

				document.getElementById('startChat').style.display = 'none';
				document.getElementById('type_msg').style.display = 'block';
				document.getElementById('user1').style.display = 'block';
				document.getElementById('user2').style.display = 'none';
				var name = document.getElementById('user1-name').textContent;
				document.getElementById('reciver-name').innerHTML = name;
				document.getElementById(id).style.backgroundColor = '#ebebeb';
				document.getElementById('activeChat').value = 'user1';


			}
			if (id === "mohsin") {
				document.getElementById('startChat').style.display = 'none';
				document.getElementById('type_msg').style.display = 'block';
				document.getElementById('user1').style.display = 'none';
				document.getElementById('user2').style.display = 'block';
				var name = document.getElementById('user2-name').textContent;
				document.getElementById('reciver-name').innerHTML = name;
				document.getElementById(id).style.backgroundColor = '#ebebeb';
				document.getElementById('activeChat').value = 'user2';

			}


		}

		function sendMsg() {

			var inputValue = document.getElementById('message').value;
			var activeChatID = document.getElementById('activeChat').value;

			var outgoingMsg = document.querySelector('.msg_history');

			var message = `<div class="outgoing_msg">
                  <div class="sent_msg">
                     <p>` + inputValue + `</p>
                     <span class="time_date"> 11:02 AM | May 27</span>
                  </div>
               </div>`;

			document.getElementById(activeChatID).insertAdjacentHTML('beforeend', message);
		}
	</script>

</body>

</html>