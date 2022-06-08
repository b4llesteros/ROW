export let renderCategoryFilter = () => {

    let mainContent = document.getElementById("main");
    let categoryOptions = document.querySelectorAll('.category');


    if (categoryOptions) {

        categoryOptions.forEach(categoryOption => {

            categoryOption.addEventListener("click", () => {

                let url = categoryOption.dataset.id;


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


                        })
                        .catch(error => {

                            if (error.status == '500') {
                                console.log(error);
                            };
                        });
                };

                sendShowRequest();
            });
        });
    }
};