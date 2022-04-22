export let renderMenuButton = () => {

let hamburger = document.querySelector(".hamburger");  
let menu = document.querySelector(".menu");  
hamburger.addEventListener('click', () => {  
 hamburger.classList.toggle("change")  
 menu.classList.toggle("active")  
  }); 
 
}


