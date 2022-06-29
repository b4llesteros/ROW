import { ClientJS } from 'clientjs';

export let renderFingerprint = () => {
    //Comprueba si dentro del sistema de alamcenaiento del ordenador está guardada la 
    //clave 'fp' 
    //getItem sirve para comprobar si existe una clave en el almacenamiento
    //Si no tiene ningún valor arranca la aplicación
    if (localStorage.getItem('fp') == null) {
        //se carga la libreria ClientJS
        const client = new ClientJS();

        let data = new FormData();
        //Se le añaden los datos que se quieran enviar
        data.append('fingerprint', client.getFingerprint());
        data.append('browser', client.getBrowser());
        data.append('browser_version', client.getBrowserVersion());
        data.append('os', client.getOS());
        data.append('os_version', client.getOSVersion());
        data.append('resolution', client.getCurrentResolution());

        let sendPostRequest = async() => {
            //llamada de tipo POST donde enviar los datos
            let response = await fetch('/fingerprint', {
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
                    //Cuando el servidor responde con una respuesta se guarda en la clave 'fp'
                    //en el almacenamiento local del navegador
                    localStorage.setItem('fp', json.fingerprint);
                })
                .catch(error => {

                        if (error.status == '500') {
                            console.log(error);
                        };
                    }

                );

        };

        sendPostRequest();

    }

};