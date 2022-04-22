export let renderFilterButton = () => {

    let filterButton = document.querySelector(".filter-icon");  
    let filterMenu = document.querySelector(".filter-section");  
    filterButton.addEventListener('click', () => {  
     filterButton.classList.toggle("change")  
     filterMenu.classList.toggle("active")  
      }); 
     
    }