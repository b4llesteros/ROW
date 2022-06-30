export let renderCart = () => {

    let mainContent = document.getElementById("main");
    let toCheckout = document.querySelector('.to-checkout');
    let plusMinusButtons = document.querySelectorAll(".plus-minus-button-cart");

    document.addEventListener("cart", (event => {

        renderCart();

    }), { once: true });


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

                            document.dispatchEvent(new CustomEvent('cart'));

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

    if (toCheckout) {

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
                        document.dispatchEvent(new CustomEvent('loadSection', {
                            detail: {
                                section: 'checkout'
                            }
                        }));
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

}