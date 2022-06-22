export let renderCheckout = () => {

    //Es la etiqueta main, porque es quien contiene el 'Content'
    let mainContent = document.getElementById("main");
    let checkoutButton = document.querySelector('.pay-button-checkout');
    let forms = document.querySelectorAll('.checkout-form');

    document.addEventListener("renderProductModules", (event => {
        renderCheckout();
    }), { once: true });

    if (checkoutButton) {

        checkoutButton.addEventListener("click", (event) => {
            //se pone para los botones que hay dentro de un formulario porque envía
            //donde no queremos
            event.preventDefault();

            forms.forEach(form => {

                let data = new FormData(form);
                let url = form.action;
                let sendPostRequest = async() => {

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



}