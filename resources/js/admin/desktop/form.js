import { renderNotification } from "./notification.js";


export let renderForm = () => {

    let saveButton = document.querySelector('.save-button');

    saveButton.addEventListener('click',() => {

        renderNotification("Saved Succesfuly" , "success");
            
    });
}
