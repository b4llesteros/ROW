export let renderProduct = () => {

    let mainContent = document.getElementById("main");
    let productButtons = document.querySelectorAll('.product-link-button');
    let categoryOptions = document.querySelectorAll('.category-button');

    document.addEventListener("renderProductModules", (event => {
        renderProduct();
    }), { once: true });

    if (productButtons) {

        productButtons.forEach(productButton => {

            productButton.addEventListener("click", () => {

                let url = productButton.dataset.url;

                console.log(productButton);

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


    if (categoryOptions) {

        categoryOptions.forEach(categoryOption => {

            categoryOption.addEventListener("click", () => {

                let url = categoryOption.dataset.url;

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