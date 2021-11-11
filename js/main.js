let buttonClicked = 0;
let counter = 0;
let counterElem = document.querySelector(".peopleUnderway");
let serverGetMessages = document.querySelector("serverMessage");
let peopleUnderwayStored = localStorage.getItem("peopleUnderway");
let socketMessage = "";

setInterval(getMessage, 5000);

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

async function getMessage() {
  fetch('http://192.168.48.42:8080/API/clicks')
  .then(data => {
  return data.json();
  })
  .then(post => {
    if (post.msg.clickMessage) {
      console.log(post.msg.clickMessage);
      let clickId = post.msg.clickId;
      let clickMessage = post.msg.clickMessage;
      let clickTime = post.msg.clickTime;
      document.getElementById("serverMessage").innerHTML = clickId + " " +  clickMessage + " " + clickTime;
      document.getElementById("notificationData").innerHTML = "Er is iemand eenzaam";
    }
    else {
      console.log("Er is nog niet op de knop gedrukt");
    }
  
  });
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

