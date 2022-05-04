export let renderNotification = (message, state) => {

    let notificationLayer = document.querySelector('.notification');
    let notificationText = document.querySelector('.notification-text');

    notificationLayer.classList.add('notification-active');
    notificationLayer.classList.add(state);
    notificationText.innerHTML = message;

    setTimeout(() => {
        notificationLayer.classList.remove('notification-active');
    }, 5000);

}