export let renderFilterButton = () => {

    let filterButton = document.querySelector(".filter-icon");  
    let filterMenu = document.querySelector(".filter-section"); 
    let container = document.querySelector(".container"); 
   

     filterButton.addEventListener('click', () => {  
          filterButton.classList.toggle("change")  
          filterMenu.classList.toggle("active")
          container.classList.toggle("container-movement")
        
    }); 
           
    }