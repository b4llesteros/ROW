export let renderSaveButton = () => {

    let saveButton = document.getElementById('save-button');
    let nameInput = document.getElementById('name-input');

    document.addEventListener("renderFormModules", (event => {
        renderSaveButton();
    }));


    if (saveButton) {
        saveButton.addEventListener('click', function() {


            let name = nameInput.value;

            if (name) {
                document.dispatchEvent(new CustomEvent('message', {
                    detail: {
                        text: 'Formulario enviado correctamente',
                        type: 'success'
                    }
                }));
            } else {
                document.dispatchEvent(new CustomEvent('message', {
                    detail: {
                        text: 'Por favor, rellene el formulario',
                        type: 'error'
                    }
                }));
            }
        });
    }
};