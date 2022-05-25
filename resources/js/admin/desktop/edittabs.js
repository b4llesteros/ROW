export let renderEditTabs = () => {
    3
    //Es un evento personalizado que se dispara cuando se renderiza el formulario
    document.addEventListener("renderFormModules", (event => {
        renderEditTabs();
    }));

    let tabs = document.querySelectorAll('.tab');
    let contents = document.querySelectorAll(".content");

    tabs.forEach(tab => {

        tab.addEventListener("click", () => {

            tabs.forEach(activeTabs => {
                activeTabs.classList.remove("tab--active");
            });

            tab.classList.add("tab--active");

            contents.forEach(content => {

                content.classList.remove("content--active");

                if (content.dataset.tab == tab.dataset.tab) {
                    content.classList.add("content--active");
                }
            });
        });
    });
}