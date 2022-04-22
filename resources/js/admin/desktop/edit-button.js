export let renderEditButton = () => {

let editButtons = document.querySelectorAll(".edit-button"); 
let table = document.querySelector(".table");
let edit = document.querySelector(".edit-section");

editButtons.forEach(editButton => {

  editButton.addEventListener('click', () => {    
    table.classList.toggle("minimized");
    edit.classList.toggle("active");
  });
});
}



