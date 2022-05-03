
export let renderCounter = () => {


    let plusMinusButtons = document.querySelectorAll(".plus-minus-button");
    
    
        plusMinusButtons.forEach(plusMinusButton => {
        
            plusMinusButton.addEventListener("click", () => {

                let plusMinusContainer = plusMinusButton.closest(".plus-minus-container");
                let plusMinusInput = plusMinusContainer.querySelector(".plus-minus-input");
                let value = parseInt(plusMinusInput.value);
        
                if(plusMinusButton.dataset.type == "plus") {
                    value++;
                } else if (plusMinusButton.dataset.type == "minus" && value > 1) {
                    value--;
                }
        
                plusMinusInput.value = value;
            });
        });
    
    
    }
    

    // export let renderCounter = () => {

    //     let plus = document.getElementById("plus");
    //     let minus = document.getElementById("minus");
    //     let counter = document.getElementById("counter");
    
    //     plus.addEventListener("click", () => {
    //         counter.value = (parseInt(counter.value) + 1);
    //     });
    
    //     minus.addEventListener("click", () => {
    //         if (counter.value > 1) {
    //             counter.value = (parseInt(counter.value) - 1);
    //         }
    //     });
    // }
    
    
    
    
    