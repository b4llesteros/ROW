export let renderDeleteButton = () => {

    let modalDelete = document.querySelector('.delete-layer');
    let deleteConfirm = document.querySelector('.delete-confirm-button');
    let deleteCancel = document.querySelector('.delete-cancel-button');

    document.addEventListener("renderTableModules", (event => {
        renderDeleteButton();
        //Se pone para que no se quede bloqueado el equipo a base de hacer llamadas y eventos
    }), { once: true });

    document.addEventListener("openModalDelete", (event => {

        deleteConfirm.dataset.url = event.detail.url;
        modalDelete.classList.add('active');
    }), { once: true });

    deleteCancel.addEventListener("click", () => {
        modalDelete.classList.remove('active');
    });

    deleteConfirm.addEventListener("click", () => {

        let url = deleteConfirm.dataset.url;

        let sendDeleteRequest = async() => {

            let response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                    },
                    method: 'DELETE',
                })
                .then(response => {

                    if (!response.ok) throw response;

                    return response.json();
                })
                .then(json => {

                    if (json.table) {
                        document.dispatchEvent(new CustomEvent('loadTable', {
                            detail: {
                                table: json.table,
                            }
                        }));
                    }

                    document.dispatchEvent(new CustomEvent('loadForm', {
                        detail: {
                            form: json.form,
                        }
                    }));

                    modalDelete.classList.remove('active');
                    document.querySelector('.edit-section').classList.add('active');
                    document.querySelector('.table').classList.add('minimized');
                    document.dispatchEvent(new CustomEvent('renderFormModules'));
                    document.dispatchEvent(new CustomEvent('renderTableModules'));
                })
                .catch(error => {

                    if (error.status == '500') {
                        console.log(error);
                    };
                });
        };

        sendDeleteRequest();
    });

};
