export let renderTabs = () => {

    let tabs = document.querySelectorAll('.tab');
    let contents = document.querySelectorAll(".content");


    document.addEventListener("products", (event => {

        renderTabs();

    }), { once: true });


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