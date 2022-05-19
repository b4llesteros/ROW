export let renderCloseEdit = () => {


    let closeEditButton = document.querySelector('.closeedit');
    let table = document.querySelector(".table");
    let edit = document.querySelector(".edit-section");

    closeEditButton.addEventListener('click', () => {
        table.classList.remove("minimized");
        edit.classList.remove("active");
    });

}