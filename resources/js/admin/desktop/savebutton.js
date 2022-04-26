export let renderSaveButton = () => {

    let saveButton = document.querySelector(".save-button");  
    let saveButtonMenu = document.querySelector(".save-button-menu");
    let cancelButton = document.querySelector(".cancel-button");
    
    

     saveButton.addEventListener('click', () => {        
         saveButtonMenu.classList.add("save-button-menu-active")        
      });  

      cancelButton.addEventListener('click', () => {        
        saveButtonMenu.classList.remove("save-button-menu-active")        
     });  
               
    }
    
  