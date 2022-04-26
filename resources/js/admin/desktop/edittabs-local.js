export let renderEditTabsLocal = () => {

  const tabs = document.querySelectorAll(".tab-local");
  const contents = document.querySelectorAll(".content-local");
  
  for (let i = 0; i < tabs.length; i++) {

    tabs[i].addEventListener("click", () => {

      for (let j = 0; j < contents.length; j++) {
        contents[j].classList.remove("content--active-local");
      }

      for (let jj = 0; jj < tabs.length; jj++) {
        tabs[jj].classList.remove("tabs--active-local");
      }

      contents[i].classList.add("content--active-local");
      tabs[i].classList.add("tabs--active-local");
    });
  }
}


