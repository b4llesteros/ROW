export let renderCounter = () => {

    document.addEventListener("renderCounterModules", (event => {
        renderCounter();
    }), { once: true });



    let plusMinusButtons = document.querySelectorAll(".plus-minus-button");

    plusMinusButtons.forEach(plusMinusButton => {

        plusMinusButton.addEventListener("click", () => {

            let plusMinusContainer = plusMinusButton.closest(".plus-minus-container");
            let plusMinusInput = plusMinusContainer.querySelector(".plus-minus-input");
            let value = parseInt(plusMinusInput.value);

            if (plusMinusButton.dataset.type == "plus") {
                value++;
            } else if (plusMinusButton.dataset.type == "minus" && value > 1) {
                value--;
            }

            plusMinusInput.value = value;

        });
    });

}