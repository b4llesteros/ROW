export let renderCheckBox = () => {


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