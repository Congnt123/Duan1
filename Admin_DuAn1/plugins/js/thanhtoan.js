
document.addEventListener('DOMContentLoaded', function() {
    const priceElement = document.querySelector('.price');
    const totalElement = document.querySelector('.total');
    const quantityInput = document.querySelector('.quantity');
    const minusButton = document.querySelector('.minus');
    const plusButton = document.querySelector('.plus');

    let price = priceElement.textContent.replace('$', '');
    price = price.replace('.', '');
    price = price.replace('₫', '');
    price = parseFloat(price);
    let quantity = parseInt(quantityInput.value);

    function updateTotal() {
        let total = price * quantity;
        // totalElement.textContent = `${total.toFixed(3)}`;
        totalElement.textContent = `${total.toFixed(3)}`;
    }

    console.log(price);

    minusButton.addEventListener('click', function() {
        if (quantity > 1) {
            quantity--;
            quantityInput.value = quantity;
            updateTotal();
        }
    });

    plusButton.addEventListener('click', function() {
        quantity++;
        quantityInput.value = quantity;
        updateTotal();
    });

    updateTotal(); 
});


