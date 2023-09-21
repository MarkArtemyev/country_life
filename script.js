let cart = [];
let total = 0;

function addToCart(productName, price) {
    cart.push({ name: productName, price: price });
    total += price;
    updateCart();
}

function updateCart() {
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');

    cartItems.innerHTML = '';
    cart.forEach(item => {
        const listItem = document.createElement('li');
        listItem.innerText = `${item.name} - $${item.price}`;
        cartItems.appendChild(listItem);
    });

    cartTotal.innerText = `$${total.toFixed(2)}`;
}

function checkout() {
    alert(`Total: $${total.toFixed(2)}\nThank you for your purchase!`);
    cart = [];
    total = 0;
    updateCart();
}
