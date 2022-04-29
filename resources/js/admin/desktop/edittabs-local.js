export let renderEditTabsLocal = () => {

  let tabs = document.querySelectorAll('.tab-local');
  let contents = document.querySelectorAll(".content-local");



  tabs.forEach(tab => { 

      tab.addEventListener("click", () => {            
                     
          tabs.forEach(activeTabs => {
              activeTabs.classList.remove("tab--active-local");
          });  

          tab.classList.add("tab--active-local");                

          contents.forEach(content => {

              content.classList.remove("content--active-local");

              if (content.dataset.tab == tab.dataset.tab) { 
                  content.classList.add("content--active-local");
              }
          });         
      });
  });
}
              
