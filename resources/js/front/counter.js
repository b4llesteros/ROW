export let renderCounter = () => {

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


// export let renderCounter = () => {

//     let plus = document.getElementById('plus');
//     let minus = document.getElementById('minus');
//     let counter = document.getElementById("counter");
    
  
//     plus.addEventListener("click",()=>{
//       count++;
//       counter.innerHTML=count;
//       console.log("plus");
//     })
  
//     minus.addEventListener("click",()=>{
//       if(count > 0){
//         count--;
//         counter.innerHTML=count;
//         console.log("minus");
//       }
//     });
  
//   }
  