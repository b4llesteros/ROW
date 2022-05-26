export let renderAddButton = () => {

    let addButtons = document.querySelectorAll(".add-button");
    let table = document.querySelector(".table");
    let edit = document.querySelector(".edit-section");

    document.addEventListener("renderFormModules", (event => {
        renderAddButton();
    }));

    addButtons.forEach(addButton => {

        addButton.addEventListener('click', () => {
            table.classList.add("minimized");
            edit.classList.add("active");
        });
    });



}