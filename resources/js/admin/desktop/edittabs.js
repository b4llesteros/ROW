
export let renderEditTabs = () => {

  let tabs = document.querySelectorAll('.tab');
  let contents = document.querySelectorAll(".content");



  tabs.forEach(tab => { 

      tab.addEventListener("click", () => {            
                     
          tabs.forEach(activeTabs => {
              activeTabs.classList.remove("tab--active");
          });  

          tab.classList.add("tab--active");                

          contents.forEach(content => {

              content.classList.remove("content--active");

              if (content.dataset.tab == tab.dataset.tab) { 
                  content.classList.add("content--active");
              }
          });         
      });
  });
}
              



// export let renderEditTabs = () => {

//   let editTabs = document.querySelectorAll(".tab");
//   let editTabsActive = document.querySelector(".tabs--active");
//   let contents = document.querySelector(".content");
//   let contentsActive = document.querySelector(".content--active");

//   editTabs.forEach(tab => {

//     tab.addEventListener('click', () => {
//         editTabs.classList.add("tabs--active"); 
//         editTabsActive.classList.remove("tabs--active");
//         contents.classList.add("content--active");
//         contentsActive.classList.remove("content--active");
//         contentsActive.classList.add("content");
//     });
// });
// }

