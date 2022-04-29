
export let renderCounterCart = () => {

    let plus = document.getElementById("plus");
    let minus = document.getElementById("minus");
    let counter = document.getElementById("counter");
   

    plus.addEventListener("click", () => {
        counter.value = (parseInt(counter.value) + 1);
        
    });

    minus.addEventListener("click", () => {
        if (counter.value > 1) {
            counter.value = (parseInt(counter.value) - 1);
        }       
    });
}
