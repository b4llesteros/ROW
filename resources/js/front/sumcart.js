export let renderSumCart = () => {

    document.addEventListener("renderProductModules", (event => {
        renderSumCart();
    }), { once: true });


    let totalQuantity = document.querySelector('.total-quantity').value

    totalQuantity.addEventListener("click", (event) => {

            alert(totalQuantity.value);

        }

    );

}