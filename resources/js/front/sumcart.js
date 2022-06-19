export let renderSumCart = () => {    

    document.addEventListener("renderProductModules", (event => {
        renderSumCart();
    }), { once: true });

  
    function sumar()
    {
      let total = document.getElementById('totalPriceValue');
      let subtotal = 0;
      [ ...document.getElementsByClassName( "totalBasePrice" ) ].forEach( function ( element ) {
        if(element.value !== '') {
          subtotal += parseFloat(element.value);
        }
      });
      total.value = subtotal;
      
      sumar();
    }

}

