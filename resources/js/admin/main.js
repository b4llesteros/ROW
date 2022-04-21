let hamburger = document.querySelector(".hamburger");  
let menu = document.querySelector(".menu");  
hamburger.addEventListener('click', () => {  
 hamburger.classList.toggle("change")  
 menu.classList.toggle("active")  
}); 



let editButtons = document.querySelectorAll(".edit-button"); 
let table = document.querySelector(".table");
let form = document.querySelector(".form");

editButtons.forEach(editButton => {

  editButton.addEventListener('click', () => {
    table.classList.add("minimized");
    form.classList.add("active");
  });
});




// let hamburger = document.querySelector(".hamburger");  
// let menu = document.querySelector(".menu");  
// hamburger.addEventListener('click', () => {  
//  menu.classList.add("active"); 
 
// }); 





//  let cancel = document-querySelector(".edit-button");

//  editButtons.addEventListener('click', () => {
//   column.classList.toggle("desktop-one-column");
   
//   });

// });




// let edit = document.querySelectorAll(".penicon"); 
// let table = document.querySelector(".table");
// let form = document.querySelector(".editform");

// edit.forEach(penicon => {
//   penicon.addEventListener('click', () => {
//     table.classList.toggle("table-change") ; 
//     form.classList.toggle("form-change");
    
//   });
// });


