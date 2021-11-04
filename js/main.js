let buttonClicked = 0;
let counter = 0;
let counterElem = document.querySelector(".peopleUnderway");
let peopleUnderwayStored = localStorage.getItem("peopleUnderway");

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
