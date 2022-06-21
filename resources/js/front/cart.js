export let renderCart = () => {

    let mainContent = document.getElementById("main");
    let addToCart = document.querySelector('.add-to-cart');
    let forms = document.querySelectorAll('.cart-form');

    let toCheckout = document.querySelector('.to-checkout');


    document.addEventListener("renderProductModules", (event => {
        renderCart();
    }), { once: true });

    if (addToCart) {

        addToCart.addEventListener("click", (event) => {

            event.preventDefault();

            forms.forEach(form => {

                let data = new FormData(form);
                let url = form.action;

                let sendPostRequest = async() => {

                    //Para llamada POST y DELETE hace falta X-CSRF-TOKEN
                    //Fetch es para realizar llamadas al servidor en Js
                    let response = await fetch(url, {
                            headers: {
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                            },
                            method: 'POST',
                            body: data
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


                            if (error.status == '422') {

                                error.json().then(jsonError => {

                                    let errors = jsonError.errors;
                                    let errorMessage = '';

                                    Object.keys(errors).forEach(function(key) {
                                        errorMessage += '<li>' + errors[key] + '</li>';
                                    })

                                    document.dispatchEvent(new CustomEvent('message', {
                                        detail: {
                                            message: errorMessage,
                                            type: 'error'
                                        }
                                    }));
                                })
                            }

                            if (error.status == '500') {
                                console.log(error);
                            };
                        });
                };

                sendPostRequest();
            });
        });
    }



    let plusMinusButtons = document.querySelectorAll(".plus-minus-button-cart");

    plusMinusButtons.forEach(plusMinusButton => {

            plusMinusButton.addEventListener("click", (event) => {

                event.preventDefault();

                let url = plusMinusButton.dataset.url;

                let sendCreateRequest = async() => {
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
                sendCreateRequest();
            });
        }

    );

    toCheckout.addEventListener("click", () => {

        let url = toCheckout.dataset.url;

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


}