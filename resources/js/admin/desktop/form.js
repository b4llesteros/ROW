export let renderForm = () => {

    // Es la caja que contiene todo el formulario
    //views->admin->layout->table_form.blade.php
    let formContainer = document.querySelector(".form-container");
    //Es el botón de guardar del formulario
    //views->admin->components->savebutton.blade.php
    let storeButton = document.querySelector('.save-button');
    //Es el botón de vaciar el formulario
    //views->admin->components->cleanbutton.blade.php
    let createButton = document.querySelector('.create-button');
    //Es la etiqueta del formulario
    let forms = document.querySelectorAll('.admin-form');

    //Es un evento personalizado que se dispara cuando se renderiza el formulario
    //Se puede hacer para uno mismo 

    document.addEventListener("renderFormModules", (event => {
        renderForm();
    }), { once: true });


    if (createButton) {

        createButton.addEventListener("click", () => {

            let url = createButton.dataset.url;

            /* 
                A continuación vamos a hacer una llamada de tipo fetch, utilizando el método GET. Una llamada fetch es una
                promesa, y una promesa es una llamada que puede estar en estado pendiente, cumplida o rechazada. Para ello estamos
                diciendo que sendCreateRequest que es una función será asincrona, y se quedará esperando la respuesta de la
                llamada.
            */

            let sendCreateRequest = async() => { //Async es para que Js no se quede bloqueado esperando una respuesta

                /*
                    Para hacer una llamada fetch tenemos que pasarle un objeto con la información de la llamada. En este caso
                    vamos a pasarle la url de la que queremos hacer la llamada, y el método que queremos hacer. En el headers
                    vamos a pasarle un objeto con el tipo de contenido que queremos que nos devuelva.
                    Una llamada fetch puede ser exitosa o fallida. 
                    
                    Si es fallida, podemos obtener un error con el método
                    catch. El error tiene una propiedad llamada status, que nos indica el tipo de error. El error 500 es un
                    error interno del servidor, el error 404 es un error de que no se encontró la página, si es un error 422
                    es un error de validación, y el error 400 es un error de que el usuario no tiene permisos para realizar
                    la llamada.
                    Si es exitosa, podemos obtener la respuesta con el método then. Si la respuesta ha ido bien y todo es ok 
                */
                let response = await fetch(url, { //Fetch es una promesa, una llamada al servidor
                        headers: { //Es un objeto porque se encuentra entre las llaves y tiene esa propiedad del tipo de llamada
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                        method: 'GET',
                    })
                    .then(response => {

                        if (!response.ok) throw response;

                        return response.json(); //Json es un objeto que estructura datos en JavaScript, para acceder a un dato de JSON
                        // tenemos que pasarle el objeto JSON y el nombre del dato que queremos acceder ejem: json.form.
                    })
                    .then(json => {

                        formContainer.innerHTML = json.form;
                        document.querySelector('.edit-section').classList.add('active');

                        /*
                            Cuando hacemos un innerHTML se pierden todos los eventos de javascript, por lo que tenemos que
                            volver a asignar los eventos a los elementos que hemos creado. Para ello vamos a hacer un evento 
                            personalizado, que será el evento que cargará todo el javascript que tenga el formulario. 
                            En la siguiente línea estamos declarando un evento personalizado que se llamará 'renderFormModules' que 
                            podrá ser escuchado por el resto de archivos. 

                        */
                        document.dispatchEvent(new CustomEvent('renderFormModules'));
                    })
                    .catch(error => { //Se va al catch si el servidor no responde o no se puede conectar

                        if (error.status == '500') {
                            console.log(error);
                        };
                    });
            };

            sendCreateRequest();
        });
    }

    if (storeButton) {

        storeButton.addEventListener("click", (event) => {


            forms.forEach(form => {

                /*
                    En las siguientes líneas se obtiene el valor del formulario(todo lo del formulario) a través de un objeto FormData
                    y se captura la url que usaremos para enviar los datos al servidor.
                */
                //Captura los datos del formulario
                let data = new FormData(form);
                //Captura la url del formulario
                let url = form.action;


                /*	
                    En el siguiente valor estamos capturando los datos del ckeditor y se los añadimos a los datos
                    del formData. 
                */

                //Para coger los datos del CkEditor no se puede hacer con el FormData, se coge de la siguiente forma
                if (ckeditors != 'null') {

                    Object.entries(ckeditors).forEach(([key, value]) => {
                        data.append(key, value.getData());
                    });
                }

                // for (var pair of data.entries()) {
                //     console.log(pair[0] + ', ' + pair[1]);
                // }


                /*
                    A continuación vamos a hacer una llamada de tipo POST mediante fetch, esta vez vamos a 
                    añadir en los headers el token que nos ha dado Laravel el cual va a prevenir que se puedan 
                    hacer ataques de tipos cross-site scripting.
                */


                let sendPostRequest = async() => {

                    // document.dispatchEvent(new CustomEvent('startWait'));

                    let response = await fetch(url, {

                            //headers sirve para poner opciones a las llamadas
                            headers: {
                                //se manda la información en forma de JSON, se pide al servidor que acepte los datos en formato JSON
                                'Accept': 'application/json',
                                //El csrf-token es el identificador de sesión, en la siguiente línea
                                //se está capturando el token que nos ha dado Laravel
                                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                            },
                            //Cuando se hace una llamada de tipo POST o DELETE, hay que garantizar que el mismo
                            //usuario que abre la web es el mismo que manda la petición.
                            method: 'POST',
                            //Este data son los datos del formulario del FormData
                            body: data
                        })
                        .then(response => {

                            if (!response.ok) throw response;

                            return response.json();
                        })
                        .then(json => {

                            formContainer.innerHTML = json.form;
                            document.querySelector('.edit-section').classList.add('active');


                            document.dispatchEvent(new CustomEvent('loadTable', {
                                detail: {
                                    table: json.table,
                                }
                            }));

                            document.dispatchEvent(new CustomEvent('renderFormModules'));
                            document.dispatchEvent(new CustomEvent('renderTableModules'));
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