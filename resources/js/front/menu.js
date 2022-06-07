export let renderMenu = () => {

    let mainContent = document.getElementById("main");
    let menuOptions = document.querySelectorAll('.menu-option');


    if (menuOptions) {

        menuOptions.forEach(menuOption => {

            menuOption.addEventListener("click", () => {

                let url = menuOption.dataset.url;


                let sendShowRequest = async() => {

                    let response = await fetch(url, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                            },
                            method: 'GET',
                        })
                        .then(response => {

                            if (!response.ok) throw response;

                            return response.json();
                        })
                        .then(json => {

                            mainContent.innerHTML = json.content;

                            document.dispatchEvent(new CustomEvent('renderCounterModules'));
                            document.dispatchEvent(new CustomEvent('renderFaqsModules'));
                            document.dispatchEvent(new CustomEvent('renderProductModules'));



                        })
                        .catch(error => {

                            if (error.status == '500') {
                                console.log(error);
                            };
                        });
                };

                sendShowRequest();
            });
        });
    }
};