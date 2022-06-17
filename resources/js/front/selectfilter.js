export let renderSelectFilter = () => {

    let mainContent = document.getElementById("main");
    let selectFilter = document.querySelector('.select-filter');
    let filterOption = document.querySelectorAll('.filter-option');

    document.addEventListener("renderProductModules", (event => {
        renderSelectFilter();
    }), { once: true });

    if (selectFilter) {
        selectFilter.addEventListener("change", () => {

            let url = selectFilter.value;

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

}