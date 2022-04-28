
export let renderEditTabs = () => {

  const tabs = document.querySelectorAll(".tab");
  const contents = document.querySelectorAll(".content");
  
  for (let i = 0; i < tabs.length; i++) {

    tabs[i].addEventListener("click", () => {

      for (let j = 0; j < contents.length; j++) {
        contents[j].classList.remove("content--active");
      }

      for (let jj = 0; jj < tabs.length; jj++) {
        tabs[jj].classList.remove("tabs--active");
      }

      contents[i].classList.add("content--active");
      tabs[i].classList.add("tabs--active");
    });
  }
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

