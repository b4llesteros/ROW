export let renderForm = () => {
    //Es la etiqueta main, porque es quien contiene el 'Content'
    let mainContent = document.getElementById("main");
    let storeButton = document.querySelector('.save-button');
    let forms = document.querySelectorAll('.front-form');

    document.addEventListener("contact", (event => {

        renderForm();

    }), { once: true });

    document.addEventListener("checkout", (event => {

        renderForm();

    }), { once: true });


    if (storeButton) {

        storeButton.addEventListener("click", (event) => {
            //se pone para los botones que hay dentro de un formulario porque envía
            //donde no queremos
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

                            document.dispatchEvent(new CustomEvent('loadSection', {
                                detail: {
                                    section: 'contact'
                                }
                            }));
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