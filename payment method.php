<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Select Payment Method</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Select Your Payment Method</h1>
    </header>

    <main>
        <section class="payment-options">
            <h2>Choose a Payment Method</h2>
            <form id="payment-form" action="process_payment.php" method="post">
                <label for="credit-card">
                    <input type="radio" id="credit-card" name="payment_method" value="credit_card">
                    Credit Card
                </label><br>
                <label for="paypal">
                    <input type="radio" id="paypal" name="payment_method" value="paypal">
                    PayPal
                </label><br>
                <label for="bank-transfer">
                    <input type="radio" id="bank-transfer" name="payment_method" value="bank_transfer">
                    Bank Transfer
                </label><br>
                <!-- Add more payment options as needed -->

                <button type="submit">Proceed to Payment</button>
            </form>
        </section>
    </main>
</body>

</html>
