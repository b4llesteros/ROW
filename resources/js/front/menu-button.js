export let renderMenuButton = () => {

    const hamburger = document.querySelector(".hamburger");
    const navsub = document.querySelector(".nav-sub");
    if (hamburger) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle("change")
            navsub.classList.toggle("nav-change")
        });
    }

}