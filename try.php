<!DOCTYPE html>
<html>
<head>

  <style>
h1 {
  text-align: center;
}

#timeForm {
  text-align: center;
  margin-bottom: 20px;
}

#clock {
  font-size: 48px;
  font-weight: bold;
  text-align: center;
}



  </style>
</head>
<body>

<h1>Date and Time Input Form</h1>
  <form id="dateTimeForm">
    <label for="dateInput">Enter a date:</label>
    <input type="date" id="dateInput" required>
    <br>
    <label for="timeInput">Enter a time:</label>
    <input type="time" id="timeInput" required>
    <br>
    <button type="submit">Update Date and Time</button>
  </form>

  <div id="clock"></div>
  <script>
function updateTime() {
  var currentTime = new Date();
  var hours = currentTime.getHours();
  var minutes = currentTime.getMinutes();
  var seconds = currentTime.getSeconds();

  // Add leading zeros if the values are less than 10
  hours = (hours < 10 ? "0" : "") + hours;
  minutes = (minutes < 10 ? "0" : "") + minutes;
  seconds = (seconds < 10 ? "0" : "") + seconds;

  var timeString = hours + ":" + minutes + ":" + seconds;
  document.getElementById("clock").textContent = timeString;
}

function updateCustomDateTime(event) {
  event.preventDefault();
  var dateInput = document.getElementById("dateInput").value;
  var timeInput = document.getElementById("timeInput").value;

  var dateTimeString = dateInput + "T" + timeInput;
  var customDateTime = new Date(dateTimeString);

  if (!isNaN(customDateTime)) {
    var isoDateTime = customDateTime.toISOString();
    document.getElementById("customDateTime").textContent = isoDateTime;
    setInterval(updateTime, 1000); // Resume updating the time every second
    document.getElementById("dateTimeForm").reset();
  }
}

document.getElementById("dateTimeForm").addEventListener("submit", updateCustomDateTime);


  </script>
</body>
</html>
