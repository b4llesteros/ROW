export let renderContactForm = () => {

    // Es la caja que contiene todo el formulario
    //views->admin->layout->table_form.blade.php
    let formContainer = document.querySelector(".form-container");
    //Es el botón de guardar del formulario
    //views->admin->components->savebutton.blade.php
    let storeButton = document.querySelector('.send-button');
    //Es la etiqueta del formulario
    let forms = document.querySelectorAll('.admin-form');

    //Es un evento personalizado que se dispara cuando se renderiza el formulario
    //Se puede hacer para uno mismo 

    document.addEventListener("loadForm", (event => {
        formContainer.innerHTML = event.detail.form;
    }), { once: true });

    document.addEventListener("renderFormModules", (event => {
        renderForm();
    }), { once: true });


    if (storeButton) {

        storeButton.addEventListener("click", (event) => {

            alert("Se ha enviado el formulario");


            forms.forEach(form => {

                let data = new FormData(form);

                let url = form.action; //action es una propiedad del formulario donde pone el enlace

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


                            formContainer.innerHTML = json.form;


                            //Se manda el evento renderFormModules para que se reactive el JavaScript
                            document.dispatchEvent(new CustomEvent('renderFormModules'));

                        })
                        .catch(error => {

                            // document.dispatchEvent(new CustomEvent('stopWait'));
                            // Si hay un error y es igual al 422, es un error de validador
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