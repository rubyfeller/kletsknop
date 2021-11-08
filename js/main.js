let buttonClicked = 0;
let counter = 0;
let counterElem = document.querySelector(".peopleUnderway");
let serverValDiv = document.querySelector("serverMessage");
let peopleUnderwayStored = localStorage.getItem("peopleUnderway");
let socketMessage = "";

getMessage();

if (buttonClicked == 0) {
  showNotification();
}

if (!localStorage.getItem("peopleUnderway")) {
  localStorage.setItem("peopleUnderway", 0);
} else {
  counterElem.innerHTML = peopleUnderwayStored + " " + "mens(en) onderweg";
}

function showNotification() {
  document.getElementById("notification").style.display = "inline";
}

function getMessage() {
  alert("executed");
  fetch("websockets/getMessages.php")
    .then((response) => response.json())
    .then((data) => console.log(data));

  socketMessage = data;
  serverMessage.innerHTML = socketMessage;
  alert(socketMessage);
}

function accept() {
  peopleUnderwayStored++;
  localStorage.setItem("peopleUnderway", peopleUnderwayStored);
  counterElem.innerHTML = peopleUnderwayStored + " " + "mens(en) onderweg";
  document.getElementById("acceptedNotification").style.display = "block";
  setTimeout(() => {
    document.getElementById("acceptedNotification").style.display = "none";
  }, 3000);
}

function acceptNotification() {
  document.getElementById("acceptedNotification").style.display = "block";
  setTimeout(() => {
    document.getElementById("acceptedNotification").style.display = "none";
    document.getElementById("notification").style.display = "none";
  }, 3000);
}

function rejectNotification() {
  document.getElementById("rejectedNotification").style.display = "block";
  setTimeout(() => {
    document.getElementById("rejectedNotification").style.display = "none";
    document.getElementById("notification").style.display = "none";
  }, 3000);
}

function reject() {
  document.getElementById("notification").style.display = "none";
  document.getElementById("rejectedNotification").style.display = "block";
  setTimeout(() => {
    document.getElementById("rejectedNotification").style.display = "none";
  }, 3000);
}

function test() {
//This will open the connection*
ws = new WebSocket("ws://192.168.48.42:80"); 
        
// Then you can send a message
ws.onopen = function () {
connection.send("Ping");
};
        
//Log the messages that are returned from the server
ws.onmessage = function (e) {
console.log("From Server:"+ e.data);
};
        
//Sending a simple string message
ws.send("HelloHelloIsThereAnyoneThere");
};
        
//Close the connection
ws.close();