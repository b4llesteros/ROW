export let renderFilterButton = () => {

    let filterButton = document.querySelector(".filter-icon");
    let filterMenu = document.querySelector(".filter-section");
    let container = document.querySelector(".container");
    let containerTabs = document.querySelector(".edit-section");
    let filter = document.querySelector(".filter");

    document.addEventListener("renderFormModules", (event => {
        renderFilterButton();
    }));


    filterButton.addEventListener('click', () => {
        filterButton.classList.toggle("change")
        filterMenu.classList.toggle("active")
        container.classList.toggle("container-movement")
        containerTabs.classList.toggle("container-movement")
        filter.classList.toggle("active")

    });

}