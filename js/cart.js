let cart = JSON.parse(sessionStorage.getItem('cart'));

function decreseProduntQuantity(id, size, price){
    let key = `${id}-${size}`;
    let cartItem = document.getElementById(key);

    if (cart[id][size]) {
        cart[id][size] -= 1;
        cartItem.querySelector(".quantity").innerHTML = cart[id][size];

        let totalSumContainer = document.getElementById("sum").innerHTML;
        let totalSum = parseFloat(totalSumContainer);
        price = parseFloat(price);
        totalSum -= price;
        document.getElementById('sum').innerHTML = totalSum.toFixed(2);
        
        let totalQuantityContainer = document.getElementById('totalItems').innerHTML;
        let totalQuantity = parseInt(totalQuantityContainer);
        totalQuantity--;
        document.getElementById('totalItems').innerHTML = totalQuantity;

        // If the quantity is 0, optionally remove the item from the cart
        if (cart[id][size] <= 0) {
            delete cart[id][size];
            cartItem.remove();
            if (Object.keys(cart[id]).length === 0) {
                // If no sizes are left, remove the product entry itself
                delete cart[id];
            }
        }
    }
    sessionStorage.setItem('cart', JSON.stringify(cart));
    updateCartInSession(cart);
}

function increaseProduntQuantity(id, size, price, quantityInStock){
    let key = `${id}-${size}`;
    let cartItem = document.getElementById(key);

    if (cart[id][size]) {
        if (cart[id][size] < quantityInStock) {
            cart[id][size] += 1;
            cartItem.querySelector(".quantity").innerHTML = cart[id][size];

            let totalSumContainer = document.getElementById("sum").innerHTML;
            let totalSum = parseFloat(totalSumContainer);
            price = parseFloat(price);
            totalSum += price;
            document.getElementById('sum').innerHTML = totalSum.toFixed(2);
            
            let totalQuantityContainer = document.getElementById('totalItems').innerHTML;
            let totalQuantity = parseInt(totalQuantityContainer);
            totalQuantity++;
            document.getElementById('totalItems').innerHTML = totalQuantity;
            sessionStorage.setItem('cart', JSON.stringify(cart));
            updateCartInSession(cart);
        } else {
            // Show error if product quantity reached max in stock
            let error = cartItem.querySelector('.quantity-error');
            error.style.display = 'block';
            setTimeout(()=>{
                error.style.display = 'none';
            }, 3000)
        }
    }
}




function updateCartInSession(updatedCart) {
    fetch('../php/handleUpdateCart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(updatedCart),
    })
}