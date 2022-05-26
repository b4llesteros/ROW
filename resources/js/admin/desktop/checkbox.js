export let renderCheckBox = () => {

    //Es un evento personalizado que se dispara cuando se renderiza el formulario
    document.addEventListener("renderFormModules", (event => {
        renderCheckBox();
    }));

    let checkBox = document.getElementById("checkbox");

    checkBox.addEventListener('click', () => {
        checkBox.toggleAttribute("checked");
    });

}




// checkBox.addEventListener('click', () => {
//     if(checkBox.checked){
//         checkBox.checked = true;
//         alert('checkbox esta seleccionado');
//     }else{
//         checkBox.checked = false;
//     }
// });
