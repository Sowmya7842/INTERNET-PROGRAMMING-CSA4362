<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cake Ordering Menu</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Welcome to Our Cake Ordering Menu</h1>
    </header>

    <main>
        <section class="cake-menu">
            <article class="cake-item">
                <img src="cake1.jpg" alt="Cake 1">
                <h2>Classic Chocolate Cake</h2>
                <p>A delectable classic chocolate cake perfect for any occasion.</p>
                <p>Price: $25</p>
                <button onclick="addToCart('Classic Chocolate Cake', 25)">Add to Cart</button>
            </article>

            <article class="cake-item">
                <img src="cake2.jpg" alt="Cake 2">
                <h2>Red Velvet Cake</h2>
                <p>A moist and velvety red cake with creamy frosting.</p>
                <p>Price: $30</p>
                <button onclick="addToCart('Red Velvet Cake', 30)">Add to Cart</button>
            </article>

            <!-- Add more cake items as needed -->
        </section>

        <aside class="cart">
            <h2>Your Cart</h2>
            <ul id="cart-items">
                <!-- Cart items will be dynamically added here -->
            </ul>
            <p>Total: <span id="cart-total">$0</span></p>
            <button onclick="checkout()">Checkout</button>
        </aside>
    </main>

    <script>
        let cartItems = [];
        let totalPrice = 0;

        function addToCart(itemName, price) {
            cartItems.push({ name: itemName, price: price });
            totalPrice += price;

            // Update the cart display
            displayCart();
        }

        function displayCart() {
            const cartList = document.getElementById('cart-items');
            cartList.innerHTML = '';

            cartItems.forEach(item => {
                const listItem = document.createElement('li');
                listItem.textContent = `${item.name} - $${item.price}`;
                cartList.appendChild(listItem);
            });

            document.getElementById('cart-total').textContent = `$${totalPrice}`;
        }

        function checkout() {
            // Implement checkout logic here, such as sending cart data to a server
            // For demonstration, let's log the cart items and total price
            console.log('Cart Items:', cartItems);
            console.log('Total Price:', totalPrice);

            // Clear the cart after checkout
            cartItems = [];
            totalPrice = 0;
            displayCart();
        }
    </script>
</body>

</html>
