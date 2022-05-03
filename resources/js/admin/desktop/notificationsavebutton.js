export let renderNotificationSaveButton = () => {


    let saveButton = document.querySelector('.save-button');
    let saveButtonNotification = document.querySelector('.save-button-notification');
        
           
        saveButton.addEventListener('click',() => {
            saveButtonNotification.classList.add('save-button-notification-active');
              
            setTimeout(() => {
                saveButtonNotification.classList.remove('save-button-notification-active');
            }, 3000);    
        });       
}

