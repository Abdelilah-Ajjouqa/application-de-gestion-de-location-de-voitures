const popupForm = document.getElementById("popupForm");

function utilisateurPopup(){
    popupForm.classList.remove("hidden");
}

function cancel(){
    popupForm.classList.add("hidden");
}