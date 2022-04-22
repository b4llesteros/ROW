export let renderEditButton = () => {

let editButtons = document.querySelectorAll(".edit-button"); 
let table = document.querySelector(".table");
let form = document.querySelector(".form");

editButtons.forEach(editButton => {

  editButton.addEventListener('click', () => {    
    table.classList.add("minimized");
    form.classList.add("active");
  });
});
}



