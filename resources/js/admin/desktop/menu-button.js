export let renderMenuButton = () => {

let hamburger = document.querySelector(".hamburger");  
let menu = document.querySelector(".menu"); 
let filterMenuClose = document.querySelector(".filter-section");
let container = document.querySelector(".container");
let filter = document.querySelector(".filter"); 
let containerTabs = document.querySelector(".edit-section");

      hamburger.addEventListener('click', () => {  
          hamburger.classList.toggle("change")  
          menu.classList.toggle("active")  
          filterMenuClose.classList.toggle("filter-section-disappear")
          filterMenuClose.classList.remove("active")
          container.classList.remove("container-movement")
          filter.classList.remove("active")
          containerTabs.classList.remove("container-movement")

    }); 
}


