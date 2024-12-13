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


//Cars page : 
const carForm = document.getElementById("secondForm");

function addCars(){
    carForm.classList.remove("hidden");
}