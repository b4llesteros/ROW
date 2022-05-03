export let renderNotification = () => {


    let addButton = document.querySelector('.add-button');
    let addButtonNotification = document.querySelector('.add-button-notification');

    
           
        addButton.addEventListener('click',(timeout) => {
            addButtonNotification.classList.add('add-button-notification-active');
              
            setTimeout(() => {
                addButtonNotification.classList.remove('add-button-notification-active');
            }, 5000);    
        });       
}



