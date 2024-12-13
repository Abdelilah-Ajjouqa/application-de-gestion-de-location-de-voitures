//input data from the first form: 
const name = document.getElementById("name");
const adress = document.getElementById("adress");
const phone = document.getElementById("phone");

// input data from the seconde form :
const marque = document.getElementById("marque");
const modele = document.getElementById("modele");
const date = document.getElementById("date");

const secondFormBtn = document.querySelector("#secondForm");
const firstFormBtn = document.querySelector("#firstForm");

function addClient(){
    firstFormBtn.classList.remove("hidden");
}

function secondePopup(){
    secondFormBtn.classList.remove("hidden");
}

// seconde form :
function nextPopup(){
    firstFormBtn.classList.add("hidden");
    secondFormBtn.classList.remove("hidden");
}

//close popups
function closeFirst(){
    firstFormBtn.classList.add("hidden");
}

function closeSconde(){
    secondFormBtn.classList.add("hidden");
}