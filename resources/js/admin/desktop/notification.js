export let renderNotification = () => {


document.addEventListener("message", (event =>{

    let notificationLayer = document.querySelector('.notification');
    let notificationText = document.querySelector('.notification-text');

    notificationText.innerHTML = event.detail.text;
    notificationLayer.classList.add(event.detail.type);
    notificationLayer.classList.add('notification-active');
    
    

    setTimeout(() => {
        notificationLayer.classList.remove('notification-active');
        notificationLayer.classList.remove(event.detail.type);
    }, 5000);
}));
}